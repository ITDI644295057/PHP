<?php
    $names = $_GET['names'];
    $weight = $_GET['weight'];
    $height = $_GET['height']/100;
    $bmi = $weight/($height*$height);
    
    echo "คุณ : " .$names."\tน้ำหนัก : ".$weight."\tส่วนสูง : ".($height*100);
    echo "<br>มีค่า bmi อยู่ที่ ".number_format($bmi,2,'.',',')."<br>";
    if($bmi < 18.5){
        echo "ผล : ผอม";
    }else if($bmi >= 18.5 && $bmi < 23){
        echo "ผล : ปกติ";
    }else if($bmi >= 23 && $bmi < 25){
        echo "ผล : ท้วม";
    }else if($bmi >= 25 && $bmi < 30){
        echo "ผล : อ้วนระดับ 1";
    }else{
        echo "ผล : อ้วนระดับ 2";
    }
?>