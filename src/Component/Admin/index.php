<?php
session_start();
$connect = mysqli_connect("localhost", "Asharib", "9990");
$db=mysqli_select_db($connect,'Samrib');
$query = "SELECT * FROM Register ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="admin.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
	<script src="jquery.tabledit.min.js"></script>
	
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
	
</head>
<body >

    <div id="particles-js" class="h-100 w-100" ></div>

	<div class="position pa6 w-100">
		<a href="logout.php" class="btn  fl btn-primary btn-lg active" role="button" aria-pressed="true">LOGOUT</a>
		
  <div class="container w-80 center">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive" >  <br />  
    <table id="editable_table" class="table odd table-bordered table-striped">
     <thead>
      <tr class="font">
								<th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Department</th>
								<th>CNIC</th>
								<th>City</th>
								<th>Country</th>
								<th>Age</th>
								<th>Father</th>
								<th>Gender</th>
								<th>Address</th>
							</tr>
						</thead>
						<tbody>

<?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
	  <tr>
		  <td>'.$row["id"].'</td>
		  <td>'.$row["first"].'</td>
		  <td>'.$row["last"].'</td>
		  <td>'.$row["email"].'</td>
		  <td>'.$row["depart"].'</td>
		  <td>'.$row["cnic"].'</td>
		  <td>'.$row["city"].'</td>
		  <td>'.$row["country"].'</td>
		  <td>'.$row["age"].'</td>
		  <td>'.$row["father"].'</td>
		  <td>'.$row["gender"].'</td>
		  <td>'.$row["address"].'</td>
	  </tr>
      ';
     }
     ?>	
	</tbody>
	</table>
   </div>  
  </div> 

<script type="text/javascript" src="../Particles/particles.min.js"></script>
<script type="text/javascript" src="../Particles/app.js"></script>
		</div>
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
