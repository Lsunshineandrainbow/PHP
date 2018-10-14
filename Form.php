html5<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="Serve.php" method="post">
    <p>单选</p>
<!--    //单选框设置name分组，分为同一组后才能单选-->
    <input type="radio" name="sex" value="m">男
    <input type="radio" name="sex" value="f">女
    <p>多选</p>
<!--    //用name进行分组，传过去hobby[]数组，将选中的value放入hobby[]中-->
    <input type="checkbox" name="hobby[]" value="篮球">篮球
    <input type="checkbox" name="hobby[]" value="足球">足球
    <input type="checkbox" name="hobby[]" value="羽毛球">羽毛球
    <input type="checkbox" name="hobby[]" value="网球">网球
    <p>拉选框</p>
    <select name="room[]" multiple="multiple">
<!--        //当分组为一个变量时，只能单选，当传过去一个数组时多选-->
        <option value="教">教学楼</option>
        <option value="研">研楼</option>
        <option value='新'>欣怡楼</option>
        <option value="主">主楼</option>
    </select>
    <button type="submit">提交</button>
</form>
</body>
</html>