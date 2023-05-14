<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $name = $_POST["name"];
    $contact = $_POST["Contact"];
    $crop_name = $_POST["crop name"];
    $quantity = $_POST["Quantity"];
    $selling_price = $_POST["selling Price"];
    $address = $_POST["Address"];

    // Validate form data (optional)
    // ...

    // Save form data to database (example using MySQLi)
    $conn = mysqli_connect("localhost", "username", "password", "database_name");
    $sql = "INSERT INTO seller_data (name, contact, crop_name, quantity, selling_price, address) VALUES ('$name', '$contact', '$crop_name', '$quantity', '$selling_price', '$address')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    // Redirect user to success page or show success message
    header("Location: success.php");
    exit();
}
?>
