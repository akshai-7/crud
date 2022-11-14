<?php
$con = new mysqli('localhost','root','','crud');
if(!$con){
    die(mysqli_error($con));
}


if(isset($_GET['deleteid'])){
     $id = $_GET['deleteid'];

$sql = "DELETE FROM `crud` WHERE id = $id ";
$result=mysqli_query($con,$sql);
if ($result) { 
//   echo "Record deleted successfully";
  header('location:display.php');
} else {
  echo "Error deleting record: " . mysqli_error($con);
}
}

?>