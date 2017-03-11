<?php
$servername="localhost";
$username="id1013148_teamcleavepay";
$password="cleavepay@nitc";
$dbname="id1013148_cleavepaydb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("not connected");
}
if(isset($_POST['grpid'])) 
{ 
$name = $_POST['grpname'];
$expense = $_POST['grpadmin'];
$billid = $_POST['grpid'];


$sql = "INSERT INTO groupTB(groupname,groupadminid,groupid)
VALUES('$name','$expense','$billid')";
 
 
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
exit;
} else {
    echo "Error: " ;
exit;
}

mysqli_close($conn);

}
?>
<html>
<head>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="text" name="grpname">
<input type="text" name="grpadmin">
<input type="text" name="grpid">
<button type="submit">hgfh</button>
</form>
</body>
</html>