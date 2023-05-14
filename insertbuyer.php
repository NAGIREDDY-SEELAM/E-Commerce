<?php
include("conn.php");

$conn = mysqli_connect("localhost:3306", "root", "", "farmer");
            
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}





$name =  $_REQUEST['name'];
$phoneNo = $_REQUEST['contact'];
$cropname =  $_REQUEST['cropname'];
$cropquantity = $_REQUEST['quantity'];
$mbp = $_REQUEST['buyingPrice'];
$address = $_REQUEST['address'];
// Performing insert query execution
$sql = " INSERT INTO buyer (name, phoneNo, cropname, cropquantity, mbp, address) VALUES ('$name',
'$phoneNo','$cropname','$cropquantity','$mbp','$address')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

        echo nl2br("$name'\n
        '$phoneNo'\n'$cropname'\n'$cropquantity'\n'$mbp'\n'$address");//edit here to change how send data is arranged
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>