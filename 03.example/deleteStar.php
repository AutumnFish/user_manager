<?php
    // 设置中文编码
    header('content-type:text/html;charset=utf-8');

    // 接收数据
    $starId = $_GET['starId'];

    // 删除数据 数据库

    // 连接数据库
    $link = mysqli_connect('localhost','root','root','test');

    // 设置SQL语句
    // 条件不能漏 外面使用双引号
    $sql = "delete from example_stars where id = $starId";
    // echo $sql;
    // 执行SQL语句 删除
    mysqli_query($link,$sql);

    // 获取受影响的行数
    $rowNum = mysqli_affected_rows($link);
    echo $rowNum;

    // 关闭连接
    mysqli_close($link);

    // 回首页

?>
<a href="./index.php">点我去首页！！😍😍😍😍😍😍</a>