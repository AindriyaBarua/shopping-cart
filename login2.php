<?php
session_start();


$_SESSION['user']="root"; 
$_SESSION['pass']="moon";
$_SESSION['database']="mydata";
$_SESSION['con']=mysqli_connect("localhost", $_SESSION['user'],$_SESSION['pass'] , $_SESSION['database'])
or die ('Couldnt connect to server'); 
//mysqli_select_db($con,$database)
//or die('could not connect to db');


if(isset($_POST['username']) && isset($_POST['password'])){

	$username=$_POST['username'];
	$password=$_POST['password'];
	$_SESSION['username']=$_POST['username'];
echo $username;

	$sql="select * from users2 where username='".$username."' AND password=MD5('".$password."');";
echo $sql;


$result=mysqli_query($_SESSION['con'], $sql);
if(mysqli_num_rows($result)>=1)
{
	echo "You have sucessfully logged in. Hi ".$username." Enjoy this empty page :p";
	echo "<a href='shopcart.php'>     Go to the Shopping Cart     </a>";
	echo "<p> OR </p>";
	echo "<a href='updatepass.html'>Update the database</a>";

		
}
else
{
	echo "You have entered wrong creds. Please go die";
}

}


?>

