<?php
  $now = microtime(true);
  $ms = (int)(($now - (int)$now) * 1000);
  $msStr = str_pad($ms, 3, 0, STR_PAD_LEFT);
  $dtStr = date("Y-m-d H:i:s") . "." . substr(explode(".", (microtime(true) . ""))[1], 0, 3);
  echo $dtStr."\t".getenv("LB_NODE")."\n";
?>
