<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
</head>
<body>
<center>
<h2>Product Discount Calculator</h2>

<!-- Form for user to input product details -->
<form action="q3.php" method="post">
    <label for="product">Product Name:</label><br>
    <input type="text" id="product" name="product" required><br><br>

    <label for="price">Original Price ($):</label><br>
    <input type="number" id="price" name="price" step="0.01" required><br><br>

    <label for="discount">Discount Percentage (%):</label><br>
    <input type="number" id="discount" name="discount" step="0.01" required><br><br>

    <input type="submit" value="Calculate Discount">
</form>


<?php

// PHP logic to handle form submission and calculate discount
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form inputs
    $product = $_POST['product'];
    $price = $_POST['price'];
    $discount_percentage = $_POST['discount'];

    // Calculate the discount and the final price
    $discount_amount = ($price * $discount_percentage) / 100;
    $discounted_price = $price - $discount_amount;

    // Output the results
    echo "<h2>Discount Calculation for: " . htmlspecialchars($product) . "</h2>";
    echo "Original Price: $" . number_format($price, 2) . "<br>";
    echo "Discount: " . number_format($discount_percentage, 2) . "%<br>";
    echo "Discount Amount: $" . number_format($discount_amount, 2) . "<br>";
    echo "Price After Discount: $" . number_format($discounted_price, 2) . "<br>";
}

?>
</center>

</body>
</html>
