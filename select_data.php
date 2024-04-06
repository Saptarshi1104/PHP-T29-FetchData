<?php
// Connecting to Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsap2";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if unsuccessful connection
if(!$conn){
    die("Sorry, we failed to connect: " . mysqli_connect_error() . "<br>");
}
else{
    echo "Connection was successful <br>";
}

// SQL Query to be executed
$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$number_rows = mysqli_num_rows($result);
echo $number_rows . "<br>";

// Display the rows returned by SQL Query
// if($number_rows > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row) . "<br>"; // Note this mysqli_fetch_assoc() function prints only one row at once until all rows are printed, finally it prints "NULL"
// }

// Better way to fetch using While Loop
// while($row = mysqli_fetch_assoc($result)){
//     echo var_dump($row) . "<br>";
// }

// Alternate way without using var_dump() function
while($row = mysqli_fetch_assoc($result)){
    echo $row['sno'] . ". Hello " . $row['name'] . " Welcome to " . $row['dest'] . "<br>";
}
?>