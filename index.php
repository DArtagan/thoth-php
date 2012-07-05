<?php require('header.php'); ?>
<body class="nav_index nav_tweak" onload="setDiv('collapsingBannerSelection');">
  <script src="scripts/jquery.js"></script>
  <script src="scripts/templateSubmit.js"></script>
  <script type="text/javascript">
    $(document).ready(function()
    {
      //hide the all of the element with class defaultCollapse
      $(".defaultCollapse").hide();
      //toggle the componenet with class collapseHead
      $(".collapser").click(function()
      {
        $(this).next(".defaultCollapse").slideToggle(600);
      });
    });
  </script>
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      <form name="contentForm" class="content-text" action="index.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="50000000">
        <label for="formName">Name: <input type="text" name="formName" value="<?php echo $formName; ?>"></label>
        <div id="templateSelection" class="collapser">
          <a class="collapser">Templates</a>
          <div id="collapsingTemplateSelection" class="defaultCollapse" style="display:none">
            <?php 
              $dir = 'templates/';
              $templates = listTemplates($dir);
              echo '<ul>';
              for($i = $templates[0]; $i > 0; $i--) {
                $templateFile = $dir . $templates[$i] . '/index.html';
                $templateURL = dirname($url) . '/' . $templateFile;
                $output = '<li><input type="radio" name="givenTemplate" value="' . $templateFile;
                if(isset($givenTemplate) && $givenTemplate == $templateFile) {
                  $output .= '" checked="checked"';
                }
                $output .= '" onClick="this.form.submit();" />';
                $output .= '<a href="' . dirname($url) . '/' . $dir . $templates[$i] . '/index.html">' . $templates[$i] . '</a></li>';
                echo $output;
              }
              echo '</ul>';
            ?>
          </div>
        </div>
        <?php if($givenTemplate == 'templates/email/index.html') {?>
          <div id="bannerSelection" class="collapser">
            <a onmousedown="toggleDiv('collapsingBannerSelection');">Banners</a>
            <div id="collapsingBannerSelection" style="display:none">
              <?php
                bannerSelector('banners/', $banner, $url);
              ?>
              <div class="bannerUploader">
                <label for="bannerUpload">Save new banner:</label>
                <input type="file" name="bannerUpload" id="bannerUpload" /><button type="button" onclick="document.contentForm.submit();">Submit File</button>
                <?php if($fileUploadMessage) echo "<br />" . $fileUploadMessage; ?>
              </div>
            </div>
          </div>
        <?php } ?>
        <div style="height: 500px; position: relative;">
          <textarea name="messageContent">
            <?php 
              echo $_SESSION['messageContent'];
            ?>
          </textarea>
        </div>
      </form>
      <p>Please note: once you close your browser all content is lost. "Save" is NOT permanent, it only lasts for this browsing session.</p>
    </div>
  </div>
</body>
</html>

