<?php
ob_start();
session_start();
$mysql_servername = "localhost"; //主机地址
$mysql_username = "root"; //数据库用户名
$mysql_password =""; //数据库密码
$mysql_database ="student"; //数据库
mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_select_db($mysql_database); 
if(mysqli_connect_errno())
{
echo "连接数据库失败";
exit;
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>

    <title>学生信息管理系统</title>

    <!-- Bootstrap core CSS -->
    <link href="../SIMS/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../SIMS/css/alert.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="container" style="width:600px">

	<?php
		$Sno=$_SESSION['Sno'];
		$Cname=$_POST['course'];
		$sql="SELECT * FROM sreport WHERE Sno = '$Sno' and Cname='$Cname'";

		$res = mysql_query($sql);

		$rows=mysql_num_rows($res);

			if($rows)
				{
					echo "<script language='javascript'>alert('该课程已存在!');history.back();</script>";

					exit;
				}

		$sql="insert into sreport(Sno,Cname)values('$Sno','$Cname')";

		$res = mysql_query($sql);

		if($res)
			{
			header("refresh:2;url=student_result.php");
			echo "<div class='alert alert-success'>添加成功！2秒后自动返回</div>";

			}
		else
			{
			header("refresh:2;url=student_result.php");
			echo "<div class='alert alert-danger'>添加失败...2秒后自动返回</div>";

			}

	?>


  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>



