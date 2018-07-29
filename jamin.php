<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');	}?>
<!DOCTYPE html>
<head><title>Jamin.com</title>
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Jamin.com</title>
		<meta name="description" content="Hover Effect Ideas: Inspiration for subtle hover effects" />
		<meta name="keywords" content="hover effect, inspiration, grid, thumbnail, transition, subtle, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set2.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="jsnav.js"></script>
<script src="jsforimsgrid.js"></script>
<script src="sticky.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</head>
<body>

<div class="topnav nabar-default" style="font-family:arial">
<br/>
<div class="box">Jamin.com</div>
<br/>
  <a class="active" href="jamin.php"><i class="glyphicon glyphicon-home"></i></a>
  <a href="property1.php">Property</a>
  <a href="About.php">About</a>
  <a href="Agent.php">Agent</a>
    <a href="Contact.php">Contact</a>
   <a href="login.php" style="float:right">Login</a>
    <a href="logout.php" style="float:right">Logout</a>
	
   
</div>
<div class="slider" id="main-slider"><!-- outermost container element -->
	<div class="slider-wrapper"><!-- innermost wrapper element -->
		<img src="1.jpg" alt="First" class="slide" /><!-- slides -->
		<img src="2.jpg" alt="Second" class="slide" />
		<img src="3.jpg" alt="Third" class="slide" />
		<img src="41.jpg" alt="Third" class="slide" />
		<img src="5.jpg" alt="Third" class="slide" />
		<img src="6.png" alt="Third" class="slide" />
		
		
	</div>
	
</div>	
<br/><br/><br/>
<h2 style="text-align:center">Welcome <?php
echo $_SESSION['username']; ?>
</h2>
 <h4 style="text-align:center">Does perfect house really exist?</h4>
 <br/>
 <p style="text-align:center">YES of course ,just one click will show you the beauty of our houses. Think of your family and make them feel comfortable.We sincerely hope that you will like our offers.</p>
     <p style="text-align:center">DreamHouse Realty develops the Residential as well as Commercial constructions area. The workforce of the Company brings about brilliant architectures and engineers who are not only passionate about their work but also have their huge involvement in the progress of the company. They always follow the professional ethics and the level of professionalism that aids the company to rise further in the realm of Real Estate Balaji Realty is just irreplaceable in their construction plans and choosing the sites for their projects that make them get the hold of leading positions in the Real Estate industry. They are now on top gear to expand their business.

One of Pune's major developers, Elite Landmarks by the Patil Family is committed to make dream homes possible. Originally from the hinterlands of Maharashtra, the Patil family today plays important role in Pune's development through their incredible projects. Spearheaded by the visionary, Mr. Gajendra Patil, Elite Landmarks began its journey in 1990. Today, Elite Landmarks is a force to be reckoned with in the real estate industry. The dynamic team at Elite Landmarks includes Director Mr. Pramod Patil who oversees execution and Mr. Rishabh who is an industry-expert in Purchase. With a motto of 'Performance Par Excellence', Elite's residential and commercial spaces are a class apart. The success of its many projects is attributed to the Elite performance mantra of 'Love, Quality, Care.'</p>
	 <br/><br/><br/>
<div class="grid">
					<figure class="effect-julia">
						<img src="img/h1.jpg" alt="img21"/>
						<figcaption>
							<h2>Dream<span>House</span></h2>
							<div>
								<p>Make sure your house is insured with a landlord policy to cover your asset</p>
								<p>Contact the chosen renter and offer the house to him</p>
								<p>AAdvertise your house for rent online, in newspapers, and with a visible sign posted outside the home</p>
							</div>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-julia">
						<img src="img/h3.jpg" alt="img22"/>
						<figcaption>
							<h2>Our <span>Services</span></h2>
							<div>
								<p>interest rates are so low ,Capital Gain Exclusion</p>
							
								<p>guaranty the best future,pride of ownership</p>
								<p>gives you and your family a sense of stability and security</p>
							</div>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>	
				<div class="grid">
					<figure class="effect-julia">
						<img src="img/h6.jpg" alt="img21"/>
						<figcaption>
							<h2>Excellent<span>Customer Services</span></h2>
							<div>
								<p>Our real estate professionals treat you as their top client—because you are.</p>
								<p>You’re never sweet-talked into buying a home</p>
								<p>AAdvertise your house for rent online, in newspapers, and with a visible sign posted outside the home</p>
							</div>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-julia">
						<img src="img/h7.jpg" alt="img22"/>
						<img src="img/h7.jpg" alt="img22"/>
						<figcaption>
							<h2>Trusted  <span>Agents</span></h2>
							<div>
								<p>Get top dollar selling your home. </p>
							
								<p>Never pay more than you should buying a home.</p>
								<p>gives you and your family a sense of stability and security</p>
							</div>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>	
				<br/><br/><br/>
<br/><br/><br/>
<div class="container">
	
<div id="blocks-wrapper">
<h2>What Makes Us The Preferred Choice</h2>
	
          <div class="col-xs-12 col-sm-6 col-md-3">
        	<div class="block black">
              <i class="fa fa-file" aria-hidden="true"></i>
                <h3>Maximum Choices</h3>
                <p>15 Lac + & counting. New properties every hour to help buyers find the right home.</p>
                <a href="#">Read More</a>
            </div>
        </div>
		          <div class="col-xs-12 col-sm-6 col-md-3">
        	<div class="block black">
            	<i class="fa fa-heart" aria-hidden="true"></i>
                <h3>Buyers Trust Us</h3>
                <p> 12 million users visit us every month for their buying and renting needs</p>
                <a href="#">Read More</a>
            </div>
        </div>
		          <div class="col-xs-12 col-sm-6 col-md-3">
        	<div class="block black">
            	<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                <h3>Seller Prefer Us</h3>
                <p>27,000 new properties posted daily, making us the biggest platform to sell & rent properties</p>
                <a href="#">Read More</a>
            </div>
        </div>
		          <div class="col-xs-12 col-sm-6 col-md-3">
        	<div class="block black">
            	<i class="fa fa-check-square-o" aria-hidden="true"></i>
                <h3>Expert Guidance</h3>
                <p>Advice from the largest panel of industry experts to help you make smart property decisions</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
	
</div>
</div>
<br/><br/>
<hr/>
<br/><br/>

<div>

<h2 style="text-align:center">Newly Added Property</h2> 
<br/><br/><br/>
<div id="myBtnContainer" align="center">
  <button  class="btn active" onclick="filterSelection('people')">Recent</button>
  <button class="btn" onclick="filterSelection('nature')">Property For Sale</button>
  <button class="btn" onclick="filterSelection('cars')">Property For Rent</button>
   <button class="btn" onclick="filterSelection('all')"> Show all</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="img/h1.jpg" alt="" style="width:100%" style="hover:0.7">
      <h4>SG Estates</h4>
      <p>By SG Estates Ltd <br/>• Siddhartha Vihar, Ghaziabad 
 30.5 Lac <br/> • 2 & 3  BHK Flats<br/> • Area: 954 to 1277 sqft<br/>
• Possession : Dec 2021</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="img/h2.jpg" alt="Lights" style="width:100%">
      <h4>Aditya Appartments</h4>
      <p>
By Shri Aasra Homes Pvt Ltd |<br/> Behrampur, NH-24, Ghaziabad<br/>

 Rs18.5 Lac Onwards<br/>
1, 2 BHK Flats  . 525 - 1000 Sqft</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="img/h3.jpg" alt="Nature" style="width:100%">
      <h4>Mascot Patel Neotown</h4>
      <p>
2, 3 BHK Apartments <br/>  28.8 Lac onwards
Noida Extension, Noida<br/>
Possession : September 2018 <br/>970 - 1735 sqft Semifurnished Booking Amount - 2 Lac</p>
    </div>
  </div>
   <div class="column nature">
    <div class="content">
      <img src="img/h12.jpg" alt="Car" style="width:100%">
      <h4>2 BHK Builder Floor</h4>
      <p>
	 2 Bedrooms<br/>
	<br> ₹ 35.0 Lac Base price ₹ 2,45,000 Approx.<br>
for sale in Sector 25 Rohini , New Delhi
</p>
    </div>
  </div>
    <div class="column nature">
    <div class="content">
      <img src="img/h13.jpg" alt="Car" style="width:100%">
      <h4>3 BHK Flat</h4>
      <p>
for sale in Mahadev Floors,<br/> Uttam Nagar, New Delhi
<br/>₹ 30.5 Lac Base price ₹ 3,87,682 Stamp Duty, Registration Charges
</p>
    </div>
  </div>
    <div class="column nature">
    <div class="content">
      <img src="img/h14.jpg" alt="Car" style="width:100%">
      <h4>2 BHK Flat</h4>
      <p>
for sale in Delhi Luxury Homes, Sector 24 Rohini , New Delhi<br/>
₹ 40.0 Lac Base price<br/>
Address Sector 24 Rohini, New Delhi - Rohini, Delhi
</p>
    </div>
  </div>
   
  
  
  <div class="column cars">
    <div class="content">
      <img src="img/h4.jpg" alt="Car" style="width:100%">
      <h4>2 BHK Flat
</h4>
      <p>
for rent in Star Homes, Uttam Nagar, New Delhi<br/>
₹ 22.0 Lac Base price<br/>
AddressUttam Nagar, New Delhi - West, Delhi NCR
</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="img/h6.jpg" alt="Car" style="width:100%">
      <h4>2 BHK Builder Floor</h4>
      <p>
for sale in Sector 25 Rohini , New Delhi<br/>
₹ 35.0 Lac Base price ₹ 2,45,000 Approx. Registration Charges 
</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="img/h7.jpg" alt="Car" style="width:100%">
      <h4>3 BHK Builder Floor</h4>
      <p>
for sale in Partap Floors, Uttam Nagar, New Delhi</br>
₹ 35.0 Lac Base price ₹ 2,45,000 Approx. Registration Charges
</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="img/h8.jpg" alt="People" style="width:100%">
     <h4>Ayan Appartments</h4>
      <p>
By Shri Jaak Homes Pvt Ltd |<br/> Behrampur, NH-24, Ghaziabad<br/>

 Rs18.5 Lac Onwards<br/>
1, 2 BHK Flats  . 525 - 1000 Sqft</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
      <img src="img/h9.jpg" alt="People" style="width:100%">
      <h4>2 TLK Builder Floor</h4>
      <p>
for sale in Sector 25 Rohini , Noida<br/>
₹ 35.0 Lac Base price ₹ 2,45,000 Approx. Registration Charges 
</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
      <img src="img/h11.jpg" alt="People" style="width:100%">
       <h4>2 BHK Flat</h4>
      <p>
for sale in Delhi Luxury Homes, Sector 35 Rohini ,Delhi<br/>
₹ 40.0 Lac Base price<br/>
Address Sector 24 Rohini, New Delhi - Rohini, Delhi
</p>
    </div>
  </div>
<!-- END GRID -->
</div>
<div class="hero-image">
  <div class="hero-text">
    
    <p></p>
	 <div class="top-left"></div>
    
  </div>
</div>
<footer id="footer">
  <div class="container">
    <!-- Row -->
			<div class="row">
			
        <div class="col-md-12">
           <!-- footer logo -->
					<div class="footer-logo">
						<a href="DreamHouse.html"><a><div class="box" style="text-align:center
    margin-bottom: 40px">DreamHouse</div></a>
					</div>
					<div class="footer-follow">
					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->
					<!-- footer copyright -->
					<p> DreamHouse is India's No 1 Property portal and has been adjudged as the most preferred property site in India, by independent surveys. The portal provides a platform for property buyers and sellers to locate properties of interest and source information on the real estate space in a transparent and unambiguous manner.</p>
					<div class="footer-copyright">
						<p>Copyright © 2016-2018. All Rights Reserved.</p>
						
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</footer>
</body>
</html>