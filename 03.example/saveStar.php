<pre>
<?php
    // 设置中文编码
    header('content-type:text/html;charset=utf-8');
    // 接收数据
    /*
        array(3) {
            ["userName"]=>
            string(12) "山下智久"
            ["userInfo"]=>
            string(28) "帅气,霸道和尚爱上我"
            ["userIcon"]=>
            string(93) "https://ss0.baidu.com/6ONWsjip0QIZ8tyhnq/it/u=1074279294,1092020202&fm=58&bpow=1157&bpoh=1541"
        }
    */
    $userName = $_POST["userName"];
    $userInfo = $_POST["userInfo"];
    $userIcon = $_POST["userIcon"];

    // 保存到数据库
    // 连接数据库
    $link = mysqli_connect('localhost','root','root','test');

    // 准备SQL语句
    // "insert into example_stars (userName,userIcon,userInfo) values(萝卜丝,xxx.png,嘎嘣脆)";
    $sql = "insert into example_stars (userName,userIcon,userInfo) values('$userName','$userIcon','$userInfo')";

    // var_dump($sql);

    // 执行SQL语句
    mysqli_query($link,$sql);

    // 获取受影响的行数
    $rowNum = mysqli_affected_rows($link);
    echo $rowNum;
    // 关闭连接
    mysqli_close($link);
    // 返回首页

?>
<a href="./index.php">戳我就去首页了yeah</a>
</pre>