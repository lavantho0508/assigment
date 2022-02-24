<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">      
        <title></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    </head>
    <body>
        
        <form action="../main/admin.php" method="POST" class="form-control">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="user" class="form-control" required="" id="username">
             <label for="passwd" class="form-label">Password</label>
             <input type="text" name="pass" class="form-control" required="" id="passwd"><!-- comment -->   
             <button class="btn btn-primary" type="submit"> Đăng nhập</button>
        </form>
         
     
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
