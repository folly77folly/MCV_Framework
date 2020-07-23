
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something</h3>
  </div>
  <div class="panel-body">
   <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="post">
    <div class="form-group">
    <label for="share">Name</label>
    <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
    <label for="body">Email</label>
    <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
    <label for="link">Password</label>
    <input type="password" class="form-control" name="password">
    </div>
    <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
   </form>
  </div>
</div>