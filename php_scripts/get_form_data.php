<?php
session_start();
session_unset();
$properties;
$values;
if(isset($_POST["submit"])){
	$properties = $_POST;
	unset($properties["submit"]);
	foreach ($properties as $property => $value) {
		if($value != "null") {
			$_SESSION[$property] = $value;
		}
	}
	$properties = array("class" => "null") + $properties;
	$values = array_values($properties);
	$properties = array_keys($properties);

}
if (isset($properties)) {
	include_once("get_result.php");
}
?>
