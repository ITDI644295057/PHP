    <?php
        include("connect.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Regis</title>
</head>

<body>
        <center><h3>สมัครสมาชิก</h3>
        <form  action="processregis.php" method="get">
            username : <input  type="text" name="username" ><br>      
            password : <input  type="password" name="password" ><br> 
            fullname : <input  type="text" name="fullname" ><br> 
            <input  type="checkbox" name="agree" value="yes"> ยอมรับเงี่อนไข<br>       
            <input  type="submit" value="สมัครสมาชิก">
        </form></center>    
</body>

</html>