<html>
    <head>
        <title>Test MySQL</title>
    </head>
    <body>
        <?php 
            $servername = "mysql.webcindario.com";
            $username = "********";
            $password = "********";
            $dbname = "********";
            
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT id, primero, segundo, tercero, cuarto FROM net";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["id"]. " - Name: " . $row["primero"] . $row["segundo"] ."<br>";
                    echo $row["tercero"] . "<br>";
                    echo $row["cuarto"] . "<br>";
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
        ?>
    </body>
</html>