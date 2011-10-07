<?php session_start(); ?>

<html>
<head>
  <?php require("email_style.php"); ?>
  <?php 
    //$styleDelineator = '<style';
  ?>
  
  <!-- WebPutty Nav Style -->
  <link rel="stylesheet" type="text/css" href="http://www.webputty.net/css/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRi0vx8M" />
  <script type="text/javascript">(function(w,d){if(w.location!=w.parent.location||w.location.search.indexOf('__preview_css__')>-1){var t=d.createElement('script');t.type='text/javascript';t.async=true;t.src='http://www.webputty.net/js/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRi0vx8M';(d.body||d.documentElement).appendChild(t);}})(window,document);</script>
</head>
<body class="nav_preview">
<?php require('nav.php'); ?>



<?php
  $contentDelineator = '<!-- CONTENT HERE -->';

  if($_POST['content']) {
    $content = stripslashes($_POST['content']);
    $_SESSION['content'] = $content;
  } else {
    $content = stripslashes($_SESSION['content']);
  }
  
  $theStyle = file_get_contents('email_style.php');
  $theBody = file_get_contents('email.php');
  $theBody = str_replace($contentDelineator , $content , $theBody);
  $theHTML = '<html><head>' . $theStyle . '</head><body>' . $theBody . '</body></html>';
  echo $theHTML;
?>

</body>
</html>