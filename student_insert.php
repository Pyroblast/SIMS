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
	$Sno=$_POST['Sno'];
	$Sname=$_POST['Sname'];
	$age=$_POST['age'];
	$Ssex=$_POST['Ssex'];
	$sdept=$_POST['sdept'];
	$password=$_POST['password'];

	if ($Sno && $Sname && $age && $Ssex && $sdept && $password){
	
		$sql="SELECT * FROM student WHERE Sno = '$Sno'";
		$res = mysql_query($sql);
		$rows=mysql_num_rows($res);

			if($rows){
						echo "<script language='javascript'>alert('该学生已存在');history.back();</script>";

						exit;
					 }
		$sql="insert into student(Sno,Sname,age,Ssex,sdept,password) values('$Sno','$Sname','$age','$Ssex','$sdept','$password')"; 

		$res = mysql_query($sql);

			if($res){
					$sql_course="insert into sreport(Sno) values('$Sno')";
					$ress=mysql_query($sql_course);
					$key="SELECT `Key` FROM `sreport` WHERE `Sno`='$Sno'";
					$result=mysql_query($key);
					$row=mysql_fetch_row($result);
					$key_min=$row[0];


				for($i=1;$i<=2;$i++){
									$sql_course="insert into sreport(Sno) values('$Sno')";
									$ress=mysql_query($sql_course);
									}

					$sql_sno_Chinese="UPDATE sreport SET `Cname` = 'Chinese' WHERE `Key`='$key_min'";
					$res_Chinese=mysql_query($sql_sno_Chinese);
					$key_min++;
					$sql_sno_Math="UPDATE sreport SET `Cname` = 'Math' WHERE `Key`='$key_min'";
					$res_Math=mysql_query($sql_sno_Math);
					$key_min++;
					$sql_sno_English="UPDATE sreport SET `Cname` = 'English' WHERE `Key`='$key_min'";
					$res_English=mysql_query($sql_sno_English);

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
				header("refresh:2;url=student_admin_result.php");
				echo "<div class='alert alert-success'>添加成功！2秒后自动返回</div>";

			}else{
				header("refresh:2;url=student_insert.html");
				echo "<div class='alert alert-danger'>添加失败...2秒后自动返回</div>";

			}
			}
			else 
			{
				echo "<script language='javascript'>alert('学生信息不能为空!');history.back();</script>";
			}
		?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
