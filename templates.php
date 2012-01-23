<?php 
/*function DirTree4($dir)
{
    $tree = array();
    $dirs = array(array($dir, &$tree));
   
    for($i = 0; $i < count($dirs); ++$i) {
        $d = opendir($dirs[$i][0]);
        $tier =& $dirs[$i][1];
 
        while (false !== ($file = readdir($d))) {
            if ($file != '.' and $file != '..') {
                $path = $dirs[$i][0] . DIRECTORY_SEPARATOR . $file;
                if (is_dir($path)) {
                  $tier[$file] = array();
                  $dirs[] = array($path, &$tier[$file]);
                } else {
                  $tier[$file] = dirname($path);
                }
            }
        }
    }
   
    return $tree;
}
 
$tree = DirTree4('templates/');*/
//var_export($tree);
//var_dump($tree);

/* var_dump($branch);
  echo key($branch);
}

function searchAndDestroy(&$a){
  foreach($a as $k => &$v){
    if(is_array($v)){
      searchAndDestroy($v);
    } else {
      echo $v . '<br />';
    }
  }
}*/

//searchAndDestroy($tree);

$dir = getcwd() . '/templates';
opendir($dir);
$d = opendir($dir);
//echo dirname(getcwd);

if ($handle = opendir($dir)) {
    echo "Entries:\n";
    $i = 0;
    $templates = array();
    while (false !== ($entry = readdir($handle))) {
        if(is_dir($dir . '/' . $entry) && $entry != '..' && $entry != '.') {
          $templates[$i] = $entry;
          $i++;
        }
    }
    closedir($handle);
    $i--;
    echo '<ul>';
    while($i >= 0) {
      echo '<li><a href="' . $url . 'templates/' . $templates[$i] . '/index.html">' . $templates[$i] . '</a></li>';
      $i--;
    }
    echo '</ul>';
}



?>