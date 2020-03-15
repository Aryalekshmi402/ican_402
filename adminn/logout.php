<?php
session_start();
session_destroy();
header("location:/ican/index.php");
?>