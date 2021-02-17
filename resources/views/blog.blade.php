@extends ('layout.app')

<h1>Lista dei post</h1>
<?php foreach ($post as $value): ?>
<h1>Titolo del post: <?php echo $value->title; ?></h1>
<p>Testo del Post: <?php echo $value->body ?></p>
<?php endforeach; ?>
