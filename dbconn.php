 <?php
$servername = "localhost";
$username = "dzhemile";
$password = "7777777dzhemile";
$conn = new PDO("mysql:host=$servername;dbname=cv_project", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

