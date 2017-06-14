<?php include("includes/header.php"); ?>

<div id="form-container" class="container">
    <h2>Mushroom properties
        <small>Select at least 3 properties and hit submit button.</small>
    </h2>
    <?php
    if (isset($_SESSION["error_msg"])) {
        $alertType = $_SESSION["error_type"] == "error" ? "danger" : "warning";
        unset($_SESSION["error_type"]);
        ?>
        <div class="alert alert-<?php echo $alertType;?> alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <strong><?php echo ucfirst($alertType);?>!</strong> <?php echo $_SESSION["error_msg"]?>
        </div>
        <?php
        unset($_SESSION["error_msg"]);
    }
    ?>
    <form action="php_scripts/get_form_data.php" method="post"></form>
</div>

<?php include("includes/footer.php"); ?>
