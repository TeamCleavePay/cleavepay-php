<?php
$servername = "localhost";
$username = "id1013148_teamcleavepay";
$password = "cleavepay@nitc";
$db="id1013148_cleavepaydb";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

if(isset($_POST["username"]))
{
$user_name = $_POST["username"];
$mysql_qry = "select * from user where username = '$user_name';";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
echo "success";
exit;
}
else {
echo "invalid login";
exit;
}
}
?> 

<html>
<head>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="text" name="username">
<button type="submit">hgfh</button>
</form>
</body>
</html>