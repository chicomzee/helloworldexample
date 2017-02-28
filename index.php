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
echo "<tr><td>".$firstname1."</td><td>".$surname1."</td></tr>";
echo "<tr><td>".$firstname2."</td><td>".$surname2."</td></tr>";
echo "<tr><td>".$firstname3."</td><td>".$surname3."</td></tr>";
echo "<tr><td>".$firstname4."</td><td>".$surname4."</td></tr>";
echo "<tr><td>".$firstname5."</td><td>".$surname5."</td></tr>";
echo "</table>";

?>
</p>
     </body>
</html>
