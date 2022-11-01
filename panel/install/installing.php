<link rel='stylesheet' href='style.css' />
<?php  
    $writer="<?php".'
    '.'$HOST_name = '."'".$_POST['dbhost']."'".';
    '.'$DB_name = '."'".$_POST['dbname']."'".';
    '.'$DB_username = '."'".$_POST['dbuser']."'".';
    '.'$DB_password = '."'".$_POST['dbpass']."'".';
    '."?>";

    $write=fopen('..\..\DB_config.php' , 'w');
    if(empty($_POST['dbhost']&&Cx
             $_POST['dbname']&&
             $_POST['dbuser']&&
             $_POST['dbpass'])){
                 echo"<h2 align=center >All Fields are required! Please Re-enter</h2>";

    }else{
        if(isset($_POST['install']))
        {
            fwrite($write,$writer);
            fclose($write);
            echo "<div class='box'>
                <form class='ins' action='installed.php' method='post'>
                    <h2 align=center color=red>Database Info Succecfully Entered<h2>
                    <input class='submit' type='submit' value='NEXT' name='next'/>
                </form>
                </div>";
        }else{ echo "<h2 align=center >Error<h2>"; }}
?>
