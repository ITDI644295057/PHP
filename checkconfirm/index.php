<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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

    .login {
        width: 360px;
        height: min-content;
        padding: 20px;
        border-radius: 12px;
        background: #ffffff;
        border:1px solid #BFBFBF;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .login h1 {
        font-size: 36px;
        margin-bottom: 25px;
    }

    .login form {
        font-size: 20px;
    }

    .login form .form-group {
        margin-bottom: 12px;
    }

    .login form input[type="submit"] {
        font-size: 20px;
        margin-top: 15px;
    }
    </style>

</head>

<body>
    <div class="login">
        <center>
            <img  src="member.png" alt="member.png" width="150" height="150" >
        </center>
        <h2 class="text-center">Member Login</h2>
        <form class="needs-validation" action="checkconfirm.php" method="post">
            <div class="form-group was-validated">
                E-mail <input  class="form-control" type="email" name="email" required>  
                <div class="invalid-feedback">
                    กรุณากรอกอีเมล
                </div>      
            </div>        
            <div class="form-group was-validated">
                Password <input  class="form-control" type="password" name="password" required> 
                <div class="invalid-feedback">
                   กรุณาพิมพ์รหัสผ่าน
                </div>
            </div>       
            <input type="checkbox" name="confirm" > ยืนยันการเปิดเผยข้อมูล<br>     
            <div class="form-group">
                <input class="btn btn-primary w-100" type="submit" value="Login">
            </div>
        </form>    
    </div>

</body>

</html>