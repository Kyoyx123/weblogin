<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SubmitDataEmployess</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
    <div class="container my-3">
        <h2 class="text-center">FromSubmitData</h2>
        <form action="insertData.php" method="POST">
            <div class="form-group mt-3"">
                <label for="firstname">Name</label>
                <input type="text" name="fname" id="" class="form-control">
            </div>
            <div class="form-group mt-3"">
                <label for="lastname" >LastName</label>
                <input type="text" name="lname" id="" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="gender" class="form-floatiog">เพศ</label>
                <input type="radio" name="gender" id="" value="male">ชาย
                <input type="radio" name="gender" id="" value="female">หญิง
                <input type="radio" name="gender" id="" value="other">อื่น
            </div>
            <div class="form-group mt-3">
                <label for="">ทักษะ </label>
                <input type="checkbox" name="skills[]" id="" value="java"> java
                <input type="checkbox" name="skills[]" id="" value="php"> php
                <input type="checkbox" name="skills[]" id="" value="Python"> Python
                <input type="checkbox" name="skills[]" id="" value="html"> html
            </div>
            <div class="mt-3">
                <input type="submit" value="SubmitData" class="btn btn-success" id="submitdata">
                <input type="reset" value="ResetData" class="btn btn-danger">
                <a href="index.php" class="btn btn-primary">Back To HomePage</a>
            </div>
            </form>
            
    </div>
</body>
</html>