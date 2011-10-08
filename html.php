<?php require('header.php'); ?>
<body class="nav_html">
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      <p>Copy the HTML from below and paste into iModules (try triple clicking in the box to select all):</p>
      <div class="html-box">
        <?php
          $contentDelineator = '<!-- CONTENT HERE -->';
        
          $theHTML = file_get_contents('email.html');
          $theHTML = str_replace($contentDelineator , $content , $theHTML);
          echo htmlentities($theHTML);
        ?>
      </div>
    </div>
  </div>
</body>
</html>