<?php
$tombBe=array("B", "B");
$tombKi=array("","","","");
$Betu="A";
$indexMax=count($tombBe);
for ($i=0; $i <= $indexMax; $i++) 
{ 
    $tombKi[$i]=$tombBe[$i].$Betu;
    $tombKi[$i]=$tombKi[$i].$tombKi[$i];
}
print_r($tombBe); print "<br>";
print_r($tombKi); print "<br>";





