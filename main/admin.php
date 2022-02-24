 <?php
session_start();
if(isset($_SESSION['user'])){
    if($_SESSION['user']!='root'){
        echo "Access denied";
        return false;
    }
}
?>
<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    </head>
    <body>
  <?php
        $host="localhost";
        $user="root";
        $passwd="";
        $dbname="assigment";      
        $conn=new mysqli($host,$user,$passwd,$dbname);
        $u=$_POST['user'];
        $pass=md5($_POST['pass']);
        $sql="SELECT*FROM USER WHERE USERNAME='$u' AND PASSWORD='$pass'";
        $res=$conn->query($sql);
        if($res->num_rows>0){
            $_SESSION['user']=$u;
        }
        if($_SESSION['user']=='root'){
            $query='SELECT*FROM USER';
            $kq=$conn->query($query);
            if($kq->num_rows>0){
                echo '<table class="table">'.
                       '<th>ID</th>'.
                        "<th>Username</th>".
                        "<th>Password</th>".
                        "<th>Giới tính</th>";
                while ($row = $kq->fetch_assoc()) {
                    echo "<table class='table'>".
                         "<td>$row[ID]</td>".
                         "<td>$row[USERNAME]</td>".
                         "<td>$row[PASSWORD]</td>".
                         "<td>$row[GIOITINH]</td>".
                            "</table>";
                    
                }
            }
        }else{
            echo "<script>Đăng nhập thất bại</script>";
        }
        ?>

<script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
