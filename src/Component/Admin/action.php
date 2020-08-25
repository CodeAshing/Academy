<?php  
//action.php
$connect = mysqli_connect("localhost", "Asharib", "9990");
$db=mysqli_select_db($connect,'Samrib');

$input = filter_input_array(INPUT_POST);

$first = mysqli_real_escape_string($connect, $input["first"]);
$last = mysqli_real_escape_string($connect, $input["last"]);
$email = mysqli_real_escape_string($connect, $input["email"]);
$depart = mysqli_real_escape_string($connect, $input["depart"]);
$cnic = mysqli_real_escape_string($connect, $input["cnic"]);
$city = mysqli_real_escape_string($connect, $input["city"]);
$country = mysqli_real_escape_string($connect, $input["country"]);
$age = mysqli_real_escape_string($connect, $input["age"]);
$father = mysqli_real_escape_string($connect, $input["father"]);
$gender = mysqli_real_escape_string($connect, $input["gender"]);
$address = mysqli_real_escape_string($connect, $input["address"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE Register 
 SET
 first = '".$first."', 
 last = '".$last."' , 
 email = '".$email."' , 
 depart = '".$depart."' , 
 cnic = '".$cnic."' , 
 city = '".$city."' , 
 country = '".$country."' , 
 age = '".$age."' , 
 father = '".$father."' , 
 gender = '".$gender."' , 
 address = '".$address."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM Register 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>