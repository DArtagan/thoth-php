<?php session_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<?php
  $currentFile = $_SERVER["SCRIPT_NAME"];
  $currentFile = basename($currentFile);
?>

<!-- Process Content -->
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

<!-- iFrame Resizer -->
<?php if($currentFile == 'preview.php') {?>
  <script language="JavaScript">
    function resize() {
      var iframe = document.getElementById("ifr");
      iframe.height=window.frames[0].document.body.scrollHeight;
    }
  </script>
<?php } ?>
  
<!-- tinyMCE -->
  <?php
  if($currentFile == 'index.php') {?>
    <!-- tinyMCE -->
    <script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js" ></script >
    <script type="text/javascript">
      tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        plugins : "advlink,advimage,advlink,advlist,autolink,autosave,layer,spellchecker,advhr,insertdatetime,inlinepopups,preview,contextmenu,paste,save,searchreplace,table,xhtmlxtras",
        
        width: "100%",
        height: "90%",
                
        // Theme options - button# indicated the row# only
        theme_advanced_buttons1 : "save,cancel,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,formatselect,|,insertdate,inserttime,|,spellchecker,advhr,|,sub,sup,|,charmap",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,|,code,visualchars,|,cite,abbr,acronym,del,ins,attribs,|,insertlayer,moveforward,movebackward,absolute,|,link,unlink,anchor,image,cleanup,code,|,search,replace,|,blockquote",
        theme_advanced_buttons3 : "",      
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true
      });
    </script><?php
  } else if($currentFile == 'tweak.php') {?>
    <!-- tinyMCE -->
    <script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js" ></script >
    <script type="text/javascript">
      tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,autosave,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,cancel,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect,|,forecolor,backcolor,outdent,indent,|,undo,redo,|code,|,styleprops,|,sub,sup,|,removeformat",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "", 
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
      });
    </script><?php
  }
?>
</head>