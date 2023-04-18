<?php 
  //  echo '<pre>';จัดระเบียบ
  //  print_r($_FILES); ดูรายละเอียดที่เก็บในอาเรย์
  //  echo '<pre>';
  $pic_name=$_FILES["uploadimage"]["name"];
    if(move_uploaded_file($_FILES["uploadimage"]["tmp_name"],"images/".$_FILES["uploadimage"]["name"]))
    {
        echo "ไฟล์ชื่อ : ".$_FILES["uploadimage"]["name"]."\tอัปโหลดเสร็จแล้วครับ";
        echo "<br><br><img src='images/$pic_name' width='200'>";
    }  
   
?>