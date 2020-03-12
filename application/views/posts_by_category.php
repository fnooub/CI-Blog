<h1>Posts in Category <?=$category->name?></h1>

<h2>Posts</h2>
<p>
    <?php foreach ($posts as $post) :?>
        <h3><a href="<?php echo site_url() ?>/posts/details/<?=$post->slug?>"><?=$post->title?></a></h3>
        <p>
            <?=word_limiter($post->content, 1)?>
        </p>
    <?php endforeach; ?>
</p>