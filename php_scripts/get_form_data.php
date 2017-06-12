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
	if(array_count_values($values)["null"] < 21) {
		include_once("get_result.php");
	}
	$_SESSION["error_type"] = "low_input";
	$_SESSION["error_msg"] = "Select at least 3 properties.";
} else {
	$_SESSION["error_type"] = "error";
	$_SESSION["error_msg"] = "Something went horribly wrong.";
}
header("Location: ../index.php");
?>
