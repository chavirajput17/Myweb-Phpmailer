<style>
    #container
    {
        margin-top:200px;
    }

</style>

<?php
    session_start();
    if(isset($_SESSION['email'])){//returns true if session variable is there
        header("location:profile.php");
    }
    include "../includes/bootstrapfiles.php";
    
    
?>
<div class="row" id="container">
    <div class="col-4"></div>
    <div class="col">
<form action="userauth.php" method="POST">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="passwd" name="passwd">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
<div class="col-4"></div>
</div>