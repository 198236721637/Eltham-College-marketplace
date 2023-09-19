<?php
// Connect to the database
$host = 'localhost';
$username = 'your-username';
$password = 'your-password';
$database = 'your-database-name';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// If the form has been submitted, insert the data into the database
if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];

  $sql = "INSERT INTO listings (title, description) VALUES ('$title', '$description')";
  if (mysqli_query($conn, $sql)) {
    echo "Listing added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
?>
<?php
// Connect to the database
$host = 'localhost';
$username = 'your-username';
$password = 'your-password';
$database = 'your-database-name';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the listings from the database
$sql = "SELECT * FROM listings";
$result = mysqli_query($conn, $sql);

// Display the listings in a loop
while ($row = mysqli_fetch_assoc($result)) {
  echo "<h2>" . $row['title'] . "</h2>";
  echo "<p>" . $row['description'] . "</p>";
}

// Close the database connection
mysqli_close($conn);
?>