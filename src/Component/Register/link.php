<?php

$con=mysqli_connect('localhost','Asharib','9990');

if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}

$db=mysqli_select_db($con,'Samrib');

if(isset($_POST['submit'])){
    $first=$_POST['first'];
    $last=$_POST['last'];
    $email=$_POST['email'];
    $depart=$_POST['depart'];
    $cnic=$_POST['cnic'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $age=$_POST['age'];
    $father=$_POST['father'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];

    $sql="insert into Register( first, last, email, depart, cnic, city, country, age, father, gender, address)  values('$first','$last','$email','$depart','$cnic','$city','$country','$age','$father','$gender','$address')";

    $query = mysqli_query($con,$sql);

    if($query){
        echo "INSERTED";        
        header('location:../../index.php');
    }else{
        echo "Error";
    }
}
?>