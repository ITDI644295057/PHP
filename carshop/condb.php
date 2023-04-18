<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "carshop";

    // Create connection 
    $conn = new mysqli($servername, $dbusername,$dbpassword,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        //echo "Connected successfully"; แสดงเมื่อเชื่อมต่อฐานข้อมูลได้
        $brand = $_POST['brand'];
        $color = $_POST['color'];
        $register = $_POST['register'];
        $price = $_POST['price'];

    //อัปโหลดรูปภาพและเก็บชื่อรูปภาพ
    if (is_uploaded_file($_FILES["carimage"]["tmp_name"])) {
        $new_image_name = 'car_'.uniqid().".".pathinfo(basename($_FILES["carimage"]["name"]),PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["carimage"]["tmp_name"],"picture/".$new_image_name);
    }else{
        $new_image_name = "";
    }

    //เพิ่มข้อมูลในตาราง cars
    $sql = $conn->prepare("INSERT INTO cars (brand,color,car_registration,price,images) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssds",$brand,$color,$register,$price,$new_image_name);
    $sql->execute();

    //คำสั่งเดิม
    //$sql = "INSERT INTO cars(brand,color,car_registration,price,images) VALUES('$brand','$color','$register','$price','$new_image_name')";
    //$result = mysqli_query($conn, $sql);
    
    if ($sql) {
        echo "<script> alert('บันทึกข้อมูลเรียบร้อยแล้วครับ'); </script>";
        echo "<script> window.location='index.php'; </script>";
    } else {
        echo "<script> alert('ไม่สามารถบันทึกข้อมูลได้ครับ');</script>";
    }
   
?>