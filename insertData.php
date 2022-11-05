<?php
// connect DataBase
require('dbconnect.php');

// รับค่าจากฟอร์มลงในคัวแปร
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$emskill = implode(",",$_POST["skills"]); // array to string 


//บันทึกข้อมูล
$sql = "INSERT INTO employees(fname,lname,gender,skills) VALUES('$fname','$lname','$gender','$emskill')";

$result=mysqli_query($connect,$sql);// รันคำสั่ง sql
if($result){
    header("location:index.php");
    exit(0);
}else{
    echo mysqli_error($connect);
}
?>