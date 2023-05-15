<?php
$con = new mysqli('localhost', 'root', '', 'crud');
if (!$con) {
  die(mysqli_error($con));
}
?>
<?php

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];


  $sql = "INSERT INTO crud (username,email,mobile,userpassword) VALUES('$name','$email','$mobile','$password')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // echo "Data stored Succesfully";
    header('location:user.php');
  } else {
    die(mysqli_error($con));
  }
}

$con->close();

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter Your Name"
                    required>


            </div>

            <div class="form-group my-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Your Email "
                    required>
            </div>

            <div class="form-group my-3">
                <label for="">Mobile</label>
                <input type="text" name="mobile" class="form-control" autocomplete="off"
                    placeholder="Enter Your Mobile number" required>
            </div>
            <div class="form-group my-3">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control" autocomplete="off"
                    placeholder="Enter Your Password" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="display.php">User List</a>
        </form>
    </div>
    <div>
        <!-- <?php include 'display.php' ?>  -->
        <!-- <?php include 'update.php' ?>  -->
        <!-- <?php include 'delete.php' ?>  -->

    </div>

</body>

</html>