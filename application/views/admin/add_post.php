<h1>Add Post</h1>

<form method="post" action="<?php echo site_url('posts/admin_add_post') ?>">
  <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" value="<?=set_value('title')?>">
      <?=form_error('title')?>
  </div>
  <div class="form-group">
      <label for="slug">SEO URL <small>(replace spaces with dashes)</small></label>
      <input type="text" class="form-control" name="slug" id="slug" value="<?=set_value('slug')?>">
      <?=form_error('slug')?>
  </div>
  <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" rows="3" name="content" id="content"><?=set_value('content')?></textarea>
      <?=form_error('content')?>
  </div>
  <p>
    Categories
  </p>
  <!-- categories -->
  <?php foreach ($categories as $category) :?>
  <div class="checkbox">
      <label>
        <input type="checkbox" name="category[]" value="<?=$category->id?>" <?php echo set_checkbox('category[]', $category->id, false); ?> />
              <?=$category->name?>
      </label>
  </div>
<?php endforeach; ?>
<div class="text-danger">
    <?=form_error('category')?>
</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<script src="https://cdn.ckeditor.com/4.14.0/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
