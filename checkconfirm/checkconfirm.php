<!DOCTYPE html>
<html lang="en">
<head>
    <title>page 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS File -->
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');
   * {
    font-family: 'Prompt', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #b3e5fc;
    }

    .personal {
        width: 360px;
        height: min-content;
        padding: 20px;
        border-radius: 12px;
        background: #ffffff;
        border:1px solid #BFBFBF;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .personal h3 {
        font-size: 30px;
        margin-bottom: 25px;
    }

    .personal h2 {
        font-size: 24px;
        margin-bottom: 25px;
    }

    .personal form {
        font-size: 20px;
    }

    .personal form .form-group {
        margin-bottom: 12px;
    }

    .personal form input[type="submit"] {
        font-size: 20px;
        margin-top: 15px;
    }
    </style>

</head>

<body>
    <div class="personal">
        <?php
            isset( $_POST["confirm"] ) ? $confirm = $_POST["confirm"] : $confirm = "";
            if($confirm=="on"){
        ?>
        <h3 class="text-center">กรอกข้อมูลส่วนตัว</h3>
        <form class="needs-validation" action="display.php" method="post" enctype="multipart/form-data">
            <div class="form-group was-validated">
                ชื่อ <input class="form-control" type="text" name="name" required>
                <div class="invalid-feedback">
                   กรุณาพิมพ์ชื่อ
                </div>
                นามสกุล <input class="form-control" type="text" name="surname" required>
                <div class="invalid-feedback">
                   กรุณาพิมพ์นามสกุล
                </div>
                ที่อยู่ <textarea  class="form-control"  cols="25" name="address" required></textarea>
                <div class="invalid-feedback">
                   กรุณากรอกที่อยู่
                </div>
                รูปบัตรประชาชน <input class="form-control" type="file" name="card" accept="image/*" required><br>
            </div> 
            <div class="form-group">
                <input class="btn btn-primary w-100" type="submit" value="บันทึก">
            </div>
        </form>
        <?php
            }else{
        ?>     
        <h2 class="text-center">คุณไม่ได้ยืนยันการเปิดเผยข้อมูล</h2>  
        <center>
            <img src="no.png" width="200"><br><a href="index.php">ย้อนกลับ</a>
        </center>
        <?php
            }
        ?>
    </div>

<body>

</html>