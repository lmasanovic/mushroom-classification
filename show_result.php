<?php
session_start();
echo $_SESSION["class"] . " " . $_SESSION["probability"];
session_unset();
?>
