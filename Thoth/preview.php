<?php require('header.php'); ?>

<body class="nav_preview" onload=resize();>
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      <div class="preview">
        <iframe id="ifr" src="render.php" width="100%" height="100%" frameborder="0" onload="this.height=this.contentDocument.height">
          <p>Your browser does not support iframes.</p>
        </iframe>
      </div>
    </div>
  </div>

</body>
</html>