<?php session_start(); ?>
<?php
  $contentDelineator = '<!-- CONTENT HERE -->';
 
  $content = $_SESSION['content'];
  
  $theHTML = file_get_contents('email.php');
  $theHTML = str_replace($contentDelineator , $content, $theHTML);
  echo $theHTML;
?>