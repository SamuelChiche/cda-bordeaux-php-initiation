<?php

//$variable = 'Khalid';
//
//echo $variable . " est un formateur!" . (2 + 3);


//$tableau = ['a', 'b', 'c']; // Tableau indexé
//
//
//$associatif = ['indexA' => $tableau, 'indexB' => 'b', 'indexC' => 'c'];
//
//echo "<pre>";
//
//foreach ($associatif as $key => $value) {
//    var_dump($key);
//    var_dump($value);
//}
//
//$girl = 'Amel';
//
//function getName($name) {
//    global $girl;
//    echo $girl;
//}
//
//getName('Khalid');
//
//$chaine = ' Une longue chaine de caratère-';
//
//$chaine = trim($chaine, '- ');
//
//$chaine = implode('-', $tableau);

//var_dump($chaine);
//
//$tableau = ['a', 'b', 'c']; // Tableau indexé
//
//array_push($tableau, 'd');
//$tableau[] = 'e';
//
////array_pop($tableau);
//
//$tableau = ['a' => 100, 'b' => 200, 'c' => 300];
//$tableau['d'] = 400;
//
//$personnes = [
//    1 => ['name' => 'Khalllid', 'age' => 25],
//    2 => ['name' => 'Amel', 'age' => 4],
//    3 => ['name' => 'Noam', 'age' => 1]
//];
//
///**
// * @todo Me donner le nom des personnes qui on plus de 18 ans
// * @todo Me donner la somme d'age des personnes qui ont moins de 18 ans
// */
//$adults = '';
//$sommeAgeEnfant = 0;
//
//foreach ($personnes as $personne) {
//    if ($personne['age'] > 18) {
//        $adults .= $personne['name'] . ', ';
//    } else {
//        $sommeAgeEnfant += $personne['age'];
//    }
//}
//
//$adults = trim($adults, ', ');
//
//
//echo $adults . (preg_match('/,/',  $adults) ? ' ont ' : ' a ') . " plus de 18 ans <br>";
//echo "La somme d'age des enfant est $sommeAgeEnfant";
//
//
//$cars = [
//    "peugeot" => [
//        ["make" => "5008", "year" => 2015, "doors" => 5],
//        ["make" => "3008", "year" => 2009, "doors" => 5],
//        ["make" => "108", "year" => 2015, "doors" => 3],
//        ["make" => "208", "year" => 2015, "doors" => 2],
//        ["make" => "5008", "year" => 2020, "doors" => 5],
//    ],
//    "renault" => [
//        ["make" => "Mégane", "year" => 2015, "doors" => 5],
//        ["make" => "Scénic", "year" => 2009, "doors" => 5],
//        ["make" => "Clio", "year" => 2015, "doors" => 3],
//    ]
//];
//
///**
// * @todo Je veux une chainne de caratères séparé par des | des peugeot qui ont 5 portes
// *
// * @todo Je veux les Renault d'avant 2010
// *
// * @todo Je veux rajouter une peugeot 2008 de 2022 avec 5 portes
// *
// * @todo Je veux supprimer les peugeot d'avant 2010
// */
//
//$peugeot5Doors = [];
//$renaultBefore2010 = [];
//foreach ($cars as $brand => $makes) {
//    if ($brand === 'peugeot') {
//        foreach ($makes as $car) {
//            if ($car['doors'] === 5) {
////                $peugeot5Doors[] = $car['make'];
//            }
//        }
//    }
//
//    if ($brand === 'renault') {
//        foreach ($makes as $car) {
//            if ($car['year'] < 2010) {
//                $renaultBefore2010[] = $car;
//            }
//        }
//    }
//}
//
//$car = ["make" => "2008", "year" => 2022, "doors" => 5];
//
//$cars['peugeot'][] = $car;
//
//$peugeotMakes5Doors = implode(' | ', $peugeot5Doors);
//var_dump($peugeotMakes5Doors);
////var_dump($renaultBefore2010);
////var_dump($cars);
//
//
//foreach ($cars['peugeot'] as $key => $car) {
//    if($car["year"] < 2010) {
//        unset($cars['peugeot'][$key]);
//    }
//}
////var_dump($cars);









