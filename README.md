# HTML
一个后台使用的直接把HTML的元素输出封装好的类。

### 用法
模板文件里面： 
```
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

可以直接使用一个对象来输出（结合rayful/dataset类）
```php
echo \rayful\Tool\HTML\option::loop(Order::$statuses, $_REQUEST['status']);
echo \rayful\Tool\HTML\option::loop(new Users(), $_REQUEST['status']);
```

其它用法类似，还有：
```php
\rayful\Tool\HTML\checkbox::loopDisplay("status", Order::$statuses, $_REQUEST['status']);

```
