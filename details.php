<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>hotel-fortune bootstrap Design website | Home :: w3layouts</title>
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
					 <li><a class="scroll" href="index.html">START</a></li>					 
					 <li class="active"><a href="facilities.html" class="scroll">FACILITIES</a></li>					 
					 <li><a class="scroll" href="restaurant.html">RESTAURANT</a></li>
					 <li><a class="scroll" href="conference.html">CONFERENCE</a></li>
					 <li><a class="scroll" href="booking.html">BOOKING</a></li>
					 <li><a class="scroll" href="contact.html">CONTACT US</a></li>
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
<div class="main_bg">
	 <div class="container">
		 <div class="main">
		     <div class="details">
                         <?php 
                         $id=$_GET['id'];
                                              $sql=mysql_query("SELECT * FROM data WHERE id =$id")or die(mysql_error());
                                              while($row = mysql_fetch_array($sql))
                                            {
                                              $image = $row['bigimage'];
                                                                                          
                                             ?>
					<a href="#"><h2><?php echo $row['hotelname'];?></h2></a>
					<div class="det_pic">
						  <img src="images/<?php echo $image;?>" alt="" />
					</div>
					<div class="det_text">
                                            <p class="para"><?php echo $row['longdetail'];?></p>
                                                <div class="read_more">
							 <h3>At a Glance</h3>
                                                         <br>
                                                         <fieldset>
								<div class="control-group">
                                                                    <label class="control-label">Hotel Name :  <?php echo $row['hotelname'];?></label>
									 
								</div>
								 
								<div class="control-group">
									<label class="control-label">Location:    <?php echo $row['location'];?></label>
									 
								</div>	
                                                                <div class="control-group">
									<label class="control-label">Single Room :  <?php echo $row['singleroom'];?></label>
									 
								</div>	
                                                            <div class="control-group">
									<label class="control-label">Double Room : <?php echo $row['doubleroom'];?></label>
									 
								</div>
								 
								<div class="control-group">
									<label class="control-label">Suite Room:    <?php echo $row['suiteroom']; ?></label>
									 
								</div>	
                                                                <div class="control-group">
									<label class="control-label">Facilities:  </label>
									 
								</div>
                                                             <div class="control-group">
									<label class="control-label">Suite Room:    <?php echo $row['suiteroom']; ?></label>
									 
								</div>	
                                                            
								 
								 
							</fieldset>
                                                         <br>
                                                         <h1><a href="booking.php?name=<?php echo $row['hotelname'];?>">Book Now</a></h1>
						</div>
					</div>
                                            <?php }?>
			 </div>
	     </div>		
	 </div>
</div>	
<!---->

<!---->
<div class="fotter-info">
	  <div class="container">
	       
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
		<h6>Copyright 2017@ Atikur68</h6>	
</div>
<!---->

</body>
</html>