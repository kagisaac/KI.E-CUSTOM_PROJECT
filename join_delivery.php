<?php
require("connection.php");

$delivery_fname=$_POST['delivery_fname'];
$delivery_lname=$_POST['delivery_lname'];
$delivery_email=$_POST['delivery_email'];

$delivery_age=$_POST['delivery_age'];
$delivery_address=$_POST['delivery_address'];
$delivery_phone=$_POST['delivery_phone'];
$delivery_gender=$_POST['delivery_gender'];


$delivery_user_id=$_POST['delivery_user_id'];
$delivery_exit_note=$_POST['delivery_exit_note'];


$query6="INSERT INTO delivery(delivery_fname , delivery_lname , delivery_email, delivery_age, delivery_address,delivery_phone, delivery_gender,delivery_user_id,delivery_exit_note)VALUES('$delivery_fname','$delivery_lname','$delivery_email',$delivery_age,'$delivery_address','$delivery_phone','$delivery_gender','$delivery_user_id','$delivery_exit_note')";
$result6=mysqli_query($con,$query6);
if(!$result6){
    echo "faile".mysqli_error($con);
}





?>