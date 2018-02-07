<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Hotels of Kuakata</title>
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
<?php include ('./connection.php'); ?>
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
					 <li class="active"><a href="hotels.php">HOTELS</a></li>
					 <li><a href="news.php">LATEST NEWS</a></li>
					 <li><a href="booking.php">BOOKING</a></li>
					 <li><a  href="contact.html">CONTACT US</a></li>
						<div class="clearfix"></div>
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
 <div class="rooms text-center">
	 <div class="container">
		 <h3>Our Hotels</h3>
		 <div class="room-grids">
                     <?php 
                                              $sql=mysql_query("SELECT * FROM data WHERE priority =1")or die(mysql_error());
                                              while($row = mysql_fetch_array($sql))
                                            {
                                              $image = $row['image'];
                                              $name=$row['hotelname'];
                                              $sd=$row['shortdetail'];
                                                                                          
                                             ?>
			 <div class="col-md-4 room-sec">
				 <a href="#"><img src="images/<?php echo $image;?>" alt=""/></a>
				 <div class="caption">
					<span>&#8356; 250</span>
					<a href="booking.php?name=<?php echo $row['hotelname'];?>">Book Now</a>
				 </div>
				 <a href="details.php?id=<?php echo $row['id']; ?>" class="title"><h4><?php echo $name;?></h4></a><br/>
				  <p><?php echo $sd;?></p>
                                  <div class="items">
					 <a href="#"><span class="img1"> </span></a>
					 <a href="#"><span class="img2"> </span></a>
					 <a href="#"><span class="img3"> </span></a>
					 <a href="#"><span class="img4"> </span></a>
					 <a href="#"><span class="img5"> </span></a>
					 <a href="#"><span class="img6"> </span></a>
				 </div>
			 </div>
                                            <?php }?>
			 
			 <div class="clearfix"></div>
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
			 
			 
				<div class="clearfix"></div>
		 </div>
		 <div class="col-md-7 details">

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
		<h6>CopyRight 2017@ Atikur68</h6>	
</div>
<!---->

</body>
</html>