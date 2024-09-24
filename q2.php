<!DOCTYPE html>
<html>
<head>
    <title>Student CGPA Status</title>
</head>
<body>

<form method="post">
    Name: <input type="text" name="name"><br>
    CGPA: <input type="number" step="0.1" name="cgpa"><br>
    Status: <input type="text" name="status"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    // Getting user input
    $name = $_POST['name'];
    $cgpa = $_POST['cgpa'];
    $status = $_POST['status'];

    // Display the result
    echo $name . " ---- CGPA is: " . $cgpa . " and their status is " . $status . "<br>";
}
?>

</body>
</html>
