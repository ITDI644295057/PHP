<?php
    include("connect.php");
?>
<?php
    $id = $_GET['id'];
    $sql = $conn->prepare("DELETE FROM user  WHERE user_id = ?");
    $sql->bind_param("i",$id);
    $sql->execute();
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
    <h2 style="color:blue;">ลบข้อมูลเรียบร้อยแล้วครับ</h2>
    <a href="users.php">ย้อนกลับ</a>
</body>
</html>