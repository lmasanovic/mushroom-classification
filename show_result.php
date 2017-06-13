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
<div class="container">

	<h1>I'm <?php echo $probability; ?>% sure this mushroom is <?php echo $edible; ?>! </h1>
	<img src="images/<?php echo $edible; ?>_mushroom.jpg" class="img-circle">

	<div>
		<a href="index.php" class="btn btn-primary btn-large "><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
	</div>
</div>


<?php include("includes/footer.php"); ?>
