<?php
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

    <title>ѧ����Ϣ����ϵͳ | ѧ��ƽ���ɼ�</title>

    <!-- Bootstrap core CSS -->
    <link href="../SIMS/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../SIMS/css/studenttable.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>

    <div class="container" style="width:400px">
		<div class="panel panel-primary">
		<!-- Default panel contents -->
			<div class="panel-heading">ѧ��ƽ���ɼ�</div>

				<!-- Table -->
				<table class="table table-hover table-bordered">
				<tr class="primary">
				<td>ѧ��</td>
				<td>�ɼ�</td>
				</tr>


<?php
$query="SELECT Sno,AVG(mark) FROM sreport GROUP BY Sno";
$result=mysql_query($query);
$row=mysql_fetch_row($result);
while($row){  
echo 
"
<tr>
<td>$row[0]</td>
<td>$row[1]</td>
</tr>
";
$row=mysql_fetch_row($result);
}
?>

</table>
</div>

			<div style="text-align:center">
					<button type="button" class="btn btn-block btn-primary" onclick="location.href='student_admin_result.php'">����ѧ����Ϣ����</button>
			</div>
	</div>
</div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>