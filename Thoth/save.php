<div id="save-sidebar">
  <?php
    $wholeFile = file_get_contents('save.txt');
    
    
  ?>
  
  <?php
    @ $fp = fopen('orders.txt', 'ab');
    flock($fp, LOCK_EX);
    if(!$fp) {
      ?><p style="font-weight: bold;">Your order could not be processed, please try again later.</p><?php
      exit;
    }
    
    fwrite($fp, $outputstring, strlen($outputstring));
    flock($fp, LOCK_UN);
    fclose($fp);
  ?>
</div>