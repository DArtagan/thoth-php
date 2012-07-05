<?php session_start(); ?>
<?php 
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
?>
<?php
  $bannerDelineator = '<!-- BANNER HERE -->';
  $contentDelineator = '<!-- CONTENT HERE -->';

  $theHTML = file_get_contents($givenTemplate);
  $theHTML = str_replace("url('" , "url('" . dirname($givenTemplate) . '/', $theHTML);
  $theHTML = str_replace('url("' , 'url("' . dirname($givenTemplate) . '/', $theHTML);
  $theHTML = str_replace("src('" , "src('" . dirname($givenTemplate) . '/', $theHTML);
  $theHTML = str_replace('src("' , 'src("' . dirname($givenTemplate) . '/', $theHTML);
  $theHTML = str_replace($bannerDelineator , $banner , $theHTML);
  $theHTML = str_replace($contentDelineator , $messageContent , $theHTML);
  echo $theHTML;
?>