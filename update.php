
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

       
        </script>
    <style>
        .myupdate
        {
            margin-left:50px;
            padding:10px;
            text-align:center;
            border-radius:5px;
            background:#4477CE;
            color:white;
        }
    </style>
      
</head>



<body>
    <form action="" method="post">
        <h3 class="mt-5 text-center ff-arial fs-1">Update your query form</h3>

        <div class="box">
            <div class="mb-3  ms-5">
                <label for="exampleFormControlInput1" class="form-label mt-2 form-label-color:red">Full Name</label>
                <input type="text" name="fname" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['n']?>">
            </div>

            <div class="mb-3  ms-5">
                <label for="exampleFormControlInput1" class="form-label mt-2 ">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFor@mControlInput2" value="<?php echo $_GET['e'];?>">
            </div>

            <div class="mb-3  ms-5">
                <label for="exampleFormControlInput1" class="form-label mt-3 ">Phone</label>
                <input type="number" name="phone" class="form-control" id="exampleFormControlInput3" value="<?php echo $_GET['p'];?>">
            </div>

            <input type="submit" value="update" name="submit" class="myupdate">
            
            
         

        </div>








    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>



<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="mydatabase";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 if($conn)
 {
    // echo "Connection successful";
 }
 else
 {
     echo "connection fail";
 }
 error_reporting(0);
//updation to database

//getting value of id
$id=$_GET['i'];

if($_POST['submit'])
{
 $name=$_POST['fname'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $query="update form set name='$name',email='$email',phone='$phone' where id='$id'";
 $data=mysqli_query($conn,$query);
 if($data)
 {
	 echo "<font color='green'>Record updated successfully";
 }
 else
 {
	 echo "Record not updated";
 }
}
else
{
echo "<font color='blue'>Click on update buttone to save the changes";}
echo "<br>";
echo "<a href='fetch.php'>Check updated table</a>";
mysqli_close($conn);
?> 
</body>

</html>