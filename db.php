<?php 
    
    $db_name =  'hawksaus_adamdb';
    $username = 'hawksaus_adamad';
    $password = '7[}V?h_kWmL1';
    $con = mysqli_connect('localhost', $username,$password,$db_name);
    /*
     * This is the "official" OO way to do it,
     * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
     */
    if ($con->connect_error) {
    die('Connect Error (' . $con->connect_errno . ') '
            . $con->connect_error);
    }
    else{
        //echo "Connected Successfully";
    }
/*
 * Use this instead of $connect_error if you need to ensure
 * compatibility with PHP versions prior to 5.2.9 and 5.3.0.
 */    
    
    if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    else{
        //echo "connected successfully";
    }
    
?>