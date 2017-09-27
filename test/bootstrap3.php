<?php require "autoload.php" ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Hello, world!</h1>
    <form>
        <div class="form-group">
            <label for="email">Email地址</label>
            <?php echo new \rayful\HTML\View\Bootstrap3\Input("email") ?>
            <?php echo new \rayful\HTML\View\Bootstrap3\Tips("We'll never share your email with anyone else.") ?>
        </div>
        <div class="form-group">
            <label for="password">密码</label>
            <?php echo(new \rayful\HTML\View\Bootstrap3\Password("password")) ?>
        </div>
        <div class="form-group">
            <label for="birth">出生日期</label>
            <?php echo new \rayful\HTML\View\Bootstrap3\Select("birth", [1992, 1993, 1994]) ?>
        </div>
        <div class="form-group">
            <label>性别</label>
            <?php echo new \rayful\HTML\View\Bootstrap3\Radios("genders", ['1' => '男', '2' => '女']) ?>
        </div>
        <div class="form-group">
            <label id="sex[]">订阅</label>
            <?php echo new \rayful\HTML\View\Bootstrap3\MultiSelect("sex[]", ['男士', '女士', '儿童', '青年', '少年']) ?>
        </div>
        <div class="form-group">
            <label id="file">上传身份证</label>
            <?php echo new \rayful\HTML\View\Bootstrap3\File("file") ?>
        </div>
        <div class="form-group">
            <label id="memo">备注</label>
            <?php echo new \rayful\HTML\View\Bootstrap3\Textarea("memo") ?>
        </div>
        <div class="form-group">
            <?php echo new \rayful\HTML\View\Bootstrap3\Checkboxes("is_accept", ['1' => '接受条款']) ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>