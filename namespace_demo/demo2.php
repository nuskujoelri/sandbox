<!-- source: https://www.youtube.com/watch?v=zTxz_kOLIZM -->


<?php


include "fns.php"; // include_once
require "sns.php"; // require_once


use second\A;

/* qualified class name */
//$object1 = new second\A;
$object = new A; 


echo "<br>";


// unqualified class name;
//$sObjectA = new A;

/* FQCN: fully qualified class name */
$object = new \A;


?>

