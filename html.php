<?php require('header.php'); ?>
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