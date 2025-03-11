<?php
$tomb=array(3, 1, 6, 4, 11); 
$indexMax=count(value: $tomb)-1;
print_r($tomb); 

$i=0;
while (($i<=$indexMax) && !(($tomb[$i]<5) && ($tomb[$i]<=9)))
{
    echo"<br>";
    print(!(($tomb[$i]<5)&&($tomb[$i]<=9)));
    echo"<br>";
    print($i);
    $i++;
}
echo"<br>";
print("Kinn vagyok az iterációbol");
echo"<br>";
print("$i");
echo"<br>";
if ($i<($indexMax+1))
{
    echo"<br>";
    print("Van benne ilyen elem");
}
else
{
    echo"<br>";
    print("Nincs benne ilyen elem, biggest L ever");
}
echo"<br>";
print($i);
?>