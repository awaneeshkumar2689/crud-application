<?php 
include 'connect.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">

</head>
<body>
    <div class="conatainer"><button class="btn btn-primary my-5 text-light" ><a href="user.php" class="text-light">Add user </a></button><table class="table">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Mobile</th>
    
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql="Select * from `crud`";
    $result=mysqli_query($con,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];
echo' <tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$mobile.'</td>
<td>'.$password.'</td>
<td>
<button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update </a></button>
<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete </a></button>
</td>
</tr>';   
}
}
?>
</tbody>
</table>
</div>
</body>
</html>

<!--
    /* $row=mysqli_fetch_assoc($result);
    echo $row['name'];
    $row=mysqli_fetch_assoc($result);
    echo $row['name'];*/

    
    ?>
-->
   <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>-->
 