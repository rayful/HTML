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
        <div class="form-group">
            <label for="email">Email地址</label>
            <?php echo new \rayful\HTML\View\Bootstrap4\Input("email") ?>
            <?php echo new \rayful\HTML\View\Bootstrap4\Tips("We'll never share your email with anyone else.") ?>
        </div>
        <div class="form-group">
            <label for="password">密码</label>
            <?php echo(new \rayful\HTML\View\Bootstrap4\Password("password")) ?>
        </div>
        <div class="form-group">
            <label for="birth">出生日期</label>
            <?php echo new \rayful\HTML\View\Bootstrap4\Select("birth", [1992, 1993, 1994]) ?>
        </div>
        <div class="form-group">
            <label>性别</label>
            <?php echo new \rayful\HTML\View\Bootstrap4\Radios("genders", ['1' => '男', '2' => '女']) ?>
        </div>
        <div class="form-group">
            <label id="sex[]">订阅</label>
            <?php echo new \rayful\HTML\View\Bootstrap4\MultiSelect("sex[]", ['男士', '女士', '儿童','青年','少年']) ?>
        </div>
        <div class="form-group">
            <label id="file">上传身份证</label>
            <?php echo new \rayful\HTML\View\Bootstrap4\File("file") ?>
        </div>
        <div class="form-group">
            <label id="memo">备注</label>
            <?php echo new \rayful\HTML\View\Bootstrap4\Textarea("memo") ?>
        </div>
        <div class="form-group">
            <?php echo new \rayful\HTML\View\Bootstrap4\CheckboxBool("is_accept", '接受条款') ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>