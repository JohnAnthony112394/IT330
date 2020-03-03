<html>
	<body>
	
		<?php
			$servername = "it330server1.mysql.database.azure.com";
			$username = "JohnAnthony@it330server1";
			$password = "Jo2hna3nthony";
			$dbname = "mysampledb";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT id, name, count from inventory";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
				echo "id: " . $row["id"]. " - Product: " . $row["name"]. "  -Count:" . $row["count"]. "<br>";
			    }
			} else {
			    echo "0 results";
			}
			$conn->close();
		?>
	
	</body>
</html>
