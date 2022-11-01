<?php
  include('...\CONFIG/SMTP.php');
  include('...\emailtest.php');
  require('...\connect.php');

<link rel='stylesheet' href='style.css' />

    $HOST_name = "<input class='input' type='text' name='dbhost' placeholder='Enter Host Name' />";
    $DB_username = "<input class='input' type='text' name='dbuser' placeholder='Enter DB User Name' />";
    $DB_password = "<input class='input' type='password' name='dbpass' placeholder='***********' />";
    $DB_name = "<input class='input' type='text' name='dbname' placeholder='Enter DB Name' />";
    $SMTP_Host = "<input class='input' type='text' name='smtp' placeholder='Enter Host Name' />"
    $SMTP_username = "<input class='input' type='text' name='smtpuser' placeholder='Enter User Name' />"
    $SMTP_password = "<input class='input' type='text' name='smtppass' placeholder='***********' />"
    $SMTP_port = "<input class='input' type='text' name='smtpport' placeholder='Enter SMTP Port' />"
    echo "<div class='box' >
            <form class='ins' method='post' action='installing.php' >
                    <p>Enter Host Name:<p>
                    $HOST_name
                    <p>Enter DB User Name:<p>
                    $DB_username
                    <p>Enter DB Password:<p>
                    $DB_password
                    <p>Enter DB Name:<p>
                    $DB_name
                    <p>Enter SMTP HOST:</p>
                    $SMTP_Host
                    <p>Enter SMTP Username:</p>
                    $SMTP_username
                    <p>Enter SMTP Password</p>
                    $SMTP_password
                    <p>Enter SMTP Port</p>
                    $SMTP_port
                    
                    <input class='submit' type='submit'name='install' value='NEXT' />
            </form>
        </div>";
   
?>
    
    
