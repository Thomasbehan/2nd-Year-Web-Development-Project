
<!DOCTYPE HTML>
<head>
<title>Movies Store | More Info</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="contact.php">Sitemap</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="submit.php">Sell your Movie!</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt="" /></a>
					</div>
						<div class="header_top_right">
						  <div class="cart">
						  	   <p><span>Cart</span><div id="dd" class="wrapper-dropdown-2"> (empty)
						  	   	<ul class="dropdown">
										<li>you have no items in your Shopping cart</li>
								</ul></div></p>
						  </div>
							  <div class="search_box">
					     		<form>
					     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
					     		</form>
					     	</div>
						 <div class="clear"></div>
					</div>
						  <script type="text/javascript">
								function DropDown(el) {
									this.dd = el;
									this.initEvents();
								}
								DropDown.prototype = {
									initEvents : function() {
										var obj = this;
					
										obj.dd.on('click', function(event){
											$(this).toggleClass('active');
											event.stopPropagation();
										});	
									}
								}
					
								$(function() {
					
									var dd = new DropDown( $('#dd') );
					
									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active');
									});
					
								});
					    </script>
			   <div class="clear"></div>
  		    </div>     				
   		</div>
   </div>
   <div class="main">
   	 <div class="wrap">
   	 	<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.php">Home</a> &gt;&gt;&gt;&gt; <a href="#" class="active">English</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
   	 	<div class="section group">
				<?php
					$xml = simplexml_load_file("movies.xml");
						$movie = (int)$_GET['movie'];
						echo'<div class="cont-desc span_1_of_2">
													<div class="product-details">				
													<div class="grid images_3_of_2">
														<img src="'; echo $xml->movie[$movie]->img; echo '" alt="" />
													</div>
												<div class="desc span_3_of_2">
													<h2>';echo $xml->movie[$movie]->title; echo '</h2>
													<p>';echo $xml->movie[$movie]->description; echo '</p>					
													<div class="price">
														<p>Price: <span>€';echo $xml->movie[$movie]->price; echo '</span></p>
													</div>
													<div class="available">
														<ul>
															<li><span>Shipping Weight:</span>&nbsp;';echo $xml->movie[$movie]->shipW; echo'lbs</li>
															<li><span>Units in Stock:</span>&nbsp;';echo $xml->movie[$movie]->units; echo'</li>
															</ul>
													</div>
												<div class="share-desc">
													<div class="share">
														<p>Number of units :</p><input class="text_box" type="text">				
													</div>
													<div class="button"><span><a href="#">Add to Cart</a></span></div>					
													<div class="clear"></div>
												</div>
												 <div class="wish-list">
													<ul>
														<li class="wish"><a href="#">Add to Wishlist</a></li>
															<li class="compare"><a href="#">Add to Compare</a></li>
													</ul>
												 </div>
											</div>
											<div class="clear"></div>
											</div>
										<div class="product_desc">	
											 <h2>Details :</h2>
												 <p>';echo $xml->movie[$movie]->details; echo'</p>';
				?>
					
										 </div>
									 </div>
				<div class="rightsidebar span_3_of_1 sidebar">
					<h2>Specials</h2>
					 	<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="preview.php"><img src="images/end-game.jpg" alt="" /></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.php">End Game</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Add to Cart</a></span>
								 </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="preview.php"><img src="images/Coraline.jpg" alt="" /></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.php">Coraline</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Add to Cart</a></span>
								 </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="preview.php"><img src="images/Eclipse.jpg" alt="" /></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.php">Eclipse</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Add to Cart</a></span>
								 </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="preview.php"><img src="images/Priest.jpg" alt="" /></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.php">Priest 3D</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Add to Cart</a></span>
								 </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	    <div class="movie_poster">
					 		  <a href="preview.php"><img src="images/Sorority_Wars.jpg" alt="" /></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.php">Sorority Wars</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Add to Cart</a></span>
								 </div>
								<div class="clear"></div>
					 		</div>			 
 					   </div>
 		 		 </div>
   	 		</div>
        </div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.php">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.php">Sign In</a></li>
							<li><a href="index.php">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="contact.php">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			 <div class="copy_right">
				<p>Company MovieStore © All rights Reseverd | Design by  <a href="https://github.com/thomasbehan">Thomas Behan</a> </p>
		   </div>			
        </div>
    </div>
   <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

