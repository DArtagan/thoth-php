<?php session_start(); ?>
<?php 
  if($_POST['formName']) {
    $formName = $_POST['formName'];
    $_SESSION['formName'] = $formName;
  } else {
    $formName = $_SESSION['formName'];
  }
    
  if($_POST['banner']) {
    $banner = $_POST['banner'];
    $_SESSION['banner'] = $banner;
  } else {
    $banner = $_SESSION['banner'];
  }

  if($_POST['messageContent']) {
    $messageContent = stripslashes($_POST['messageContent']);
    $_SESSION['messageContent'] = $messageContent;
  } else {
    $messageContent = $_SESSION['messageContent'];
  }
  
  if($_POST['givenTemplate']) {
    $givenTemplate = $_POST['givenTemplate'];
    $_SESSION['givenTemplate'] = $givenTemplate;
  } else {
    $givenTemplate = $_SESSION['givenTemplate'];
  }

  /*function numberFinder( $xml ) {
    //$pattern = "/(<!-- " . $tag . ".*?\/" . $tag . " -->)/s";
    $pattern = "|\[#([0-9]+?)\] ==========|";
    preg_match_all($pattern,
      $xml,
      $matches,
      PREG_PATTERN_ORDER);
      var_dump($matches);
    return $matches;
  }*/

  function numberIncrementer($old) {
    //$pattern = "/(<!-- " . $tag . ".*?\/" . $tag . " -->)/s";
    preg_match_all("/\[#([0-9]+?)\] ==========/e", $old, $demo);
    var_dump($demo);
    $new = preg_replace("/(\[#)([0-9]+?)(\] ==========)/e", '"$1" . ("$2" + 1) . "$3"', $old);
    echo $new;
    return $new;
  }

  $outputstring = numberIncrementer($theHTML);
  
  $outputstring .= "[#1] ==========\n";
  $outputstring .= $formName;
  $outputstring .= $givenTemplate . "\n";
  $outputstring .= $banner . "\n";
  $outputstring .= $messageContent . "\n";
  $outputstring .= "====================\n\n";

  @ $fp = fopen('saves.txt', 'ab');
  flock($fp, LOCK_EX);
  if(!$fp) {
    ?><p style="font-weight: bold;">Your order could not be processed, please try again later.</p><?php
    exit;
  }
  
  fwrite($fp, $outputstring, strlen($outputstring));
  flock($fp, LOCK_UN);
  fclose($fp);
?>