<html>
<head>
	<title>Add</title>
	
</head>

<body>

	<br/><br/>
	<div id="msg"></div>
	<!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
	<form action="" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>FirstName</td>
				<td><input type="text" name="FirstName"></td>
			</tr>
			<tr> 
				<td>LastName</td>
				<td><input type="text" name="LastName"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="Age"></td>
			</tr>
			
			
			
			<tr> 
				<td>Gender</td>
				<td><input type="text" name="Gender"></td>
			</tr>
			<tr> 
				<td>SSN</td>
				<td><input type="text" name="SSN"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="Email"></td>
			</tr>
			
			
			<tr>
			<td>Type:</td>
			<td><?php
		$con = new mysqli("localhost", "root", "","project");
		$sql="select * from types ";
	    $result=mysqli_query($con,$sql);
		
		?>
		<select class="text74"  name="TypeUserID">
		<?php 
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['TypeID'];
		$name=$rows['Name'];
		echo"<option value='$ID'>$ID.$name</option>";
		}
		?>
		</select></td>
		</tr>
		
			<tr> 
				<td>Address</td>
				<td><input type="text" name="AddressID"></td>
			</tr>
		
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	
	<?php 

if(isset($_POST['Submit'])) {	

include_once("Class.php");

$user = new Crud();
$u=new Crud();



$user->FirstName = $_POST['FirstName'];
$user->LastName =$_POST['LastName'];
$user->Age =$_POST['Age'];
	$user->Gender = $_POST['Gender'];
$user->SSN = $_POST['SSN'];
	$user->Email =$_POST['Email'];
	$user->TypeUserID = $_POST['TypeUserID'];
	$user->AddressID =$_POST['AddressID'];
	
	$u->insert($user);
	


}
	



?>
</body>
</html>