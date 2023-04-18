<html>
    <h2>แอปพลิเคชั่นเพื่ออัพโหลดรูปบริษัท</h2>
   
    <?php
        //$pic_name=$_FILES["uploadimage"]["name"];
        // echo '<pre>';
        // print_r($_FILES); print >> ไฟล์,ว่าเก็บตรงไหน,ชื่ออะไร
        // echo '<pre>';
        if(move_uploaded_file($_FILES["uploadimage"]["tmp_name"],"images/".$_FILES["uploadimage"]["name"])){
            echo "บริษัท".$_POST["company"]."<br>";
            //แสดงรูปอีกรูปแบบ echo "<br><br><img src='images/$pic_name' width='250' height='200' ";
        }
    ?>
    <img src="<?php echo "images/".$_FILES["uploadimage"]["name"]; ?>" width="200" >
</html>

<!-- ใส่รูป <img src="images/ชื่อไฟล์" width="200" >  -->