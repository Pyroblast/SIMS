<?php
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
$id=$_POST['id'];
$password=$_POST['password'];
$_SESSION['id']=$id;

if ($id && $password){
	 $sql="select * from admin where id='$id' and password='$password'"; 
     $res = mysql_query($sql);
     $rows=mysql_num_rows($res);
	 
	  if($rows){
		   header("refresh:0;url=student_admin_result.php");//跳转页面，注意路径
		   exit;
	   } else {
			echo "<script language='javascript'>alert('账号或密码不正确！');history.back();</script>";
	   }
 }

else 
{
 echo "<script language='javascript'>alert('账号和密码不能为空!');history.back();</script>";
}


?>

