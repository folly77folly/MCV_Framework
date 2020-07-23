<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php if (isset($_SESSION['is_logged_in'])) :?>
    <a href="<?php ROOT_PATH ?>shares/add" class="btn btn-success text-white btn-share">Share Something</a>
    <?php endif?>
    <?php
    foreach ($viewModel as $item) : ?>
        <div class="well">
        <h3><?php echo $item['title'] ?></h3>
        <small><?php echo $item['created_at'] ?></small>
        <hr>
        <p><?php echo $item['body'] ?></p>
        <br>
        <a href="<?php echo $item['link'] ?>" class="btn btn-default" target ="_blank">goto website</a>
        </div>
    
    <?php  endforeach; ?>
    </div>
</body>
</html>