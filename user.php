<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- google font -->
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dekko&family=Sahitya&display=swap" rel="stylesheet">
</head>
<!-- internal CSS -->
<link rel="stylesheet" href="style.css?v=echo.time()">
<!-- page css -->
<style>
    body{
        background-color: azure;
    }

</style>
</head>
<body>


<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"> <b> धन्यवाद</b></h4>
  <hr>
  <p class="sucess">
तुमची सर्व माहिती /समस्या माझ्या  पर्यंत पोहचली आहे मी लवकरच आपल्याला तक्रारीचा विचार करेल.आमचे प्रतिनिधी आपल्याशी २ दिवसात संपर्क करेल .</p>

</div>




<!-- Jquery and JS -->
    <!-- jQuery -->
    <script src="./js/jquery-3.5.1.min.js">
   
    </script>

    <!-- javascript -->
    <script src="./js/bootstrap.min.js"></script>
    
</body>
</html>




<?php
$con=mysqli_connect('localhost','root','');
if ($con){
    // echo "<h1>Done</h1>";
}
else{
    echo "<h1>FAIL</h1>";
}
mysqli_select_db($con,'swaraj');
$frst=$_POST['name'];
$srname=$_POST['lstname'];
$email=$_POST['email'];
$contact=$_POST['num'];
$problem=$_POST['comment'];
$add=$_POST['add'];
$village=$_POST['village'];
$Blood_Group=$_POST['blood_group'];
$Gender=$_POST['gender'];


// $zip=$_POST['zip'];
$query="INSERT INTO `donation`( `name`, `lastname`, `email`, `contact`, `problem`, `ADDRESS`, `village`, `Blood_Group`,`Gender`) 
VALUES ('$frst', '$srname', '$email', '$contact','$problem','$add','$village','$Blood_Group','$Gender')";

mysqli_query($con,$query);

?>