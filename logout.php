<?php


session_start();
session_destroy();
header('Location: logout1.php');
exit;
?> 