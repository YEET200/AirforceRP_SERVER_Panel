<?php  // Always Include/Require This File For Connect Database
    require_once "DB_Info.php";  // this is connect.php file

    @mysqli_connect(
        $HOST_name,
        $DB_username,
        $DB_password
    ) or die(
        "<h2>Database Error, Contact With Admin </h2>"
    );

    @mysqli_select_db(
        $DB_name
    ) or die(
        "<h2>Database Error, Contact With Admin</h2>"
    );
?>
