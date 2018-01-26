<?php
    // 设置中文编码
    header('content-type:text/html;charset=utf-8');
    // 接收数据
    var_dump($_POST);
    $userName = $_POST['userName'];
    $userInfo = $_POST['userInfo'];
    $userIcon = $_POST['userIcon'];
    $starId = $_POST['starId'];

    // 连接数据库
    $link = mysqli_connect('localhost','root','root','test');

    // 准备SQL语句 update
    $sql = "update example_stars set userName ='$userName' ,userInfo ='$userInfo',userIcon ='$userIcon' where id = $starId";

    // echo $sql;

    // 执行SQL语句 改
    mysqli_query($link,$sql);

    // 获取受影响的行数
    $rowNum = mysqli_affected_rows($link);
    echo $rowNum;

    // 关闭数据库
    mysqli_close($link);

    // 返回首页

?>
<a href="./index.php">终于改好了哦,开心吗 哈哈哈🚙🚙🚙🚙🚙🚙🚙</a>