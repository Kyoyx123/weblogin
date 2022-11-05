<?php
require('dbconnect.php');
$name = $_POST["empname"];  
$sql = "SELECT * FROM employees WHERE fname LIKE '%$name%' ORDER BY fname ASC"; 
$result=mysqli_query($connect,$sql);


$count=mysqli_num_rows($result);
$order=1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
    <div class="container ">
    <h1 class="text-center mt-3">ข้อมูลพนักงานในฐานข้อมูล</h1>
    <hr>
    <?php if($count>0){?>
        <form action="searchData.php" class="form-group" method="POST">
        <label for="">Search</label>
        <input type="text" name="empname" id="" placeholder="ป้อนชื่อพนักงาน" class="form-control">
        <input type="submit" value="ค้นหา" class="btn btn-dark my-2" >
    </form>
    <table class="table table-bordered mt-3 text-center">
        <thead>
            <tr>
                <th>ลำดับที่</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เพศ</th>
                <th>ทักษะความสามารถ</th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
                <th>ลบข้อมูล (Checkbox)</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $order++ ?></td>
                <td><?php echo $row["fname"] ?></td>
                <td><?php echo $row["lname"] ?></td>
                <td>
                <?php if($row["gender"]== "male"){?>
                    ชาย
                <?php } else if($row["gender"]== "female") { ?>
                    หญิง
                <?php } else{ ?>

                <?php } ?>
                </td>
                <td><?php echo $row["skills"] ?></td>
                <td>
            <a href="editForm.php?id=<?php echo $row["id"]?>" class="btn btn-primary">แก้ไข</a>        
            </td>
                <td>
                    <a href="deleteQueryString.php?idemp=<?php echo $row["id"]?>" 
                    class="btn btn-danger"
                    onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')"
                    >ลบข้อมูล</a>
                </td>
                <form action="multipleDelete.php" method="post">
                    <td>
                        <input type="checkbox" class="form-check-input " name="idcheckbox[]" value="<?php echo $row["id"]; ?>">
                    </td>
                
            </tr>
        <?php } ?>
        </tbody>
    </table>
    

     <?php } else{?>
        
        <div class="alert alert-danger">
            <b>ไม่มีข้อมูลพนักงาน<b>
        </div>

      <?php }?>  
        <a href="insertForm.php" class="btn btn-success" id="submitdata">บันทึกข้อมูลพนักงาน</a>
        <?php if($count>0){?>
        <input type="submit" value="ลบข้อมูล (Checkbox)"class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">
            <?php }?>
        </form>
        <button class="btn btn-primary" onclick="checkAll()">เลือกทั้งหมด</button>
            <button class="btn btn-warning" onclick="uncheckAll()">ยกเลิก</button>
    </div>
    
            <script>
                function checkAll(){
                    var form_element=document.forms[1].length;
                    for(i=0;i<form_element-1;i++){
                        document.forms[1].elements[i].checked=true;
                    }
                }
                function uncheckAll(){
                    var form_element=document.forms[1].length;
                    for(i=0;i<form_element-1;i++){
                        document.forms[1].elements[i].checked=false;
                    }
                }
            </script>


</body>
</html>