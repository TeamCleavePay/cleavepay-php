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
if(isset($_POST['billid'])) 
{ 
$name = $_POST['billname'];
$expense = $_POST['expensetype'];
$billid = $_POST['billid'];
$groupid = $_POST['groupid'];
$amount = $_POST['amount'];
$payeename = $_POST['payeename'];
$billdate = $_POST['billcreated'];

$sql = "INSERT INTO bill(billname,billid,groupid,expensetype,date,amount,payeeid)
VALUES('$name','$billid','$groupid','$expense','$billdate','$amount','$payeename')";
 
 
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>

<html>
<head><title>Bill Creation Page</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
     <input type="text" name="billname" id="name" />
	 <input type="text" name="expensetype" id="expense" />
	 <input type="text" name="billid" id="billid" />
	 <input type="text" name="groupid" id="groupid" />
	 <input type="text" name="amount" id="amount" />
	 <input type="text" name="payeename" id="payee" />
	 <input type="text" name="billcreated" id="dated" />
	 <input type="submit" name="submit" value="create bill" />
  </form>
</body>
</html>