
<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  if(isset($_SESSION['user'])){
    session_destroy();
    echo "<script>alert('Đăng xuất thành công')</script>";

      echo "<script>window.location='../TrangChu.php'</script>";
  }else{
    echo "<script>alert('Bạn chưa đăng nhập, vui lòng đăng nhập lại')</script>";

    echo "<script>window.location='../TrangChu.php'</script>";
  }
  ?>
</body>
</html>