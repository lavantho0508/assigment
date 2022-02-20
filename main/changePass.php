<?php
session_start();
$host="localhost";
$user="root";
$passwd="";
$dbname="assigment";
$conn=new mysqli($host,$user,$passwd,$dbname);
$username=$_POST['user'];
$pass=md5($_POST['passwd']);
$newpass=md5($_POST['newpass']);
$repass=md5($_POST['repass']);

$sql="UPDATE USER SET PASSWORD='$newpass' WHERE USERNAME='$username'";
if($conn->query($sql)==TRUE){
    echo "<script>alert('Đổi mật khẩu thành công')</script>";
    echo "<script>window.location='../TrangChu.php'</script>";
}
?>