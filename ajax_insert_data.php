<?php  

$name = $_POST["name"];
$age = int($_POST["age"]);

$conn = mysqli_connect('remotemysql.com','nbBwIE9nVd','2M1KU0vefJ','nbBwIE9nVd') or die("Unsuccessfull");

$sql = "INSERT INTO login_data(name,age,gender) VALUES ('$name','$age')";

if(mysqli_query($conn,$sql))
{
	echo 1;
}

else
{
	echo 0;
}

?>
