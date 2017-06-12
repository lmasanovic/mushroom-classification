<?php
$properties;
$values;
if(isset($_POST["submit"])){
	$properties = $_POST;
	unset($properties["submit"]);
	$properties = array("class" => "null") + $properties;
	$values = array_values($properties);
	$properties = array_keys($properties);

}
if (isset($properties)) {
	include_once("get_result.php");
}
?>
