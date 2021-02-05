<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--FontAwesome-->
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
		<!--Google Font-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
		<!--Favicon-->
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/site.webmanifest">
		<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#ff0000">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<!--Title-->
		<title>Form Processing Script</title>
		<!--External CSS File-->
		<link type="text/css" rel="stylesheet" href="css/style.css" />
	</head>

	<body>
	<!-- Header -->
	<header class="main-header">
        <div class="top-nav">
            <div class="logo-container">
                <a href="../index.html"><img class="logo" src="images/logo.jpg" alt="Oh! Zzhusam Logo"></a>
            </div>
            <button class="btn"><a href="navigation.html"><i class="fas fa-bars fa-2x"></i></a></button>
        </div>
		
        <nav class="secondary-nav">
            <ul class="nav-ul">
                <li class="nav-li"><a class="nav-link" href="menu.html">Menu</a></li>
				<li class="nav-li"><a class="nav-link" href="order.html">Order</a></li>
                <li class="nav-li"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-li"><a class="nav-link" href="contact.html">Contact</a></li>
                <li class="nav-li"><a class="nav-link" href="lorem-ipsum.html">Lorem Ipsum</a></li>
                <button id="cta"><a href="order.html">Order Now!</a></button>
            </ul>
        </nav>
    </header>

	<!-- Content -->
	<div class="content-header">
        <h2>Form Processing Script</h2>
    </div>

	<div id="wrapper">
			
		<main>            

			
		<?php
		/*
		$username			- a variable named '$username'
							a container to hold data
		=					- assign a value from right to left 
		trim()				- remove extra space bar spaces from text input
		$_POST["username"]	- retrieve the form field with name="username"
		$_GET["username"]	  user $_POST or $_GET based on the form method=""	
		*/
			
			
		if( isset($_GET["username"]) ){
			$username = trim($_GET["username"]);
			echo "<h3>Hello, $username! Thank you for filling out the form!</h3>";	
			echo "<p>The form was using <code>method='get'</code></p>";
			echo "<p>All form data has been appended to the URL of the address of this page</p>";
		}


		if( isset($_POST["username"]) ){
			$username = trim($_POST["username"]);
			echo "<h3>Hello, $username! Thank you for filling out the form!</h3>";	
			echo "<p>The form was using <code>method='post'</code></p>";
			echo "<p>All form data has been packaged into the HTTP header, the meta information that travels along with all HTTP requests/responses.</p>";
		}		
		?>
			
		</main>

	</div>	
	
	<!-- Footer -->
    <footer>
        <div class="primary-footer">

            <div class="footer-row">

                <div class="logo-container footer-column">
                    <img class="logo-octopus-img" src="images/logo-octopus.png" alt="Oh! Zzhusam Octopus Logo">
                </div>
        
                <div class="store-hour-container footer-column">
                    <ul>
                        <li>Monday: 11:30am - 9pm</li>
                        <li><em>Tuesday: Closed</em></li>
                        <li>Wednesday: 11:30am - 9pm</li>
                        <li>Thursday: 11:30am - 9pm</li>
                        <li>Friday: 11:30am - 10pm</li>
                        <li>Saturday: 11:30am - 10pm</li>
                        <li>Sunday: 11:30am - 9pm</li>
                    </ul>
                </div>
                
            </div>

            <div class="footer-row">

                <div class="information footer-column">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d166587.24996035613!2d-122.94120395498845!3d49.277803557613886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548677c6218cf507%3A0x5eaf8667e36dfad2!2sOh*21%20Zzhu%20Sam%20Korean%20Restaurant!5e0!3m2!1sen!2sca!4v1612425271661!5m2!1sen!2sca" width="350" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <p>7506 Edmonds St, Burnaby, BC V3N 1B4</p>
                    <p>(604) 553-8830</p>
                </div>
    
                
                <div class="social-media-icon-container">
                    <span class="social-media-icons">
                        <a href="https://www.facebook.com/ohzzhusam" target="_blank"><i class="fab fa-facebook-f fa-sm"></i></a>
                    </span>
                    <span class="social-media-icons">
                        <a href="http://instagram.com/ohzzhusam" target="_blank"><i class="fab fa-instagram fa-sm"></i></a>
                    </span>
                </div>
    
                <div class="fb-page footer-column" 
                     data-href="https://www.facebook.com/ohzzhusam"
                     data-width="400" 
                     data-hide-cover="false"
                     data-show-facepile="false">
                </div>

            </div>
        
        </div>
        
        <div class="secondary-footer">
            <span>Copyright © Jungmin (Jessica) Cho A00925353 COMP1850</span>
        </div>

    </footer>

    <!--Facebook JavaScript SDK-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="9TcYgYI2"></script>

	</body>
</html>




