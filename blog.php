<?php
$servername = "localhost";
$username = "novenia";
$password = "";
$dbname = "blog_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, synopsis, image_url FROM blog_posts";
$result = $conn->query($sql);

$blog_posts = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $blog_posts[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
