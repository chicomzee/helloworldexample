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
$name1 ="spec";
$name2 ="mug";
$name3 ="sussage roll";

if($name1=="spec"){
    print "you must be over 16\r\n";
    $cal1=8*9;
    echo "<br>".$cal1."<p>";
}
else{
    print"go to th next option <p> \r\n";
}

if($name2=="mug"){
    print "you must be over 18 <p> \r\n";
}
else{
    print"go to th next option\r\n";
}

if($name3=="sussage roll"){
   print "you must be over 21 <p>\r\n";
}
else{
    print "thank you\r\n ";
}
print("the end");
?>
</p>
     </body>
</html>
