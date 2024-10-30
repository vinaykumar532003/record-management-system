<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
     <style>
       body{
    background-image: url("background.jpg");
    background-size: cover;
   }
  
    .link-button {
       
        text-decoration: none;
        border:1px solid black;
        background: #4477CE;
        color :white;
        padding:5px;
        
        
    }

    .link-button1
    {
      text-decoration: none;
        border:1px solid black;
        background: #C70039;
        color :white;
        margin-left:5px;
        padding:5px;
    }
  
   
   </style>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="mydatabase";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	//echo "Connection successful";
}
else
{
	echo "connection fail";
}
error_reporting(0);

$query="select *from form";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	?>

    <table class="table text-center table-success w-75 ">
    
          <tr >
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Operation </th>
           
          </tr>
      
       
	<?php
	
	while($result=mysqli_fetch_assoc($data))
	{

		echo"<tr>
    <td>".$result['id']."</td>
		<td>".$result['name']."</td>
		<td>".$result['email']."</td>
		<td>".$result['phone']."</td>

    <td>
    
    <a href='update.php?i=$result[id]&n=$result[name]&e=$result[email]&p=$result[phone]' class='link-button'>Update</a>
    <a href='delete-process.php?phone=$result[phone]' class='link-button1'>Delete</a>

    </td>
  
	        </tr>";
	}
}
else
{
	echo "No record found";
}
mysqli_close($conn);
?>
   

       
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>