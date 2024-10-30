<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydatabase";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	//echo "Connection successfull";
}
else
{
	echo "Connection fail";
}

error_reporting(0);
$phone_num=$_GET['phone'];
$sql = "DELETE FROM form WHERE phone='" . $phone_num . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>