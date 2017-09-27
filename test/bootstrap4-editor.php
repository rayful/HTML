<?php require "autoload.php" ?>
<!DOCTYPE html>

<html lang="zh">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Hello, world!</h1>
    <form>
        <?php
        $product = new \test\Product();
        $editor = new \rayful\HTML\View\Bootstrap4\Editor($product);
        foreach ($editor as $label => $input) {
            ?>
            <div class="form-group">
                <label><?php echo $label ?></label>
                <?php echo $input ?>
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>