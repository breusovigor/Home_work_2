<?php
//Task 1
$products = array(
    array('name' => 'Телевизор', 'price' => '500', 'quantity' => 1),
    array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
    array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2)
);
/**
 * @param $products get price and quantuty
 * @return array sum of all price and sum of all quantity
 */
function shoppingCart($products)
{
    $totalPrice = 0;
    $totalQuantity = 0;

    foreach ($products as $product) {
        $totalPrice += $product['price'];
        $totalQuantity += $product['quantity'];
    }
    $shoppingCart = array('price' => $totalPrice, 'quantity' => $totalQuantity);
    return  $shoppingCart;
}
$shoppingCart = shoppingCart($products);
foreach ($shoppingCart as $cart) {
    echo ($cart) . '</br>';
}

//Task 2
$a = 10;
$b = 15;
$c = -10;

function quadraticEquation ($a, $b, $c) {
    $d = ($b ** 2) - (4 * $a * $c);

    if ($d > 0){
        $x1 = ((-1 * $b) - sqrt($d)) / (2 * $a);
        $x2 = ((-1 * $b) + sqrt($d)) / (2 * $a);
        return [$x1, $x2];
    } elseif ($d == 0) {
        $x = (-1 * $b) / (2*$a);
        return $x;
    } else {
        return false;
    }
}

$resultQuadraticEquation = quadraticEquation ($a, $b, $c);
if (gettype($resultQuadraticEquation) == 'array'){
    echo $resultQuadraticEquation[0] . '</br>';
    echo $resultQuadraticEquation[1] . '</br>';
} elseif (gettype($resultQuadraticEquation) == 'integer') {
    echo $resultQuadraticEquation;
} else {
    echo 'false';
}

//Task 3
$i = 0;
$digits = array(2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95);
function deleteNegtives($digits) {
    foreach ($digits as $positiveDigits) {
        if ($positiveDigits < 0) {
            unset($positiveDigits);
        }
        return $positiveDigits;
    }

}

$digits = deleteNegtives($digits);
print_r($digits);
//foreach ($digits as $positive) {
    //echo ($positive) . '</br>';
//}
//echo $digits;
?>