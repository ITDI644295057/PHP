<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>

<body> 
        <h2>Member Login</h2>
        <form  action="processlogin.php" method="post">
            username <input  type="text" name="username" required><br>   
            password <input   type="password" name="password" required><br>        
            <input  type="submit" value="Login"><br> 
            <a href="regis.php">สมัครสมาชิก</a>            
        </form>    
</body>

</html>