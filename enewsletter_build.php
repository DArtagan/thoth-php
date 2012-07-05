<?php
  ($_POST['section']) ? $section = $_POST['section'] : $section["count"] = 1;
  
  # save it to file
  $filename = 'enewsletter.save';
  $fp = fopen($filename, 'w+') or die("I could not open $filename.");
  fwrite($fp, serialize($section));
  fclose($fp);
?>
<html>
<head>
<style type="text/css">
  html, body {
    height: 100%;
    margin: 0px;
    padding: 0px;
    width: 100%;
    background: #dddddd;
  }
  table {
    margin: 0px auto;
  }
</style>
</head>
<body>
<form name="contentForm" class="content-text" action="enewsletter_build.php" method="post" enctype="multipart/form-data">
  <p><label for="section[count]">Number of sections: <input type="text" name="section[count]" value="<?php echo $section["count"]; ?>"></label></p>
  <table>
    <tr class="title" bgcolor="#cc9e54">
      <td style="border-top: 1px solid rgb(85, 85, 85); border-bottom: 1px solid rgb(85, 85, 85); padding: 2px 10px; font-family: arial; font-weight: bold; text-transform: uppercase;" colspan="2" valign="top" width="600">
        <label for="section[banner]">Banner Source URL: <input type="text" name="section[banner]" value="<?php echo $section["banner"]; ?>"></label>
      </td>
    </tr>
    <?php for($i = 0; $i < $section["count"]; $i++) { ?>
      <tr class="title" bgcolor="#cc9e54">
        <td style="border-top: 1px solid rgb(85, 85, 85); border-bottom: 1px solid rgb(85, 85, 85); padding: 2px 10px; font-family: arial; font-weight: bold; text-transform: uppercase;" colspan="2" valign="top" width="600"><label for="section[<?php echo $i; ?>][name]">Heading: <input type="text" name="section[<?php echo $i; ?>][name]" value="<?php echo $section[$i]["name"]; ?>"></label><label for="section[<?php echo $i; ?>][link]">Link: <input type="text" name="section[<?php echo $i; ?>][link]" value="<?php echo $section[$i]["link"]; ?>"></label></td>
      </tr>
      <tr class="content" bgcolor="#dde8ea">
        <td class="content-image" width="150" align="center">
          <label for="section[<?php echo $i; ?>][lines]">Number of Entries: <input type="text" name="section[<?php echo $i; ?>][lines]" value="<?php echo $section[$i]["lines"]; ?>"></label>
          <label for="section[<?php echo $i; ?>][secImage]">Image Source URL: <input type="text" name="section[<?php echo $i; ?>][secImage]" value="<?php echo $section[$i]["secImage"]; ?>"></label>
          <label for="section[<?php echo $i; ?>][secImageLink]">Image Link: <input type="text" name="section[<?php echo $i; ?>][secImageLink]" value="<?php echo $section[$i]["secImageLink"]; ?>"></label>
        </td>
        <td width="475">
          <ul style="margin: 5px 25px 15px; padding: 0px; font-family: tahoma; font-size: 15px; list-style-type: circle;">
            <?php for($j = 0; $j < $section[$i]["lines"]; $j++) { ?>
              <li>
                <?php $lineTitle = 'line' . $j; ?>
                <label for="<?php echo 'section[' . $i . '][' . $lineTitle . ']'; ?>"><input type="text" name="<?php echo 'section[' . $i . '][' . $lineTitle . ']'; ?>" value="<?php echo $section[$i][$lineTitle]; ?>"></label><br />
                <label for="<?php echo 'section[' . $i . '][' . $lineTitle . ']'; ?>[text]">Line <?php echo $j + 1 . '&nbsp;'; ?>Text: <input type="text" name="<?php echo 'section[' . $i . '][' . $lineTitle . ']'; ?>[text]" value="<?php echo $section[$i][$lineTitle]["text"]; ?>"></label><br />
                <label for="<?php echo 'section[' . $i . '][' . $lineTitle . ']'; ?>[link]">Line <?php echo $j + 1 . '&nbsp;'; ?>Link: <input type="text" name="<?php echo 'section[' . $i . '][' . $lineTitle . ']'; ?>[link]" value="<?php echo $section[$i][$lineTitle]["link"]; ?>"></label>
              </li>
            <?php } ?>
          </ul>
        </td>
      </tr>
    <?php } ?>
  </table>
  <input type="submit" />
</form>
</body>
</html>
