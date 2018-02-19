<?php
include "../connection.php";
function create_select_list($name, $where="1=1")
{
	global $con;
	switch($name)
	{
		case "company":
			$q =  "SELECT COID as id, Name as name FROM company WHERE $where";
			break;
		case "country":
			$q = "SELECT CID as id, COUNTRY_NAME as name FROM country WHERE $where";
			break;
		case "item":
			$q = "SELECT IID as id, item_name as name from item WHERE $where";
			break;
	}
	
	$query = mysqli_query($con, $q);
	
	if($query)
	{
		while($row = mysqli_fetch_array($query))
		{
			echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
		}
	}
	
}




