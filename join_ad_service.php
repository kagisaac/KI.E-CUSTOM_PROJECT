<?php
require('connection.php');
$service_id=$_POST['service_id'];
$arrival_goods=$_POST['arrival_goods'];
$decl_payment_recpt=$_POST['decl_payment_recpt'];
$exit_note=$_POST['exit_note'];

$delivery_pay_recpt=$_POST['delivery_pay_recpt'];

$query5="INSERT INTO admin_service(Id , arrival_goods ,decl_payment_recpt, exit_note, delivery_pay_recpt)VALUES($service_id,'$arrival_goods','$decl_payment_recpt','$exit_note','$delivery_pay_recpt')";
$result5=mysqli_query($con,$query5);
if(!$result5){
    echo "faile".mysqli_error($con);
}
?>