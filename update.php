<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
if (isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];  
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
$result=mysqli_query($con,$sql);

if($result){
   echo "updated sucessfully";
    echo "data inserted successfully";
header('location:display.php'); 
  }
else{
    die(mysqli_error($con));
}
}  
?>




<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">

    <title>crud operations</title>
  </head>
  <body>
 <div class="container my-5">
 <form method="post">
  
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter your Name"  name="name" autocomplete="off" value=<?php echo"$name";?>>
  </div> <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="enter your Email"  name="email" autocomplete="off"value=<?php echo"$email"; ?>>
   
  </div> <div class="mb-3">
    <label>Mobile No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter your Mobile"  name="mobile" autocomplete="off"value=<?php echo"$mobile"; ?>>
   
  </div>
   <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="enter your password"  name="password" autocomplete="off"value=<?php echo"$password"; ?>>
   
  </div>  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  
  </body>
</html>