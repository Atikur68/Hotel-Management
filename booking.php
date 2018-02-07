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
					 <li><a href="index.html">HOME</a></li>
					 <li><a href="facilities.html">FACILITIES</a></li>
					 <li><a href="hotels.html">HOTELS</a></li>
					 <li><a href="news.html">LATEST NEWS</a></li>
					 <li class="active"><a href="booking.html">BOOKING</a></li>
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
<!---->
<?php 
$h_name=$_GET['name'];
?>
<div class="contact-bg2">
	 <div class="container">
		 <div class="booking">
			 <h3>Booking</h3>
			 <div class="col-md-8 booking-form">			 
                             <form action="userReg.php" method="POST">
				 <h5>NAME</h5>
				 <input type="text" name="name" value="">
				 <h5>E-MAIL</h5>
				 <input type="text" name="email" value="">
				 <h5>Address</h5>
				 <input type="text" name="address" value="">
				 <h5>Phone</h5>
				 <input type="text" name="phone" value="" class="time">
				 <h5>CHECK IN</h5>
				 <input type="text" name="in" value="" class="time">
				 <h5>CHECK OUT</h5>
				 <input type="text" name="out" value="" class="time">
				 <h5 class="mem">MEMBERS</h5>
				 <input type="number" name="member" value="" >
				 <h5>REQUIRED</h5>
				 <input type="text" name="required" value="">
                                 <input type="hidden" name="hname" value="<?php echo $h_name?>">
				 <input type="submit" name="submit" value="Submit">
                                 <input type="reset" value="Reset">
				 </form>			      
			 </div>
			 
		
				<div class="clearfix"> </div>

			 </div>
		 </div>
	 </div>

<!---->
<div class="fotter">
	 <div class="container">
		 
	 </div>
</div>
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