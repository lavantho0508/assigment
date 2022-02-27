<?php
session_start();
?>
<?php
$host="localhost";
$user="root";
$passwd="";
$dbname="assigment";
$conn=new mysqli($host,$user,$passwd,$dbname);
$user=$_POST['user'];
$passwd=$_POST['passwd'];
$sql="SELECT*FROM tbl_sample WHERE USERNAME='$user' and PASSWORD='$passwd' limit 1";
$rs=$conn->query($sql);
if($rs->num_rows>0){

    $_SESSION['user']=$user;
    echo "<script>alert('Đăng nhập thành công')</script>";
    echo "<script>window.location='../TrangChu.php'</script>";




}else{
    echo "<script>alert('Đăng nhập thất bại')</script>";
    echo "<script>window.location='../TrangChu.php'</script>";

}

?>