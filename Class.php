<?php
include_once 'Conn.php';
class Crud extends Conn
{
	public $id ;

public $FirstName ;
public $LastName ;
public $Age ;
public $Gender ;
public $SSN ;
public $Email;
	public $TypeUserID ;
public $AddressID;


	public function getData($query)
	{		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
		
	
	public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->connection->query($query);
	
		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}
	
		


	
	
	 function  insert($MyObj)
	{
		$con= mysqli_connect('localhost', 'root', '','project');

		$result ="INSERT INTO `user`( `FirstName`, `LastName`, `Age`, `Gender`, `SSN`, `Email`, `TypeUserID`, `AddressID`)
		VALUES ('$MyObj->FirstName' , '$MyObj->LastName' ,
		'$MyObj->Age' ,'$MyObj->Gender' ,'$MyObj->SSN' ,'$MyObj->Email' ,'$MyObj->TypeUserID' ,'1') ";
        mysqli_query($con,$result);
 


	}
	
	
	
	
	 function  Edit($MyObj2)
	{
		$con= mysqli_connect('localhost', 'root', '','project');

		$result1 ="UPDATE  `user` SET (FirstName='$MyObj2->FirstName',LastName='$MyObj2->LastName',Age='$MyObj2->Age',Gender='$MyObj2->Gender',
		SSN='$MyObj2->SSN',Email='$MyObj2->Email',TypeUserID='$MyObj2->TypeUserID'
		,AddressID='1'  WHERE ID='$MyObj2->id')";
		
        mysqli_query($con,$result1);
 


	}
	
}
?>