<h1>Register</h1>

<form method="post" action="<?php echo site_url() ?>/users/admin_login">
  <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" id="email" value="<?=set_value('email')?>">
      <?=form_error('email')?>
  </div>
  <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" value="<?=set_value('password')?>">
      <?=form_error('password')?>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
