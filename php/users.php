<?php
    include "dbconnect.php";
    $sql="select * from users";
    $result=mysqli_query($conn,$sql);
    //finding the number of records...
    $rowcount=mysqli_num_rows($result);

    //displaying the rows returned by the sql query--
    //echo $rowcount;
    echo "<br>";
    if($rowcount>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo $row['name'];
            echo "<br>";
           
        }

    }
 
?>

