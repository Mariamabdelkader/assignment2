<?php
// including the database connection file
include_once("Class.php");
$crud = new Crud();
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM user WHERE id=$id");
foreach ($result as $res) {
	$name = $res['FirstName'];
	$age = $res['LastName'];
	$email = $res['Age'];
		
		$Gen=$res['Gender'];
		$ssn=$res['SSN'];
		$mail=$res['Email'];	
		
		
		$type=$res['TypeUserID'];
		$Add=$res['AddressID'];
		
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index1.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="FirstName" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="LastName" value="<?php echo $age;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="Age" value="<?php echo $email;?>"></td>
			</tr>
			
			<tr> 
				<td>Gender</td>
				<td><input type="text" name="Gender" value="<?php echo $Gen;?>"></td>
			</tr>
			
			
			
			<tr> 
				<td>SSN</td>
				<td><input type="text" name="SSN" value="<?php echo $ssn;?>"></td>
			</tr>
			
			
			<tr> 
				<td>Email</td>
				<td><input type="text" name="Email" value="<?php echo $mail;?>"></td>
			</tr>
			
			
			<tr> 
				<td>Type</td>
				<td><input type="text" name="TypeUserID" value="<?php echo $type;?>"></td>
			</tr>
			
			
			<tr> 
				<td>Address</td>
				<td><input type="text" name="AddressID" value="<?php echo $Add;?>"></td>
			</tr>
			
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	
	
	<?php 

if(isset($_POST['Submit'])) {	

include_once("Class.php");

$us = new Crud();
$update=new Crud();



$us->FirstName = $_POST['FirstName'];
$us->LastName =$_POST['LastName'];
$us->Age =$_POST['Age'];
	$us->Gender = $_POST['Gender'];
$us->SSN = $_POST['SSN'];
	$us->Email =$_POST['Email'];
	$us->TypeUserID = $_POST['TypeUserID'];
	$us->AddressID =$_POST['AddressID'];
	
	$update->Edit($us);
	


}
	



?>
</body>
</html>