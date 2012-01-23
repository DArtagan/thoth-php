<?php require('header.php'); ?>
<body class="nav_index nav_tweak" onload="setDiv('collapsingBannerSelection');">
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      <form name="contentForm" class="content-text" action="index.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="50000000">
        <label for="formName">Name: <input type="text" name="formName" value="<?php echo $formName; ?>"></label>
        <div id="bannerSelection">
          <a href="javascript:;" onmousedown="toggleDiv('collapsingBannerSelection');">Banners</a>
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
        <textarea name="messageContent">
          <?php 
            echo $_SESSION['messageContent'];
          ?>
        </textarea>
      </form>
      <p>Please note, once you close your browser, an email is lost. "Save" is NOT permanent, it only lasts for this browsing session.</p>
    </div>
  </div>
</body>
</html>

