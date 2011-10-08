<?php require('header.php'); ?>
<body class="nav_tweak">
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      <form class="content-text" action="tweak.php" method="post">  
        <textarea name="content">
          <?php 
            echo $_SESSION['content'];
          ?>
        </textarea>
        <input type="submit" value="Preview" />
      </form>
    </div>
  </div>
</body>
</html>