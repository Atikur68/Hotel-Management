<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>hotels of Kuakata</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery.min.js"></script>
</head>
<body>
<!--header starts-->
<div class="header">
	 <div class="top-header">
		 <div class="container">
			 <div class="logo">
				 <a href="index.html"><img src="images/logo.png"/></a>
			 <div class="clearfix"></div>
			 </div>
			 <span class="menu"> </span>
			 <div class="m-clear"></div>
			 <div class="top-menu">
			     <ul>
					 <li><a href="index.php">HOME</a></li>
					 <li><a href="facilities.php">FACILITIES</a></li>
					 <li><a href="hotels.php">HOTELS</a></li>
					 <li><a href="news.php">LATEST NEWS</a></li>
					 <li class="active"><a href="booking.php">BOOKING</a></li>
					 <li><a  href="contact.html">CONTACT US</a></li>
						
				 </ul>
				 <script>
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle(200);
					});
				</script>
			 </div>
		  </div>
	  </div>
</div>
					
						<h4 class="title"><span class="text"><strong>.......Booking</strong> Details......</span></h4>
                                                  <br>
						 <?php
 
 
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("hotel", $connection); // Selecting Database from Server
$eee=$_SESSION['email'];
$sql=mysql_query("SELECT * FROM booking WHERE email ='$eee' ")or die(mysql_error());
while($row = mysql_fetch_array($sql))
{
$username = $row['name'];
$email = $row['email'];
$address=$row['address'];
$phone=$_POST['phone'];
?>
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username : <?php echo $username; ?></label>
									 
								</div>
								 
								<div class="control-group">
									<label class="control-label">Email:    <?php echo $email; ?></label>
									 
								</div>	
                                                                <div class="control-group">
									<label class="control-label">Address:  <?php echo $address; ?></label>
									 
								</div>	
                                                            <div class="control-group">
									<label class="control-label">Phone : <?php echo $row['phone']; ?></label>
									 
								</div>
								 
								<div class="control-group">
									<label class="control-label">Check in:    <?php echo $row['checkin']; ?></label>
									 
								</div>	
                                                                <div class="control-group">
									<label class="control-label">Check out:  <?php echo $row['checkout']; ?></label>
									 
								</div>	
                                                            <div class="control-group">
									<label class="control-label">Member : <?php echo $row['member']; ?></label>
									 
								</div>
								 
								<div class="control-group">
									<label class="control-label">Hotel Name:    <?php echo $row['hotelname']; ?></label>
									 
								</div>	
                                                                <div class="control-group">
									<label class="control-label">Require:  <?php echo $row['required']; ?></label>
									 
								</div>
                                                            <div class="control-group">
									<label class="control-label">Date:  <?php echo $row['date']; ?></label>
									 
								</div>
                                                            <br>
                                                            <br>
								 
							</fieldset>
						 <?php 
                         } ?>			
									
				
				
<!---->
<div class="fotter-info">
	  <div class="container">
	      <div class="col-md-5 details">
			 
			 <div class="member">
			 <h4>MEMBERS AREA</h4>
                         <form action="Usercheck.php" method="post">
			 <p>Username</p>
			 <input type="text" name="name" placeholder="" required/>
			 <p>Email</p>
                         <input type="text" name="email" placeholder="" required/>		
                         <input type="submit" name="submit" value="LOGIN"/>
			 </form>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		 <div class="clearfix"></div>
	  </div>	
		<h6>Copyright 2017@ Atikur68</h6>	
</div>
<!---->

</body>
</html>