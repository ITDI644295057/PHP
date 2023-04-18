<!DOCTYPE html>
<html lang="en">
<head>
    <title>page 3</title>
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
        font-size: 19px;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #b3e5fc;
    }

    .display {      
        padding: 20px;
        border-radius: 12px;
        background: #ffffff;
        border:1px solid #BFBFBF;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .display h2 {
        font-size: 30px;
        margin-bottom: 25px;
    }

</style>

</head>

<body>
    <div class="display">
        <h2 class="text-center">บันทึกข้อมูลเรียบร้อยแล้ว</h2>  
        <?php
            if(move_uploaded_file($_FILES["card"]["tmp_name"],"images/".$_FILES["card"]["name"])){
                echo "<b>ชื่อ : </b>".$_POST["name"]."<br><b>นามสกุล : </b>".$_POST["surname"]."<br>";
                echo "<b>ที่อยู่ : </b>".$_POST["address"]."<br><br>";       
            }
        ?>
        <center>
            <img src="<?php echo "images/".$_FILES["card"]["name"]; ?>" width="250" >
        </center>
    </div>    
    
</body>

</html>
 
