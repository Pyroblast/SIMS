<?php
ob_start();
session_start();
$mysql_servername = "localhost"; //������ַ
$mysql_username = "root"; //���ݿ��û���
$mysql_password =""; //���ݿ�����
$mysql_database ="student"; //���ݿ�
mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_select_db($mysql_database); 
if(mysqli_connect_errno())
{
echo "�������ݿ�ʧ��";
exit;
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>

    <title>ѧ����Ϣ����ϵͳ</title>

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
					echo "<script language='javascript'>alert('�ÿγ��Ѵ���!');history.back();</script>";

					exit;
				}

		$sql="insert into sreport(Sno,Cname)values('$Sno','$Cname')";

		$res = mysql_query($sql);

		if($res)
			{
			header("refresh:2;url=student_result.php");
			echo "<div class='alert alert-success'>���ӳɹ���2����Զ�����</div>";

			}
		else
			{
			header("refresh:2;url=student_result.php");
			echo "<div class='alert alert-danger'>����ʧ��...2����Զ�����</div>";

			}

	?>


  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>


