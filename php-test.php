<!DOCTYPE html>
<?php
if(isset($_Post))
    echo $names = $_REQUEST['fnames']; 

echo "hello world <br/>".$names;
echo $names;
//die (hello world);
$vat=50;
$salary=1500;
$gross=$vat*$salary;
echo $gross;

if($gross>10000000){
    
    echo "hey ".$names." with net salary ".$gross;
}
else{
   for($i=0; $i<10;$i++)
    echo "hey ".$names." your net salary is below 299<br/>";
}



?>
<html>
<body>
<p><strong>WELCOME TO KI.E-CUSTOM <br>Fill the form for the application of Home Delivery  </strong></p><hr>

<form method=$_POST action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fnames" value=""><br>

  <label for="lname">Last name:</label>
  <input type="text"  id="lname" name="lname" value=""><br>
  <p>E-mail: <input type="email" method=$_POST name="email" size="30"/></p>
  <p>age: <input type="number"  name="age" size="5"/></p>
  <p>address: <input type="text" method=$_POST name="address" size="26"/></p>
  <p>Phone number: <input type="number" name="phone" size="26"/></p>
  <p>Gender: <label for="address">Male</label><input type="radio" name="address" value="Male"/><label for="address">Female</label><input type="radio" name="address" value="female"/> </p>
  <p>Id number: <input type="number"  name="id" size="26"/></p>
 <p>Upload your goods exit note <input type="file" method=$_POST id="goods-exit-note" name="goods-exit-note" value=""></p>

  <input type="submit"  value="Submit">
  <input type="reset">
</form> 

<p>If you change the input values and then click the "Reset" button, the form-data will be reset to the default values.</p>

</body>
</html>

