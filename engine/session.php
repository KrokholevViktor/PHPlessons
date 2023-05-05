<?php
// $_SESSION

session_start();

$_SESSION['myName'] = "Alexander";
$_SESSION['mySettings'] = ['test', 2, true];

echo serialize($_SESSION);

var_dump($_SESSION); 