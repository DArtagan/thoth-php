<?php require('header.php'); ?>
<body class="nav_tweak">
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      <form name="contentForm" class="content-text" action="tweak.php" method="post">  
        <textarea name="messageContent">
          <?php 
            echo $_SESSION['messageContent'];
          ?>
        </textarea>
      </form>
    </div>
  </div>
</body>
</html>