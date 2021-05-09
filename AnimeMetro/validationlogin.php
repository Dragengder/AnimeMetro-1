<?php 

session_start();

$con = mysqli_connect('localhost', 'root');

if($con){
	echo "connection successful";
}
else {
	echo "connection failed";
}

mysqli_select_db($con , 'AnimeMetro');

$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$q = "select * from signup where name = '$name' && password = '$password' && email = '$email'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location: index.php');
} 
else{
	header('location: login.php');
}

?>