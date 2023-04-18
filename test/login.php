<html>
    <?php
        $username=$_POST["username"];
        $password=$_POST["password"];
        if($username == "admin" && $password == "letgo"){
            echo "ยินดีต้อนรับ";
    ?> 
    <form action="show.php" method="post" enctype="multipart/form-data">
        ชื่อบริษัท : <input type="text" name="company"><br>
        อัพโหลดรูปภาพบริษัท : <input type="file" name="uploadimage" accept="image/*"><br>
        <input type="submit" value="ยืนยัน">
    </form>
    
    <?php        
        }else{
            echo "ชื่อผู้ใช้หรือรหัสผ่านผิด<br>";  
    ?> 
        <img src="https://shorturl.asia/CnRoF" width='100' height='100'><br>
        <a href="index.php">ย้อนกลับ</a>
    <?php            
        }
    ?>     

</html>

   

