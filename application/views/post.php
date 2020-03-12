<h1><?=$post->title?></h1>

<?=$post->content?>

<h2>Categories</h2>
<?php foreach ($categories as $category) :?>
    <?=$category->name?><br>
<?php endforeach; ?>

<h3>Author</h3>
<?=$post->first_name . ' ' . $post->last_name?>