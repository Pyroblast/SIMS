<?php
session_start();
$mysql_servername = "localhost"; //主机地址
$mysql_username = "root"; //数据库用户名
$mysql_password =""; //数据库密码
$mysql_database ="student"; //数据库
mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_select_db($mysql_database); 
mysql_query("set character set 'utf8'");//读库
mysql_query("set names 'utf8'");//写库

if(mysqli_connect_errno())
{
echo "连接数据库失败";
exit;
}  
?>

<!DOCTYPE html>
<html lang="zh-cn">
  <meta charset="utf-8">

  <head>

    <title>学生信息管理系统 | 学生课程打分</title>

    <!-- Bootstrap core CSS -->
    <link href="../SIMS/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../SIMS/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
		$Sno=$_GET['id'];
		$Cname=$_GET['Cname'];
		$_SESSION['Sno']=$Sno;
		$_SESSION['Cname']=$Cname;
	?>

    <div class="container">

      <form class="form-signin" action="student_mark_changed.php" method="post" role="form">
        <h2 class="form-signin-heading">学生课程打分</h2>
		<br />
		<h3 style="text-align:center">
		<?php
		echo "学号: $Sno 课程: $Cname";
		
		?>
		</h3>
		
        <input type="text" class="form-control" placeholder="分数" name="mark" required autofocus>
		<br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">提交</button>
		<br />
		<button type="button" class="btn btn-block btn-default" onclick="location.href='javascript:window.history.back();'">返回</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
