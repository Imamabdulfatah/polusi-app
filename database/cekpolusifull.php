<?php
// Establish connection
$konek = mysqli_connect("localhost", "root", "", "polusi_app");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Fetch the latest record for each tempat from 1 to 10
$query = "SELECT * FROM tb_polusi WHERE tempat BETWEEN 1 AND 10 GROUP BY tempat ORDER BY tempat, tanggal DESC";

// Execute query
$result = mysqli_query($konek, $query);

// Check if query executed successfully
if ($result) {
    // Fetch data from the result
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['polusi'];
    }
    // Free result set
    mysqli_free_result($result);
} else {
    // Handle query error
    echo "Error executing query: " . mysqli_error($konek);
}

// Close connection
mysqli_close($konek);
?>
