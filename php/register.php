<style>
    #container
    {
        margin-top:100px;
    }

</style>

<?php
    
    include "../includes/bootstrapfiles.php";
    include "../includes/nav.php";
    include "../includes/footer.php";
    
    
?>
<div class="row" id="msg"></div>
<div class="row" id="container">
    <div class="col-4"></div>
    <div class="col">
<form action="reghandler.php" method="POST">
<div class="form-group">
    <label for="uname">Username</label>
    <input type="text" class="form-control" id="uname" name="uname">
  </div>
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
