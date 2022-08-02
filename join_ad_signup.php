<?php
require("connection.php");

$ad_fname=$_POST['ad_fname'];
$ad_lname=$_POST['ad_lname'];
$ad_email=$_POST['ad_email'];

$ad_age=$_POST['ad_age'];
$ad_address=$_POST['ad_address'];
$ad_phone=$_POST['ad_phone'];
$ad_gender=$_POST['ad_gender'];
$admin_id=$_POST['admin_id'];
$admin_user_name=$_POST['admin_user_name'];

$ad_password=$_POST['ad_password'];

$ad_repeat=$_POST['ad_repeat'];
        
if($ad_password!=$ad_repeat){

echo ("PASSWORD NOT MATCH");
}
else{
    echo ('wow youve succesfully created an account !');
    $ad_country=$_POST['ad_country'];


    $query4="INSERT INTO admin_signup(ad_fname , ad_lname , ad_email, ad_age, ad_address,ad_phone, ad_gender,admin_id,admin_user_name,ad_password,ad_repeat,ad_country)VALUES('$ad_fname','$ad_lname','$ad_email','$ad_age','$ad_address','$ad_phone','$ad_gender','$admin_id','$admin_user_name','$ad_password','$ad_repeat','$ad_country')";
    $result4=mysqli_query($con,$query4);
    if(!$result4){
        echo "faile".mysqli_error($con);
    }
}







?>