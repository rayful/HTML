# HTML
一个后台使用的直接把HTML的元素输出封装好的类。

### 安装
composer require rayful/html

### 命名规则
为了让代码在HTML文件里看得更舒服，因此关于输出HTML的类比如：select、option、a等全部用小写。

### 文件分布及用类区别
* Element目录：只生成某些元素，不设定任何参数。
* Generator目录：可通过构造函数里面传参，直接构造出特定的元素。（为方便，Generator里面构造出来的元素，name和id都会同时设定并且一样）
* View目录：和样式有关，将在Generator的基础上再加上样式。

### 基本用法
模板文件里面： 
```html+php
<select name="status" class="form-control">
<?php new \rayful\HTML\Generator\Options([''=>'全部','-1'=>'取消','0'=>'未完成','1'=>'成功'], $_REQUEST['status'])?>
</select>
```
将输出：
```html
<select name="status" class="form-control">
  <option value="">全部</option>
  <option value="-1">取消</option>
  <option value="0">未完成</option>
  <option value="1">成功</option>
</select>
```

同时option可以自动选中。

### 进阶用法

请见test/example.php的用法。
#### 效果请见：
- test/bootstrap3.php
- test/bootstrap4.php

#### Editor.php的使用：
- test/bootstrap3-editor.php
- test/bootstrap4-editor.php