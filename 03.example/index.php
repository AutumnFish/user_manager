<pre>
<?php
  // 连接数据库
  $link = mysqli_connect('localhost','root','root','test');

  // 准备SQL语句
  $sql = "select * from example_stars";

  // 执行SQL语句 查
  $result = mysqli_query($link,$sql);

  // 解析结果
  $data = mysqli_fetch_all($result);

  // 关闭连接
  mysqli_close($link);

  // 渲染页面
  // var_dump($data);

?>
</pre>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="lib/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  <style>
    .input-group {
      margin: 20px 0;
    }

    .form-group {
      display: flex;
    }

    .form-group>* {
      flex: 1;
      margin: 10px;
    }
    table{
      background-color: white;
    }
    a{
      text-decoration: none !important;
    }
    table{
      font-size:25px;
    }
    td{
      vertical-align: middle !important;
    }
    tr td:last-child{
      text-align: center;
    }
    img{
      width: 140px !important;
    }
  </style>
</head>

<body class='bg-success'>
  <div class="container">
    <h1><a href="./index.html">人员管理</a>
      <small>--首页</small>
    </h1>
    <table class="table table-bordered  table-striped">
      <thead>
        <tr>
          <th width='10%'>序号</th>
          <th width='10%'>姓名</th>
          <th width='10%'>头像</th>
          <th width='55%'>描述</th>
          <th width='20%'>管理</th>
        </tr>
      </thead>
      <tbody>
      <?php for($i=0;$i<count($data);$i++): ?>
          <tr>
            <td><?php echo $i+1; ?></td>
            <td><?php echo $data[$i][1]; ?></td>
            <td>
              <img src="<?php echo $data[$i][2]; ?>" alt="">
            </td>
            <td><?php echo $data[$i][3]; ?></td>
            <td>
              <a href="./update.php?starId=<?php echo $data[$i][0]; ?>" class="btn btn-md btn-info">编辑</a>
              <a href="./deleteStar.php?starId=<?php echo $data[$i][0];?>" class="btn btn-md btn-danger">删除</a>
            </td>
          </tr>
      <?php endfor; ?>
      </tbody>
    </table>
    <a href="./insert.html" class="btn btn-primary">新增</a>
  </div>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>