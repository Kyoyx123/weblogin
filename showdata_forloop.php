<?php

require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);// จำนวนแถวที่ดึงมาจากฐานข้อมูล


for($i=0;$i<$count;$i++){
    $row=mysqli_fetch_object($result);
    echo "รหัสพนักงาน = ".$row->id."<br>";
    echo "ชื่อ = ".$row->fname."<br>";
    echo "นามสกุล = ".$row->lname."<br>";
    echo "เพศ = ".$row->gender."<br>";
    echo "ทักษะ = ".$row->skills."<br>";
    echo "<hr>";
}


?>