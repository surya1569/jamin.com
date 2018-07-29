<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');	}?>
<!DOCTYPE html>
<head><title>jamin</title>
<link rel="stylesheet" type="text/css" href="about.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="jsnav.js"></script>
<script src="jsforimsgrid.js"></script>

</head>
<body>

<div class="topnav" style="font-family:arial">
<br/>
<div class="box">jamin</div>
<br/>
  <a href="jamin.php"><i class="glyphicon glyphicon-home"></i>Home</a>
   <a href="property1.php">Property</a>
  <a  class="active" href="About.php">About</a>
  <a href="Agent.php">Agent</a>
   <a href="Contact.php">Contact</a>
   <a href="login.php">Login</a>

</div>

<div class="hero-image">
  <div class="hero-text">
    <h1>About Us</h1>
    <p>Experince make better</p>
  
  </div>
</div>
<br/>
<br/>
<div>
<h2 style="text-align:center; font-family:arial" >OUR SERVICES</h2>
<header>
  <div class="container"></div>
</header>

<div class="content">
  
 
  <p>jamin Realty Services Limited is only an intermediary offering its platform to facilitate the transactions between Seller and Customer/Buyer/User and is not and cannot be a party to or control in any manner any transactions between the Seller and the Customer/Buyer/User. All the offers and discounts on this Website have been extended by various Builder(s)/Developer(s) who have advertised their products.jamin is only communicating the offers and not selling or rendering any of those products or services. It neither warrants nor is it making any representations with respect to offer(s) made on the site. jamin Realty Services Limited shall neither be responsible nor liable to mediate or resolve any disputes or disagreements between the Customer/Buyer/User and the Seller and both Seller and Customer/Buyer/User shall settle all such disputes without involving jamin Realty Services Limited in any manner.</p>
  <div class="container">
      <div class="column">
        <div class="add-info"  data-title="html"></div>
      <p>
        <div class="paragraph">
          <h1>First Service</h1>
		  <p>
          <p>Real estate is "property consisting of land and the buildings on it, along with its natural resources such as crops, minerals or water; immovable property of this nature; an interest vested in this (also) an item of real property, (more generally) buildings or housing in general. Also: the business of real estate; the profession of buying, selling, or renting land, buildings, or housing."It is a legal term used in jurisdictions whose legal system is derived from English common law, such as India, theUnited Kingdom, United States, Canada,Pakistan, Australia, and New Zealand.</p>
          <button class="blue-btn view-btn">view!</button>
        </div>
      </div>
    
      <div class="column">
        <div class="add-info" data-title="Stylus"></div>
       
        <div class="paragraph">
          <h1>Second Service</h1>
          <p>Residential real estate

Residential real estate may contain either a single family or multifamily structure that is available for occupation or for non-business purposes.

Residences can be classified by if and how they are connected to neighbouring residences and land. Different types of housing tenure can be used for the same physical type. For example, connected residences might be owned by a single entity and leased out, or owned separately with an agreement covering the relationship between units and common areas and concerns.</p>
          <button class="red-btn">view!</button>
        </div>
      </div>
    
      <div class="column">
        <div class="add-info" data-title="React"></div>
       
        <div class="paragraph">
          <h1>Third Service</h1>
          <p>Major categories:Attached / multi-unit dwellings
•Apartment  or Flat – An individual unit in a multi-unit building. The boundaries of the apartment are generally defined by a perimeter of locked or lockable doors. Often seen in multi-storyapartment buildings.
•Multi-family house – Often seen in multi-story detached buildings, where each floor is a separate apartment or unit.
•Terraced house-A number of single or multi-unit buildings in a continuous row with shared walls and no intervening space.
•Condominium-A building or complex, similar to apartments, owned by individuals. Common grounds and common areas within the complex are owned and shared jointly. In North America, there are townhouse or rowhouse style condominiums as well. The British equivalent is a block of flats.
•Cooperative-A type of multiple ownership in which the residents of a multi-unit housing complex own shares in the cooperative corporation that owns the property, giving each resident the right to occupy a specific apartment or unit.</p>
          <button class="green-btn">view!</button>
        </div>
      </div>
  </div>
</div>
<br/><br/><br/><br/>
<hr/>
<br/><br/>
<h1 style="text-align:center">Our Team</h1>
<br/><br/>


<br/><br/><br/><br/>
<footer id="footer">
  <div class="container">
    <!-- Row -->
			<div class="row">
        <div class="col-md-12">
           <!-- footer logo -->
					<div class="footer-logo">
						<a href="#"><a><div class="box" style="text-align:center
    margin-bottom: 40px">jamin</div></a>
					</div>
					<!-- /footer logo -->
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