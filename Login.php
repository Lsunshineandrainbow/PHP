<?php
    $flag = true;
    if($_SERVER['REQUEST_METHOD']=='POST') {
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        if ($username == 'admin' && $pwd == '11111') {
            $flag = false;

        } else {
            $flag = true;
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
if($flag){
?>
<form action="Login.php">
    用户名: <input type="text" name="username"><br/>
    密码：<input  type="password" name="password"><br/>
    <button type="reset" >Reset</button>
    <input type="submit" value="Submit">
    <?php
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        echo '用户名或密码错误';
    }
    ?>
</form>
<?php }else{
    echo '恭喜登录成功';
}
?>
</body>
</html>