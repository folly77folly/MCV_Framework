
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something</h3>
  </div>
  <div class="panel-body">
   <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="post">
    <div class="form-group">
    <label for="share">Share Title</label>
    <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
    <label for="link">Link</label>
    <input type="text" class="form-control" name="link">
    </div>
    <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
    <a href="<?php echo ROOT_PATH ?>shares" class="btn btn-danger">Cancel</a>
   </form>
  </div>
</div>