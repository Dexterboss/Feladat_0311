<?php
$tomb = array(5, 12, 3, 9, 1, 7);
$indexMax = count($tomb) - 1;

print_r($tomb);
echo "<br>";

$i = 0;
while ($i <= $indexMax && !($tomb[$i] >= 2 && $tomb[$i] <= 8)) {
    echo "<br>";
    print("Aktuális elem: " . $tomb[$i]);
    echo "<br>";
    print("Nem felel meg a feltételnek");
    echo "<br>";
    $i++;
}

echo "<br>";
print("Kiléptem a ciklusból");
echo "<br>";
print("Utolsó index: $i");
echo "<br>";

if ($i < ($indexMax + 1)) {
    echo "<br>";
    print("Van benne ilyen elem!");
} else {
    echo "<br>";
    print("Nincs benne ilyen elem, szomorú :(");
}
?>
