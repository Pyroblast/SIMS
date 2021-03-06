<?php
include("dbc.php");
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <meta charset="utf-8">

  <head>

    <title>学生信息管理系统 | 学生平均成绩</title>

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
			<div class="panel-heading">学生平均成绩</div>

				<!-- Table -->
				<table class="table table-hover table-bordered">
				<tr class="primary">
				<td>学号</td>
				<td>成绩</td>
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
					<button type="button" class="btn btn-block btn-primary" onclick="location.href='student_admin_result.php'">返回学生信息管理</button>
			</div>
	</div>
</div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>