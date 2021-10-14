<h1>Все посты блога</h1>
<ul>
<?php foreach ($posts as $post): ?>
    <li><?= $post->title; ?></li>
<?php endforeach; ?>
</ul>
