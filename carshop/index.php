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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="picture/icon_car.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />  
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><h4 style="color:rgb(255, 140, 0)">Car Shop</h4></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="form.php">Add Cars</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Setting</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary py-4">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Carshop by Panuwat</h1>
                    <p class="lead fw-normal text-white-40 mb-0">Welcome to the website</p>
                </div>
            </div>
        </header>

        <!-- Show Data-->
        <div class="container"><br><br>
            <div class="row">
                <?php
                    //แสดงข้อมูลจากตาราง cars
                    $getallcars="SELECT * FROM cars";
                    $allcars = mysqli_query($conn, $getallcars);
                    while($row = mysqli_fetch_assoc($allcars)) {   
                ?>
                <div class="col-sm-3 mb-5">  
                    <div class="card  border-secondary"> 
                        <img  src="picture/<?php echo $row['images']  ?>" >
                        <div class="card-body p-4">
                            ID : <?php echo $row['id_car'] ?><br>
                            ยี่ห้อ : <?php echo $row['brand'] ?><br>
                            สี : <?php echo $row['color'] ?><br>
                            ทะเบียนรถ : <?php echo $row['car_registration'] ?><br>
                            ราคา : <b class="text-success"> <?php echo $row['price'] ?></b> บาท
                        </div>  
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-success" href="#!">สั่งซื้อ</a></div>
                        </div> 
                    </div>
                </div>  
                <?php
                    }
                    mysqli_close($conn);//ปิดฐานข้อมูล
                ?>               
            </div>
        </div><br>

        <!-- Footer-->
        <footer class="py-5 bg-primary">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    
</html>
