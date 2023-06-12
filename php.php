<?php
//opdracht 1
$tijd = date("h");

if ($tijd < 12) {
    echo "Goedemorgen <br>";
}
else if ($tijd > 12 && $tijd < 18) {
    echo "Goedemiddag <br>";
}

else {
    echo "Goedeavond <br>";
}


//opdracht 2

$getal1 = 2;
$getal2 = 6;

function gemiddeld($getal1,$getal2) {
   $getal3 = ($getal1 + $getal2) / 2;

echo "De gemiddeld van $getal1 en $getal2 is $getal3 <br>";
}

gemiddeld($getal1,$getal2);

//opdracht 3

function dageover() {




     $date1=date_create("now");
    
     $date2=date_create("2023-12-30");
    
     $diff=date_diff($date1, $date2);
    
    echo $diff->format("%R%a days");
    
    }


echo dageover();

echo "<br>";

//opdracht 4

$zin = ["zin1","zin2","zin3","zin4"];

function cringe($zin) {
    $totaal = 0;
foreach ($zin as $zin) {
    $totaal += strlen($zin); 
}

return $totaal;


}


echo cringe($zin);

?>


