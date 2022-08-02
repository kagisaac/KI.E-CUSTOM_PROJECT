<?php
require("connection.php");
$Id=$_POST['id'];
$fnames=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$age=$_POST['age'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$password=$_POST['password'];

$repass=$_POST['repeat'];
$country=$_POST['country'];
if($password!=$repass){

    echo ("PASSWORD NOT MATCH");
  
    }
    else{
        echo ('wow youve succesfully created an account');
    $query="INSERT INTO user(Id , fname , lname , address, phone, gender,email, password,repassword,country,age)VALUES('$Id','$fnames','$lname','$address',$phone,'$gender','$email','$password','$repass','$country','$age')";
$result=mysqli_query($con,$query);
if(!$result){
    echo "faile".mysqli_error($con);
}
    }




?>