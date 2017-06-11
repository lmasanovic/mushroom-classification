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
?>
<pre>
	<?php print_r($properties); ?>
	<?php print_r($values); ?>
</pre>
<?php
if (isset($properties)) {
	// for ($i=0; $i < count($properties); $i++) {
	// 	echo $properties[$i] . " = " . $values[$i] + "\n";
	// }
	include_once("get_result.php");
}
?>
