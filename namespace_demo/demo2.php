<!-- source: https://www.youtube.com/watch?v=zTxz_kOLIZM -->


<?php


include "fns.php";

include "sns.php";


/* qualified class name */
$object1 = new second\A;

echo "<br>";

// unqualified class name;
//$sObjectA = new A;

/* fully qualified class name FQCN */
$sObjectB = new \A;


?>

