<h1>Add Category</h1>

<form method="post" action="<?php echo site_url('posts/admin_add_category') ?>">
  <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" value="<?=set_value('name')?>">
      <?=form_error('name')?>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
