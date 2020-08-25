<?php
session_start();

$con=mysqli_connect('localhost','Asharib','9990');

if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}

$db=mysqli_select_db($con,'Samrib');

if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $sql="select * from AdminTable where user ='$user' and pass ='$pass' ";

    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
        if($row == 1){
            echo "login successful";
            $_SESSION['user'] = $user;
            header('location:../Admin/index.php');
        }else{
            echo "Login Failed";
        }
}

?>