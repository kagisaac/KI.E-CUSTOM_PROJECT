<?php
require("connection.php");

$fname_pay=$_POST['fname_pay'];
$email_pay=$_POST['email_pay'];
$address_pay=$_POST['address_pay'];

$city_pay=$_POST['city_pay'];
$state_pay=$_POST['state_pay'];

$zip_pay=$_POST['zip_pay'];
$cardname=$_POST['cardname'];
$cardnumber=$_POST['cardnumber'];

$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];


$query3="INSERT INTO payment( fname_pay , email_pay , address_pay, city_pay, state_pay,zip_pay, cardname,cardnumber,expmonth,expyear,cvv)VALUES('$fname_pay','$email_pay','$address_pay','$city_pay','$state_pay','$zip_pay','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
$result3=mysqli_query($con,$query3);
if(!$result3){
    echo "faile".mysqli_error($con);
}





?>