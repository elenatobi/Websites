<html><body>
<?php
echo "<h1>PHP DATA TEST</h1>";

$servername = "mysql.webcindario.com";
$username = "*****";
$password = "*************";
$dbname = "*****";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<p>Connection succeded</p>";

echo "<h2>Recieved data from nameTable</h2>";

$name_result = mysqli_query($conn, "SELECT ID, item FROM nameTable");

if (mysqli_num_rows($name_result) > 0) {
    while($row = mysqli_fetch_assoc($name_result)) {
        echo "ID: " . $row["ID"]. ", item: " . $row["item"] . "<br>";
    }
} else {
    echo "No name results found!";
}

echo "<h2>Recieved data from relationship</h2>";

$name_result = mysqli_query($conn, "SELECT parent, child FROM relationship");

if (mysqli_num_rows($name_result) > 0) {
    while($row = mysqli_fetch_assoc($name_result)) {
        echo "parent: " . $row["parent"]. ", child: " . $row["child"] . "<br>";
    }
} else {
    echo "No relationship results found!";
}

mysqli_close($conn);

echo "<p>Connection closed!</p>";

?>
</body></html>