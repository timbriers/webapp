<?php
echo gethostname();
echo '<img src="https://hosting-images-pe.s3.amazonaws.com/aws-s3-bucket.png">';
echo "<br>";
$password = "globaluser";
$servername = "${mysqlip}";
$username = "globaluser";
$dbname = "employees";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT emp_no, first_name, last_name FROM employees WHERE emp_no <= 10050";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Employee number: " . $row["emp_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
