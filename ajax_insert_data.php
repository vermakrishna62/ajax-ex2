<?php  

$name = $_POST["name"];
$age = int($_POST["age"]);

$conn = mysqli_connect('localhost','root','','login_record_system') or die("Unsuccessfull");

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