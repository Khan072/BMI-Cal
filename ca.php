<?php

$PlatformA = ["ProductA", "ProductB", "ProductC"];
$PlatformB = ["ProductB", "ProductC", "ProductD"];
$PlatformC = ["ProductC", "ProductB", "ProductE"];
$commonProducts = array_intersect($PlatformA, $PlatformB, $PlatformC);
$reversedProducts = array_reverse($commonProducts);
foreach ($reversedProducts as $index => $product) {
    echo "[" . ($index + 1) . "] => " . $product . "<br>";
}
?>