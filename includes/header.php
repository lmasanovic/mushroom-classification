<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mushroom Classficator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
session_start();
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
