<?php
// Establish connection
$konek = mysqli_connect("localhost", "root", "", "polusi_app");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Fetch the latest record for tempat 2
$polusi1 = "SELECT * FROM tb_polusi WHERE tempat = 1 ORDER BY tanggal DESC LIMIT 1";


// Execute query
$result1 = mysqli_query($konek, $polusi1);


// Check if query executed successfully
if ($result1 ) {
    // Fetch data from the result
    $row1 = mysqli_fetch_assoc($result1);
    

    // Output the data (example)
    echo $row1['polusi'];
   
    // Free result set
    mysqli_free_result($result1);
    
} else {
    // Handle query error
    echo "Error executing query: " . mysqli_error($konek);
}



var_dump($row1);


// Close connection
mysqli_close($konek);
?>
