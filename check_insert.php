<?php 
require_once("db.php");
if (isset($_POST['name'],$_POST["description"])) {
	$name=mysqli_real_escape_string($conn,$_POST["name"]);
	$description=mysqli_real_escape_string($conn,$_POST["description"]);
	$sql="INSERT INTO `products`(`product_name`, `description`) VALUES ('$name','$description')";
	if ($conn->query($sql) === True) {
		echo "succes";
		}
	else{
		echo "error". $conn->error;
		}
}

?>