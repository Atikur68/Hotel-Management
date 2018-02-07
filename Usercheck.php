<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("hotel", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$email = $_POST['email'];
$username = $_POST['name'];
if($email=='admin' && $username=='admin')
{
    header("location:dashboard.php");
}
$sql=mysql_query("select * from booking where email ='".$_POST['email']."' and name='".$_POST['name']."'");
while($row = mysql_fetch_array($sql))
{
$useremail = $row['email'];
$name = $row['name'];

if($email==$useremail && $name==$username){
	echo'<script> window.location="index.php"; </script> ';
    exit;

}}
if($username==''||$username==null||$email=''||$email=null)
	echo'<script> window.location="booking.php"; </script> ';
    exit;


}

mysql_close($connection); // Closing Connection with Server
?>