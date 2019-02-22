<?php

include_once("class.php");
$crud = new Crud();
//getting id of the data from url
$id = $_GET['id'];

$result = $crud->delete($id, 'user');
if ($result) {
	
	header("Location:index1.php");
}
?>