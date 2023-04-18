    <?php
     include("connect.php");
       
       $id=$_GET['id'];
       $sql="SELECT * FROM user WHERE user_id=$id";
       $result=$conn->query($sql);
       $row = $result->fetch_assoc();       
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Regis</title>
</head>

<body>
        <center><h3>แก้ไขข้อมูล</h3>
        <form  action="updateuserphoto.php" method="post" enctype="multipart/form-data">
            username : <input  type="text" name="username" value=<?php echo $row['username'];?>><br>      
            password : <input  type="text" name="password" value=<?php echo $row['password'];?>><br> 
            fullname : <input  type="text" name="fullname" value=<?php echo $row['fullname'];?>><br> 
            userid : <input  type="hidden" name="userid" value=<?php echo $_GET['id'];?>><br> 
            <!-- <input  type="checkbox" name="agree" value="yes"> ยอมรับเงี่อนไข<br>        -->
            <input  type="submit" value="แก้ไข">
        </form></center>    
</body>

</html>