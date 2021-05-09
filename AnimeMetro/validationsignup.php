<?php 

session_start();
header('location: login.php');

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

$q = "select * from signup where name = '$name' && password = '$password'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "This is a duplicate please try again";
} 
else{
	$qy = "insert into signup(name, password, email) values('$name', '$password', '$email')";
	mysqli_query($con, $qy);
}

?>