<?php
session_start();
$connect = mysqli_connect("localhost", "Asharib", "9990");
$db=mysqli_select_db($connect,'Samrib');
$query = "SELECT * FROM Register ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
	<script src="jquery.tabledit.min.js"></script>
	
</head>
<body class="">
	<div class="pa3 flex center bt ">
		<a href="logout.php" class="btn w-10  fl btn-primary btn-lg active" role="button" aria-pressed="true">LOGOUT</a>
	</div>
	<div class="limiter ">
		<div class="container-table100 bg ">
			<div class="wrap-table100 w-80 ">
				<div class="table100 ver6 m-b-110">
					<table id="editable_table" data-vertable=" ver6">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">ID</th>
								<th class="column100 column2" data-column="column2">First Name</th>
								<th class="column100 column3" data-column="column3">Last Name</th>
								<th class="column100 column4" data-column="column4">Email</th>
								<th class="column100 column5" data-column="column5">Department</th>
								<th class="column100 column6" data-column="column6">CNIC</th>
								<th class="column100 column7" data-column="column7">City</th>
								<th class="column100 column8" data-column="column8">Country</th>
								<th class="column100 column9" data-column="column9">Age</th>
								<th class="column100 column10" data-column="column10">Father</th>
								<th class="column100 column11" data-column="column11">Gender</th>
								<th class="column100 column12" data-column="column12">Address</th>
							</tr>
						</thead>
						<tbody>

<?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
	  <tr class="row100">
		  <td class="column100 column1" data-column="column1">'.$row["id"].'</td>
		  <td class="column100 column2" data-column="column2">'.$row["first"].'</td>
		  <td class="column100 column3" data-column="column3">'.$row["last"].'</td>
		  <td class="column100 column4" data-column="column4">'.$row["email"].'</td>
		  <td class="column100 column5" data-column="column5">'.$row["depart"].'</td>
		  <td class="column100 column6" data-column="column6">'.$row["cnic"].'</td>
		  <td class="column100 column7" data-column="column7">'.$row["city"].'</td>
		  <td class="column100 column8" data-column="column8">'.$row["country"].'</td>
		  <td class="column100 column9" data-column="column9">'.$row["age"].'</td>
		  <td class="column100 column10" data-column="column10">'.$row["father"].'</td>
		  <td class="column100 column11" data-column="column11">'.$row["gender"].'</td>
		  <td class="column100 column12" data-column="column12">'.$row["address"].'</td>
	  </tr>
      ';
     }
     ?>	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	
	<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>
		
</body>
</html>
		
		<script>  
$(document).ready(function(){  
	$('#editable_table').Tabledit({
		url:'action.php',
		columns:{
			identifier:[0, "id"],
			editable:[[1, 'first'], [2, 'last'],[3, 'email'],[4, 'depart'],[5, 'cnic'],
			[6, 'city'],[7, 'country'],[8, 'age'],[9, 'father'],[10, 'gender'],[11, 'address']]
		},
		restoreButton:false,
		onSuccess:function(data, textStatus, jqXHR)
		{
			if(data.action == 'delete')
			{
				$('#'+data.id).remove();
			}
		}
	});
	
});  
</script>
