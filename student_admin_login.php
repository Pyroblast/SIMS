<?php
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
$id=$_POST['id'];
$password=$_POST['password'];
$_SESSION['id']=$id;

if ($id && $password){
	 $sql="select * from admin where id='$id' and password='$password'"; 
     $res = mysql_query($sql);
     $rows=mysql_num_rows($res);
	 
	  if($rows){
		   header("refresh:0;url=student_admin_result.php");//��תҳ�棬ע��·��
		   exit;
	   } else {
			echo "<script language='javascript'>alert('�˺Ż����벻��ȷ��');history.back();</script>";
	   }
 }

else 
{
 echo "<script language='javascript'>alert('�˺ź����벻��Ϊ��!');history.back();</script>";
}


?>

