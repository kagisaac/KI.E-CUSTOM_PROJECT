<?php
require('connection.php');
$form_id=$_POST['form_id'];
$invoice=$_POST['invoice'];
$stamped_invoice=$_POST['stamped_invoice'];
$transport_invoice=$_POST['transport_invoice'];

$airway_bill=$_POST['airway_bill'];
$packing_list=$_POST['packing_list'];
$t1=$_POST['t1'];
$arrival_notice=$_POST['arrival_notice'];

$query2="INSERT INTO input_decl(form_id , invoice , stamped_invoice , transport_invoice , airway_bill , packing_list , t1 , arrival_notice )VALUES($form_id,'$invoice','$stamped_invoice','$transport_invoice','$airway_bill','$packing_list','$t1','$arrival_notice')";
$result2=mysqli_query($con,$query2);
if(!$result2){
    echo "faile".mysqli_error($con);
}
?>