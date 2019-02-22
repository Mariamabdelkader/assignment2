<?php
// including the database connection file
include_once("class.php");

$crud = new Crud();

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name = $_POST['FirstName'];
	$Lname = $_POST['LastName'];
	$age = $_POST['Age'];
	$Gen = $_POST['Gender'];
	$ssn = $_POST['SSN'];
	$mail =$_POST['Email'];
	$type = $_POST['TypeUserID'];
	$Add = $_POST['AddressID'];
	
	
	
	

		
		$result = $crud->execute("	UPDATE `user` SET `FirstName`='$name',`LastName`='$Lname',`Age`='$age',`Gender`='$Gen',`SSN`='$ssn',`Email`='$mail',`TypeUserID`='$type'
		,`AddressID`='$Add'  WHERE ID=$id");
		
	
		header("Location: index1.php");
	
}
?>