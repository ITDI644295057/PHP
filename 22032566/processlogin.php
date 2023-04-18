<?php
    session_start(); 
?>
<?php
    include("connect.php");
?>
<?php
    $username = "'".$_POST['username']."'";
    $password = "'".$_POST['password']."'";
    $sql ="SELECT*FROM user WHERE username LIKE $username AND password LIKE $password";
    echo $sql;
    $result = $conn->query($sql);
    echo "<br>";
    if ($result->num_rows > 0) {
        echo "ถูกต้อง";
        $row = $result->fetch_assoc();
        echo $row['fullname'];
        $_SESSION['name'] = $row['fullname'];
    } else {
        echo "ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><a href="users.php">ไปหน้า user</a>
</body>
</html>