<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function randomdizi($arr, $value){
    $filteredArr = array_filter($arr,function ($e){
        return $e != NULL ? $e : false;
    });

    $randomArr = array_rand($filteredArr, $value);
    
    $resultArr = array_map(function ($e) use ($filteredArr){
        return $filteredArr[$e];
    },$randomArr);

    return $resultArr;
}
echo "<pre>";
print_r(randomdizi($planets, 3));
print_r(randomdizi($planets, 2));
print_r(randomdizi($planets, 2));
print_r(randomdizi($planets, 4));
print_r(randomdizi($planets, 5));

?>