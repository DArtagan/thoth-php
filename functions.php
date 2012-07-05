<?php
function createThumb($pathToImage, $pathToThumb, $thumbHeight) {
      // load image and get image size
      $img = imagecreatefromjpeg( "{$pathToImage}" );
      $width = imagesx( $img );
      $height = imagesy( $img );

      // calculate thumbnail size
      $new_height = $thumbHeight;
      $new_width = floor( $width * ( $thumbHeight / $height ) );

      // create a new temporary image
      $tmp_img = imagecreatetruecolor( $new_width, $new_height );

      // copy and resize old image into new image
      imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

      // save thumbnail into a file
      if(imagejpeg( $tmp_img, $pathToThumb )) {
        return "Thumbnail successfully created: " . $pathToThumb;
      } else {
        return "Creation of thumbnail failed.";
      }
}
// call createThumb function and pass to it as parameters the path
// to the image, the path to the future thumbnail and the thumbnail's width.
// We are assuming that the path will be a relative path working
// both in the filesystem, and through the web for links
?>

<? // Display Images
function bannerSelector($pathToBanners, $banner, $url) {
  // open the directory
  $thumbDir = $pathToBanners . 'thumbs/';
  $dir = opendir( $thumbDir );

  $counter = 0;
  $output = '<table><tr>';
  // loop through the directory
  while (false !== ($fname = readdir($dir)))
  {
    // strip the . and .. entries out
    if ($fname != '.' && $fname != '..')
    {
      $bannerUrl = dirname($url) . '/' . $pathToBanners . $fname;
      $output .= '<td valign="middle" align="center"><a href="' . $pathToBanners . $fname . '">';
      $output .= '<img src="' . $thumbDir . $fname . '" border="0" style="height: 50px;" /></a><input type="radio" name="banner" value="' . $bannerUrl;

      if(isset($banner) && $banner == $bannerUrl) {$output .= '" checked="checked"';}
      
      $output .= '" onClick="this.form.submit();" /></td>';

      $counter++;
      if ( $counter % 3 == 0 ) { $output .= '</tr><tr>'; }
    }
  }
  // close the directory
  closedir( $dir );

  $output .= '</tr></table>';
  
  echo $output;
}

// Save function
function saveContent($name, $content, $banner = 0) {
  @ $fp = fopen('orders.txt', 'ab');
  flock($fp, LOCK_EX);
  if(!$fp) {
    ?><p style="font-weight: bold;">Your save didn't go through, please try again in a moment.</p><?php
    exit;
  }
  
  fwrite($fp, $outputstring, strlen($outputstring));
  flock($fp, LOCK_UN);
  fclose($fp);
}

// Banner Uploader
function bannerUploader($file, $location) {
  if ((($_FILES[$file]["type"] == "image/gif")
  || ($_FILES[$file]["type"] == "image/jpeg")
  || ($_FILES[$file]["type"] == "image/pjpeg"))
  && ($_FILES[$file]["size"] < 5000000)) {
    if ($_FILES[$file]["error"] > 0) {
      $outputString = "Return Code: " . $_FILES[$file]["error"] . "<br />";
    } else {
      $outputString = "Upload: " . $_FILES[$file]["name"] . "<br />";
      $outputString .= "Type: " . $_FILES[$file]["type"] . "<br />";
      $outputString .= "Size: " . ($_FILES[$file]["size"] / 1024) . " Kb<br />";
      $outputString .= "Temp file: " . $_FILES[$file]["tmp_name"] . "<br />";

      if (file_exists($location . $_FILES[$file]["name"])) {
        $outputString .= $_FILES[$file]["name"] . " already exists. ";
      } else {
        move_uploaded_file($_FILES[$file]["tmp_name"],
        $location . $_FILES[$file]["name"]);
        $outputString .= "Stored in: " . $location . $_FILES[$file]["name"];
        $pathToImage = $location . $_FILES[$file]["name"];
        $pathToThumb = $location . 'thumbs/' . $_FILES[$file]["name"];
        $outputString .= '<br />' . createThumb($pathToImage, $pathToThumb, 50);
      }
    }
  } else {
      $outputString = "Invalid file";
  }
  return $outputString;
}

/*
 * Return array of template names
 */
function listTemplates($dir) {
  if ($handle = opendir($dir)) {
    $templates[0] = 0;
    $templates = array();
    while(false !== ($entry = readdir($handle))) {
      if(is_dir($dir . '/' . $entry) && $entry != '..' && $entry != '.') {
        $templates[0]++;
        $templates[$templates[0]] = $entry;
      }
    }
  }
  closedir($handle);
  
  return $templates;
}
?>