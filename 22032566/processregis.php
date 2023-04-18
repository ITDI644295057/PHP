    <?php
        include("connect.php");
    $uname= $_GET['username'];
    $pass= $_GET['password'];
    $fullname= $_GET['fullname'];
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
        //!isset($_GET['username']);
        //$sql = "INSERT INTO user (username,password,fullname) VALUES ('$uname','$pass','$fullname')";
        //คำสั่งเดิม
        //echo $sql;
        //$sql = 'INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`) VALUES (NULL, \'panu123\', \'1234\', \'panwat jantong\');';
        //mysqli_query($conn, $sql)

        //คำสั่งเชิง OOP
        $sql = $conn->prepare("INSERT INTO user (username,password,fullname) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $uname, $pass, $fullname);
        $sql->execute();
       
    ?>
    <?php
        $getalluser="SELECT * FROM user";
        //echo $getalluser;
        $alluser = mysqli_query($conn, $getalluser);
        //echo $alluser;
        while($row = mysqli_fetch_assoc($alluser)) {
            echo "ID: ".$row['user_id']." &nbsp;&nbsp;Name: " . $row['username']. "&nbsp;&nbsp;password: " .$row['password']."&nbsp;&nbsp;fullname: " .$row['fullname'] ."<br>";
            echo "<br>";
          }
    ?>

    <?php
        mysqli_close($conn);
    ?>
    
</body>
</html>