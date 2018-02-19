<?php

$req = $_GET["req"];



include "functions.php";

switch($req)
{
	case "company":
		create_select_list("company");
		break;
	case "country":
		create_select_list("country");
	case "item":
		$id = $_GET["id"];
		create_select_list("item", " COID= '$id' ");
		break;
}