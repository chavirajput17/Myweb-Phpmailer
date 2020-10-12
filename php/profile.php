<?php
        include "../includes/bootstrapfiles.php";
        
        include "dbconnect.php";
    
        session_start();
        $email=$_SESSION['email'];
        $sql="select * from users where email='".$email."'"; 
        $result=mysqli_query($conn,$sql);
        $rowcount=mysqli_num_rows($result);
        if($rowcount>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                echo "<div style='margin-top:5%;margin-left:20%'>Welcome,<strong>".$row['name']."</strong></div>";
                echo "<br>";
                
            }
        }

 ?>

        <script>

            function getUserList()
            {
                var xhr = new XMLHttpRequest();
                xhr.open('POST','users.php',true);
                xhr.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            document.getElementById("userlist").innerHTML = this.responseText;
                        }
                    }   
                xhr.send();
            
        }  
        </script>

        <div style="margin-left:20%">
        <p>Click the button to check out the user list</p>
        <button type="submit" onclick="getUserList()" class="btn btn-warning">Click Me</button>
        <div id ="userlist"></div>
        </div>  
        