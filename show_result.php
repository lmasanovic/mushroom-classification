<?php
session_start();
if (isset($_SESSION["class"]) && isset($_SESSION["probability"])) {
	$edible = $_SESSION["class"] == "e" ? "edible" : "poisonus";
	$probability = $_SESSION["probability"];
} else {
	header("Location: index.php");
}

echo "<h1>Mushroom is " . $edible . ".</h1>";
echo "<img src=images/" . $edible . "_mushroom.jpg />";
?>
