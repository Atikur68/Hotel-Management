<?php
session_start();
?>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("hotel", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address=$_POST['address'];
$checkin = $_POST['in'];
$checkout = $_POST['out'];
$member=$_POST['member'];
$required = $_POST['required'];
$hotelname=$_POST['hname'];
$date=date("Y/m/d");
$_SESSION['email'] = $email;






if($name !=''&& $email !=''){
//Insert Query of SQL
$query = mysql_query("insert into booking(name,email,address,phone,checkin,checkout,member,required,hotelname,date) values('$name','$email','$address','$phone','$checkin','$checkout','$member','$required','$hotelname','$date')"); // <Database> V <locla var>
   echo'<script> window.location="booking_details.php"; </script> ';
    exit;
}



else{

echo "<h1>Insertion Failed <br/> Some Fields are Blank....!!</h1>";
}
}
mysql_close($connection); // Closing Connection with Server
?>


