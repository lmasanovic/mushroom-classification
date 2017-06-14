<?php include("includes/header.php"); ?>
<?php
$probability;
$edible;
if (isset($_SESSION["class"]) && isset($_SESSION["probability"])) {
	$probability = $_SESSION["probability"];
	if($_SESSION["class"] == "e") {
		$probability = 1 - $probability;
		$edible = "edible";
	} else {
		$edible = "poisonus";
	}
	$probability *= 100;
} else {
	header("Location: index.php");
}
?>
<div id="resultContainer" class="container">
		<h2>Results:
			<small>I'm <?php echo $probability; ?>% sure this mushroom is <?php echo $edible; ?>! </small>
		</h2>
		<img src="images/<?php echo $edible; ?>_mushroom.jpg" class="img-rounded">

	<div>
		<a id="backButton" href="index.php" class="btn"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
	</div>
</div>

<?php include("includes/footer.php"); ?>
