<?php
function server_online($server, $port){
    fsockopen($server, $port, $errno, $errstr );

    return ($errno == 0);
}
?>
