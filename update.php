<?php

$con = new mysqli('localhost', 'root', '', 'crud');
if (!$con) {
  die(mysqli_error($con));
}

$id = $_GET['updateid'];

$sql = "SELECT * FROM `crud` WHERE id = $id ";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);
$name = $row['username'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['userpassword'];


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "UPDATE  crud set id  = $id,username='$name',email='$email',mobile='$mobile',userpassword=$password WHERE id = $id ";

  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Updated Succesfully";
    header('location:user.php');
  } else {
    die(mysqli_error($con));
  }
}

$con->close();



?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group my-3">
        <label for="">Your Name</label>
        <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter Your Name " value=<?php echo $name; ?>>
      </div>

      <div class="form-group my-3">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter  Your Email " value=<?php echo $email; ?>>
      </div>

      <div class="form-group my-3">
        <label for="">Mobile</label>
        <input type="text" name="mobile" class="form-control" autocomplete="off" placeholder="Enter  Your Mobile number" value=<?php echo $mobile; ?>>
      </div>
      <div class="form-group my-3">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control" autocomplete="off" placeholder="Enter Your Password" value=<?php echo $password; ?>>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
  </div>

</body>

</html>