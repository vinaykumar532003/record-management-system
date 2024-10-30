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
//insertion to the database
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $name=$_POST['fname'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
 
   if($name!="" && $email!=" " &&  $phone!="")
{
	$query="insert into form(name,email,phone) values('$name','$email', '$phone')";
	$data=mysqli_query($conn,$query);
	if($data)
	{
	echo "data inserted successfully!!";
 	}
	}
	else
	{
		echo"All fields are required";
	}
	
}
mysqli_close($conn);
  ?>