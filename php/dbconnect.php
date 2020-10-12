<?php
    /*
        connecting with the database
        2 ways:---
        1.MySQli
        2.PDO(PHP Data object)
    */ 

    $servername="localhost";
    $username="root";
    $password="";
    $database="justalk";
    //connecting with the database::
    $conn=mysqli_connect($servername,$username,$password,$database);
    //die if failed to connect...
    if(!$conn)
        die("sorry,we failed to connect to the database,".mysqli_connect_error());
    // else
    //     echo "connection established";
?>