<?php
    include "../dbconnect.php";
    include "nav.php";
    include "footer.php";

    session_start();
    if(empty($_POST['email'])){//return true when empty false when not empty
        header("Location:login.php");
    }else{
        $email = $_POST['email'];
    }
    if(empty($_POST['passwd'])){
        header("Location:login.php");
    }else{
        $pass = $_POST['passwd'];
    }

   
   // echo "your email is ".$email ."and password is ".$pass;
    $sql="select * from users where email='".$email."' and password = '".$pass."'";
    $result=mysqli_query($conn,$sql);
    //find the number of records...
    $rowcount=mysqli_num_rows($result);

    //displaying the rows returned by the sql query--
    //echo $rowcount;

    if($rowcount>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
           // echo "Welcome,<strong>".$row['username']."</strong> your email is <strong>". $row['email']."</strong>";
           // echo "<br>";
            $_SESSION['email'] = $email;
            header("location:profile.php");
        }

    }
 
?>