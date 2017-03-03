<!DOCTYPE html>
<html>
    <head>
        <title>php table</title>
     </head>
     <body>
<p>
<?php
$firstname1 ="chicomzee";
$surname1 ="felix";

$firstname2 ="collins";
$surname2 ="christopher";

$firstname3 ="nichol";
$surname3="peters";

$firstname4 ="lois";
$surname4="uzor";

$firstname5 ="stephnie";
$surname5="paul";

echo"<table border=1>";
echo "<tr><td>firstname</td><td>surname</td></tr>";
echo "<tr><td>".$firstname1."</td><td>".$surname1."</td></tr>\r\n";
echo "<tr><td>".$firstname2."</td><td>".$surname2."</td></tr>\r\n";
echo "<tr><td>".$firstname3."</td><td>".$surname3."</td></tr>\r\n";
echo "(tr><td>".$firstname4."</td><td>".$surname4."</td></tr>\r\n";
echo "<tr><td>".$firstname5."</td><td>".$surname5."</td></tr>\r\n";
echo "</table>";
?>
    <?php
$myArray = array("spec", "mug", "sussage roll"); // declares the array

foreach ($myArray as $x) {
    print "<p>$x</p>";         }

echo $myArray[0]."<br>";// outputs "spec"

$myArray[1] = "hug"; // modifies position 1 (mug)

echo $myArray[1]."<br>";// outputs "mug"

unset($myArray[2]); // removes the array in position 2

?>

<?php

for ($a = 1; $a < 10; $a=$a+1)
{        echo "<p>Hello!</p>";       }
?>
</p>
     </body>
</html>
