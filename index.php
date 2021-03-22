<?php 

include __DIR__.'/1/Pinigine.php';
include __DIR__.'/2/Stikline.php';
include __DIR__.'/3/Grybas.php';
include __DIR__.'/3/Krepsys.php';

$obj1 = new Pinigine;
$obj1->ideti(2);
$obj1->ideti(1);
$obj1->skaiciuoti();


$obj2 = new Stikline(200);
$obj3 = new Stikline(150);
$obj4 = new Stikline(100);

$obj2->ipilti(200);
$obj3->ipilti(200);
$obj4->ipilti(150);

echo '<pre>';

var_dump($obj2);
var_dump($obj3);
var_dump($obj4);


while (Krepsys::$svoris < 500) {
    $x = new Grybas;
    if ($x->getValgomas() && !$x->getSukirmijes()) {
        Krepsys::$svoris += $x->getSvoris();
    }
    echo Krepsys::$svoris.'<br>';
}
echo $obj1->monetos();