<html>
       <body>
       กรุณาตรวจสอบข้อมูล
              <form action="seve.php" method ="post">
              ชื่อ  : <input type="text" name="name" placeholder="ชื่อ" value ="<?php echo $_POST['name']?>">
              สกุล : <input type="text" name="surname" placeholder="นามสกุล" value ="<?php echo $_POST['surname']?>"><br>
              วันเดือนปีเกิด : <input type="date" name="day" placeholder="วันเดือนปีเกิด" value ="<?php echo $_POST['day']?>"><br>
              ที่อยู่ : <textarea rows="4" cols="50" name="address"></textarea><br>
              <input type="submit" value="บันทึก">
              </form>   
       </body>   
</html>