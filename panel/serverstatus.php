<?php
$servers = array(
  array('8.8.8.8', '80'),
);

error_reporting();

$path = dirname(__FILE__);

include("{$path}/lib/server.inc.php");

?>
