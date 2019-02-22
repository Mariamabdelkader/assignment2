<?php
//including the database connection file
include_once("Class.php");
$crud = new Crud();

$query = "SELECT * FROM user ";

$result = $crud->getData($query);

?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="Add1.php">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>FirstName</td>
		<td>LastName</td>
		<td>Age</td>
		
		<td>Gender</td>
		<td>SSN</td>
		<td>Email</td>
		
		<td>Type</td>
		<td>Address</td>
		
		
		<td>Update</td>
	</tr>
	<?php 
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['FirstName']."</td>";
		echo "<td>".$res['LastName']."</td>";
		echo "<td>".$res['Age']."</td>";	
		
		
		
		echo "<td>".$res['Gender']."</td>";
		echo "<td>".$res['SSN']."</td>";
		echo "<td>".$res['Email']."</td>";	
		
		
		echo "<td>".$res['TypeUserID']."</td>";
		
		echo "<td>".$res['AddressID']."</td>";
		
		
		echo "<td><a href=\"edit.php?id=$res[ID]\">Edit</a> | <a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>