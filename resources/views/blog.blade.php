@extends ('layout.app')

<h1>Blog</h1>
<?php foreach ($post as $value): ?>
  <div class="container">
    <h3>#: <?php echo $value->ID ?></h3>
    <h3>Titolo: <?php echo $value->title; ?></h3>
    <p>Testo: <?php echo $value->body ?></p>

  </div>
<?php endforeach; ?>
