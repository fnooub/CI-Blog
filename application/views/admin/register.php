<h1>Register</h1>

<form method="post" action="<?php echo site_url() ?>/users/admin_register">
  <div class="form-group">
      <label for="first_name">First name</label>
      <input type="text" class="form-control" name="first_name" id="first_name" value="<?=set_value('first_name')?>">
      <?=form_error('first_name')?>
  </div>
  <div class="form-group">
      <label for="last_name">Last name</label>
      <input type="text" class="form-control" name="last_name" id="last_name" value="<?=set_value('last_name')?>">
      <?=form_error('last_name')?>
  </div>
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
  <div class="form-group">
      <label for="passconf">Password Confirmation</label>
      <input type="password" class="form-control" name="passconf" id="passconf" value="<?=set_value('passconf')?>">
      <?=form_error('passconf')?>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
