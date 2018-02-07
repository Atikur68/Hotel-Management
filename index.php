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
				 	<h2>DREAM HOTEL</h2>
			 </div>
			 <span class="menu"> </span>
			 <div class="m-clear"></div>
			 <div class="top-menu">
				<ul>
					 <li class="active"><a href="index.php">HOME</a></li>
					 <li><a class="scroll" href="facilities.php">FACILITIES</a></li>
					 <li><a class="scroll" href="hotels.php">HOTELS</a></li>
					 <li><a class="scroll" href="news.php">LATEST NEWS</a></li>
					 <li><a class="scroll" href="booking.php">BOOKING</a></li>
					 <li><a class="scroll" href="contact.html">CONTACT US</a></li>
				</ul>
				<script>
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle(200);
					});
				</script>
			 </div>
			 <div class="clearfix"></div>
		  </div>
	  </div>
	  <div class="banner">
			<div class="banner-info text-center">
			
			</div>
	  </div>
</div>
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<script type="text/javascript" src="js/JFCore.js"></script>
<script type="text/javascript" src="js/JFForms.js"></script>
<!-- Set here the key for your domain in order to hide the watermark on the web server -->
<script type="text/javascript">
	(function() {
		JC.init({
			domainKey: ''
		});
	})();
</script>


<!---->
<div class="package text-center">
	 <div class="container">
		 <h3>Book A Hotel</h3>
		 
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : true,
							        navigationText :  false,
							        pagination : false,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		  <div id="owl-demo" class="owl-carousel">
			  
			  <div class="item text-center image-grid">	
					<ul>
                                             <?php 
                                              $sql=mysql_query("SELECT * FROM data WHERE priority =1")or die(mysql_error());
                                              while($row = mysql_fetch_array($sql))
                                            {
                                              $image = $row['image'];
                                                                                          
                                             ?>
					<li> <img src="images/<?php echo $image;?>" alt=""></li>			    
					 <?php }?>
					 </ul>
			  </div>
		  </div> 		
	 </div>
</div>
<!---->
<!---->
<div class="rooms text-center">
	 <div class="container">
		 <h3>Our Hotels Types</h3>
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
				 <img src="images/<?php echo $image;?>" alt=""/>
				 
                                 <a href="details.php?id=<?php echo $row['id']; ?>" class="title"><h4><?php echo $name;?></h4></a><br/>
				 <p><?php echo $sd;?></p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
                      <?php }?>
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="fotter">

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