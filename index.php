<?php

include "includes/_process_include.php";
include "includes/_header.php";

?>
<br>

<div class="jumbotron">
    <h1 class="display-3">Login Gallery</h1>
    <hr>
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" id="username" name="username">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" id="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<?php
include "includes/_footer.php";
?>