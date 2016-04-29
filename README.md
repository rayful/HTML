# HTML
一个后台使用的直接把HTML的元素输出封装好的类。

### 安装
composer require rayful/html

### 基本用法
模板文件里面： 
```html+php
<select name="status" class="form-control">
<?php echo \rayful\Tool\HTML\option::loop([''=>'全部','-1'=>'取消','0'=>'未完成','1'=>'成功'], $_REQUEST['status'])?>
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

可以直接使用一个对象来输出（结合rayful/dataset类）
```php
echo \rayful\Tool\HTML\option::loop(Order::$statuses, $_REQUEST['status']);
echo \rayful\Tool\HTML\option::loop(new Users(), $_REQUEST['status']);
```

其它用法类似，还有：
```php
\rayful\Tool\HTML\checkbox::loopDisplay("status", Order::$statuses, $_REQUEST['status']);
\rayful\Tool\HTML\radio::loopDisplay("status", Order::$statuses, $_REQUEST['status']);


\rayful\Tool\HTML\select::displaySortField(['name'=>'姓名','date'=>'日期'], $_REQUEST['sort']['field']);
\rayful\Tool\HTML\select::displaySortType($_REQUEST['sort']['type']);

echo \rayful\Tool\HTML\select::generator("status", Order::$statuses, $_REQUEST['status']);
```
请注意，方法名里面有display字眼的将直接输出。其它的需要打印才能输出，比如：loop、generator等字眼都需要另外打印的。
