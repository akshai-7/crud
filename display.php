<?php
$con = new mysqli('localhost', 'root', '', 'crud');
if (!$con) {
  die(mysqli_error($con));
}
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>crud ope</title>
</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a> </button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Password</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = " SELECT * FROM crud ";
        $result = mysqli_query($con, $sql);
        if ($result) {
          $id = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $id++;
            $id = $row['id'];
            $name = $row['username'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['userpassword'];
            echo ' <tr><th scopr="row">' . $id . '</th>
    <td>' . $name . '</td>
    <td>' . $email . '</td>
    <td>' . $mobile . '</td>
    <td>' . $password . '</td>
    <td> 
    <button class="btn btn-primary"> <a href="update.php? updateid=' . $id . '" class="text-light ">Update</a></button>
    <button class="btn btn-danger"> <a href="Delete.php? deleteid=' . $id . '">Delete</a></a></button>
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