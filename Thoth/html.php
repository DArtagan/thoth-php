<?php require('header.php'); ?>
<body class="nav_html">
  <?php require('nav.php'); ?>
  <div id="page-wrap">
    <div id="content">
      
      <div id="instructions">
      <p>Copy the HTML from below and paste into iModules (try triple clicking in the box to select all):</p>
        <a href="javascript:;" onmousedown="toggleDiv('collapsingInstructions');">Instructions</a>
        <div id="collapsingInstructions" style="display:none">
          <ol>
            <li>Click in window and select all the code (triple click or PC users: Ctrl A)</li>
            <li>Log into MOL and go to email marketing</li>
            <li>Select "One-Time Custom Email" and enter email details and click "Next"</li>
            <li>Select "Blank" from the Select Layout window and "Blank Email Base" from the Select Design Template window, and click "Next".</li>
            <li>Click pencil icon once, and do so again in the subsequent window</li>
            <li>Click "<>HTML" at the bottom of editing window</li>
            <li>Paste the contents of your clipboard into the window (PC users: Ctrl V)</li>
            <li>Select "Save version", and then "Save and Load Content"</li>
          </ol>
          <p>Your new email should be viewable in the window. Further edits will need to be made inside iMods.</p>
          <p>Please note, once you close your browser, an email is lost. "Save" is NOT permanent, it only lasts for this browsing session.</p>
          
        </div>
      </div>
      <div class="html-box">
        <?php
          $bannerDelineator = '<!-- BANNER HERE -->';
          $contentDelineator = '<!-- CONTENT HERE -->';
          $ignoreStartDelineator = '<!-- IGNORE -->';
          $ignoreEndDelineator = '<!-- /IGNORE -->';
          
          $pattern = '/<iii>(\.+?)<\/iii>/u';
          
          /* The original function
          Credit to: http://www.catswhocode.com/blog/15-php-regular-expressions-for-web-developers
          
          function get_tag( $tag, $xml ) {
            $tag = preg_quote($tag);
            preg_match_all('|<'.$tag.'[^>]*>(.*?)</'.$tag.'>|',
                             $xml,
                             $matches,
                             PREG_PATTERN_ORDER);
            return $matches[1];
          }
          */
          
          function matchingCommentFinder( $tag, $xml ) {
            $tag = preg_quote($tag);
            preg_match_all('|<!-- '.$tag.' --[^>]*>(.*?)<!-- /'.$tag.' -->|',
              $xml,
              $matches,
              PREG_PATTERN_ORDER);
            return $matches[0];
          }
 
          $theHTML = file_get_contents('templates/email/template_email.html');
          $theHTML = str_replace($bannerDelineator , $banner , $theHTML);
          $theHTML = str_replace($contentDelineator , $messageContent , $theHTML);
          $ignore = matchingCommentFinder(IGNORE,$theHTML);
          foreach($ignore as $ignored) {
            $theHTML = str_replace($ignored, "", $theHTML);
          }
          echo htmlentities($theHTML);
        ?>
      </div>
    </div>
  </div>
</body>
</html>