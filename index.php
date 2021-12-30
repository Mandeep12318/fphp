<DOCTYPE html>
    <html>
        <head><title></title>
        <body>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, age FROM ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["age"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

        