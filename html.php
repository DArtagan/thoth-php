<?php session_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<!-- WebPutty Main Style -->
<link rel="stylesheet" type="text/css" href="http://www.webputty.net/css/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRigxx8M" />
<script type="text/javascript">(function(w,d){if(w.location!=w.parent.location||w.location.search.indexOf('__preview_css__')>-1){var t=d.createElement('script');t.type='text/javascript';t.async=true;t.src='http://www.webputty.net/js/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRigxx8M';(d.body||d.documentElement).appendChild(t);}})(window,document);</script>

<!-- WebPutty Nav Style -->
  <link rel="stylesheet" type="text/css" href="http://www.webputty.net/css/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRi0vx8M" />
  <script type="text/javascript">(function(w,d){if(w.location!=w.parent.location||w.location.search.indexOf('__preview_css__')>-1){var t=d.createElement('script');t.type='text/javascript';t.async=true;t.src='http://www.webputty.net/js/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRi0vx8M';(d.body||d.documentElement).appendChild(t);}})(window,document);</script>
</head>
<body class="nav_html">
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      <p>Copy the HTML from below and paste into iModules (try triple clicking in the box to select all):</p>
      <div class="html-box">
        <?php
          $contentDelineator = '<!-- CONTENT HERE -->';
        
          $content = stripslashes($_SESSION['content']);
          $theStyle = file_get_contents('email_style.php');
          $theBody = file_get_contents('email.php');
          $theBody = str_replace($contentDelineator , $content , $theBody);
          $theHTML = '<html><head>' . $theStyle . '</head><body>' . $theBody . '</body></html>';
          echo htmlentities($theHTML);
        ?>
      </div>
    </div>
  </div>
</body>
</html>