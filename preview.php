<?php session_start(); ?>

<html>
<head>
  <?php 
    if($_POST['content']) {
      $content = stripslashes($_POST['content']);
      $_SESSION['content'] = $content;
    } else {
      $content = $_SESSION['content'];
  }
  ?>
  
<!-- WebPutty Main Style -->
  <link rel="stylesheet" type="text/css" href="http://www.webputty.net/css/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRigxx8M" />
  <script type="text/javascript">(function(w,d){if(w.location!=w.parent.location||w.location.search.indexOf('__preview_css__')>-1){var t=d.createElement('script');t.type='text/javascript';t.async=true;t.src='http://www.webputty.net/js/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRigxx8M';(d.body||d.documentElement).appendChild(t);}})(window,document);</script>

<!-- WebPutty Nav Style -->
  <link rel="stylesheet" type="text/css" href="http://www.webputty.net/css/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRi0vx8M" />
  <script type="text/javascript">(function(w,d){if(w.location!=w.parent.location||w.location.search.indexOf('__preview_css__')>-1){var t=d.createElement('script');t.type='text/javascript';t.async=true;t.src='http://www.webputty.net/js/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRi0vx8M';(d.body||d.documentElement).appendChild(t);}})(window,document);</script>
</head>

<body class="nav_preview">
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      <div class="preview">
        <iframe src="render.php" width="100%" height="300">
          <p>Your browser does not support iframes.</p>
        </iframe>
      </div>
    </div>
  </div>

</body>
</html>