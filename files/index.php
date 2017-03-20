<html>
<head>
<title>
<?php
  echo getenv("LB_NODE");
?>
</title>
</head>
<body>
<table border="1" style="font-size : 48px;">
<?php
  $now = microtime(true);
  $ms = (int)(($now - (int)$now) * 1000);
  $msStr = str_pad($ms, 3, 0, STR_PAD_LEFT);
  $dtStr = date("Y-m-d H:i:s") . "." . substr(explode(".", (microtime(true) . ""))[1], 0, 3);
  echo '<tr><td bgcolor="'.getenv("LB_COLOR").'" colspan="2">Access Information</td></tr>';
  echo '<tr><td bgcolor="#87cefa">Time</td><td>'.$dtStr.'</td></tr>';
  echo '<tr><td bgcolor="#87cefa">Node</td><td>'.getenv("LB_NODE").'</td></tr>';
  echo '<tr><td bgcolor="#87cefa">Client Address</td><td>'.$_SERVER["REMOTE_ADDR"].'</td></tr>';
?>
</table>
</body>
</html>
