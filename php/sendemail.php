<style>
    #container
    {
        margin-top:200px;
    }

</style>

<?php
    include "../includes/bootstrapfiles.php";
    include "../includes/nav.php";
    include "../includes/footer.php";

?>
<div class="row" id="container">
    <div class="col-4"></div>
    <div class="col">
<form action="emailhandler.php" method="POST">
  <div class="form-group">
    <label for="email">To:</label>
    <input type="email" class="form-control" id="email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <input type="message" class="form-control" id="message" name="message">
  </div>
 
  <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send</button>

</form>
</div>
<div class="col-4"></div>
</div>