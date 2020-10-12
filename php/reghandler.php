<?php
    include "dbconnect.php";

    if(empty($_POST['email'])){//return true when empty false when not empty
        header("Location:register.php");
    }else{
        $email = $_POST['email'];
    }
    if(empty($_POST['uname'])){//return true when empty false when not empty
        header("Location:register.php");
    }else{
        $uname = $_POST['uname'];
    }
    if(empty($_POST['passwd'])){
        header("Location:register.php");
    }else{
        $pass = $_POST['passwd'];
    }


    //echo "your email is ".$email ."and password is ".$pass.$uname;
    $sql="insert into users(name,email,password) values('".$uname."','".$email."','".$pass."')";
   // $result=mysqli_query($conn,$sql);
    //header("location:profile.php");
    // //find the number of records...
    // $rowcount=mysqli_num_rows($result);

    // //displaying the rows returned by the sql query--
    // //echo $rowcount;

    // if($rowcount>0)
    // {
    //     while($row=mysqli_fetch_assoc($result))
    //     {
    //        // echo "Welcome,<strong>".$row['username']."</strong> your email is <strong>". $row['email']."</strong>";
    //        // echo "<br>";
    //         $_SESSION['email'] = $email;
            
    //     }

    // }
    if ($conn->query($sql) === TRUE) {
        echo "You registerd successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
 
?>