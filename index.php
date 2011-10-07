<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
<!-- WebPutty Main Style -->
<link rel="stylesheet" type="text/css" href="http://www.webputty.net/css/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRigxx8M" />
<script type="text/javascript">(function(w,d){if(w.location!=w.parent.location||w.location.search.indexOf('__preview_css__')>-1){var t=d.createElement('script');t.type='text/javascript';t.async=true;t.src='http://www.webputty.net/js/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRigxx8M';(d.body||d.documentElement).appendChild(t);}})(window,document);</script>

<!-- WebPutty Nav Style -->
  <link rel="stylesheet" type="text/css" href="http://www.webputty.net/css/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRi0vx8M" />
  <script type="text/javascript">(function(w,d){if(w.location!=w.parent.location||w.location.search.indexOf('__preview_css__')>-1){var t=d.createElement('script');t.type='text/javascript';t.async=true;t.src='http://www.webputty.net/js/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRi0vx8M';(d.body||d.documentElement).appendChild(t);}})(window,document);</script>

<!-- tinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js" ></script >
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        plugins : "spellchecker,advhr,insertdatetime,preview",
        
        width: "100%",
        height: "90%",
                
        // Theme options - button# indicated the row# only
        theme_advanced_buttons1 : "bold,italic,underline,|,justifyleft,justifycenter,justifyright,formatselect,|,insertdate,inserttime,|,spellchecker,advhr,|,sub,sup,|,charmap",
        theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,|,code,preview",
        theme_advanced_buttons3 : "",      
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true
});
</script>
</head>
<body class="nav_index">
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      <form class="content-text" action="preview.php" method="post">  
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