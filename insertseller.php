<?php
        
    $conn = mysqli_connect("localhost", "root", "", "farmer");
    
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    
    // Taking all 5 values from the form data(input)
    $name =  $_REQUEST['name'];
    $phoneNo = $_REQUEST['contact'];
    $cropname =  $_REQUEST['cropname'];
    $cropquantity = $_REQUEST['quantity'];
    $MSP = $_REQUEST['sellingPrice'];
    $address = $_REQUEST['address'];
    
    // Performing insert query execution
    // here our table name is college
    $sql = " INSERT INTO sellers (name, phoneNo, cropname, cropquantity, MSP, address) VALUES ('$name',
            '$phoneNo','$cropname','$cropquantity','$MSP','$address')";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("$name'\n
        '$phoneNo'\n'$cropname'\n'$cropquantity'\n'$address'\n'$MSP");//edit here to change how send data is arranged
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
        
        
?>