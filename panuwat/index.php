<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="" ใส่ classปุ่มไป>Add+</a>
    <table ใส่ class table>
        <tr>
            <th>รหัส</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
          $getallcars="SELECT * FROM cars";
          $allcars = mysqli_query($conn, $getallcars);
          while($row = mysqli_fetch_assoc($allcars)){ 
        ?>
        <tr>
            <td><?php echo $row['ชื่อฟิวส์'] ?></td>
            <td>x</td>
            <td>x</td>
            <td>x</td>
            <td><a href="" class=ปุ่ม >Edit</a></td>
            <td><a href="" class=ปุ่ม >Delete</a></td>
        </tr>
        <?php
          }
          //ปิดฐานข้อมูล
        ?>
    </table>
</body>
</html>