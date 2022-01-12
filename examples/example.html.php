<?php $items = [1,2]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HTML test page</title>
</head>
<body>
<h1>Title</h1>
<ul>
    <?php foreach ($items as $item) : ?>
        <li><?= $item->email ?></li>
    <?php endforeach ?>
</ul>
</body>
</html>

