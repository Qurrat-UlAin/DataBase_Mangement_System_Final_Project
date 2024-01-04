
<!DOCTYPE HTML>
<html>
<head>
	 <title>ASTROLOGY </title>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css	">
	</head>
    <style>
    *{
	margin:0;
	padding: 0;
	font-family: Century Gothic;
}
.header{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(MIX.jpg);
	height: 100vh;
	width: 230vh;
	background-size:cover ;
	background-position: center;
}
nav{
	
	display: flex;
	padding: 2% 6%;
	justify-content: space-between;
	align-items: center;
}
nav img{
	width: 150px; 
	margin-left: 0px;
	}
	.nav-links{
		flex: 1;
		text-align: right;
	}
	.nav-links ul li{
		list-style: none;
		display: inline-block;
		padding: 10px 12px;
		position: relative;
	}
	.nav-links ul li a{
		color: #fff;
		text-decoration: none;
		font-size: 16px;
	}
	.nav-links ul li::after{
		content:'' ;
		width: 0%;
		height: 2px;
		background: #f44336;
		display: block;
		margin: auto;
	}
	.nav-links ul li:hover::after{
		width: 100%;
		transition: 0.5s;
	}
	.dropdown {
		position: relative;
		display: inline-block;
	}
	.ftp {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(planetrows.jpg	);
	height: 100vh;
	width: 100%;
	background-size:cover ;
	background-position: center;
	position: absolute;
	left: 0%;
	right: 0%;	
	}

	.dropdown-content {
		display: none;
		text-align: left;
	    top: 30px;
		margin-top: 10px;
		
		position: absolute;
		background-color: #000000;
		min-width: 120px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}
	.dropdown-content a {
		
		text-decoration: none; /* Optional: removes underline */
		text-align: left; /* Align text to the left */
		display: block; /* Each link as a block element */
		padding: 8px 16px; /* Adding padding for better readability */
	}

	.dropdown:hover .dropdown-content {
		display: block;
	}
	.dropdown-content a::after {
		content:'' ;
		width: 0%;
		height: 2px;
		background: #7cbae7;
		display: block;
		margin: auto;
	}
	.dropdown-content a:hover::after{
		width: 100%;
		transition: 1s;
	}
	.textbox{
		width: 90%;
		color: #fff;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		text-align: center;
	}
	.textbox h1{
		font-size: 62px ;
	}
	.textbox p{
		margin: 20px 0 40px;
		font-size: 15px;
		color: #fff;
	}
	.herobtn{
		display: inline-block;
		text-decoration: none;
		color: #fff;
		border: 1px solid #fff;
		padding: 12px 34px;
		font-size: 15px;
		background: transparent;
		position: relative;
		cursor: pointer;
	}
	.herobtn:hover{
		border: 1px solid#f7f4f7;
		background: #230927;
		transition: 0.5s;
	}
	.container{
		max-width: 1170px;
		margin:auto;
	}
	.row{
		display: flex;
		flex-wrap: wrap;
	}
	ul{
		list-style: none;
	}
	.footer{
		background-color: #24262b;
		padding: 70px 0;
	}
	.footer-col{
	   width: 25%;
	   padding: 0 15px;
	}
	.footer-col h4{
		font-size: 18px;
		color: #ffffff;
		text-transform: capitalize;
		margin-bottom: 35px;
		font-weight: 500;
		position: relative;
	}
	.footer-col h4::before{
		content: '';
		position: absolute;
		left: 35%;;
		bottom: -10px;
		background-color: #f17fac;
		height: 2px;
		box-sizing: border-box;
		width: 90px;
	}
	.footer-col ul li:not(:last-child){
		margin-bottom: 10px;
	}
	.footer-col ul li a{
		font-size: 16px;
		text-transform: capitalize;
		color: #f06b6b;
		text-decoration: none;
		font-weight: 300;
		color: #bbbbbb;
		display: block;
		transition: all 0.3s ease;
	}
	.footer-col ul li a:hover{
		color: #ffffff;
		padding-left: 8px;
	}
	.footer-col .social-links a{
		display: inline-block;
		height: 40px;
		width: 40px;
		background-color: rgba(255,255,255,0.2);
		margin:0 10px 10px 0;
		text-align: center;
		line-height: 40px;
		border-radius: 50%;
		color: #ffffff;
		transition: all 0.5s ease;
	}
	.footer-col .social-links a:hover{
		color: #24262b;
		background-color: #ffffff;
	}
	
	@media(max-width: 700px){
		.textbox h1{
			font-size: 20px;
		}
		.nav-links ul li{
			display: block;
		} 
		.nav-links{
			position: absolute;
			background: #f44336;
			height: 100vh;
			width: 200px;
			top: 0;
			right: 0;
			text-align: left;
			z-index: 2;
		}
		
	}

    </style>
    <body>
<section class="header">
	<nav><a href="#"><img src="mainlogo.jfif"></a>
	<div class="nav-links">
		<ul>
		<li >
				<a href="Homepage.php">HOME </a>
			</li>
			<li>
				<a href="Aboutus.php">ABOUT</a>
			</li>
			<li>
				<a href="sun.php">OUR SUN</a>
			</li>
			<li>
				<a href="luna.php">OUR MOON</a>
			</li>
               <li class="dropdown">
					<a href="mercury.php">PLANETS</a>
					<div class="dropdown-content">	
						<a onclick="redirect('mercury')" href="mercury.php">MERCURY</a>
						<a onclick="redirect('venus')" href="venus.php">VENUS</a>
						<a onclick="redirect('earth')" href="earth.php">EARTH</a>
						<a onclick="redirect('mars')" href="mars.php">MARS</a>
						<a onclick="redirect('jupiter')" href="jupiter.php">JUPITER</a>
						<a onclick="redirect('saturn')" href="saturn.php">SATURN</a>
						<a onclick="redirect('neptune')" href="neptune.php">NEPTUNE</a>
						<a onclick="redirect('uranus')" href="uranus.php">URANUS</a>
					</div>
			</li> 
			<li class="dropdown">
					<a href="pluto.php">OTHER BODIES</a>
					<div class="dropdown-content">	
						<a onclick="redirect('pluto')" href="pluto.php">PLUTO</a>
						<a onclick="redirect('243ida')" href="243ida.php">243 IDA</a>
						<a onclick="redirect('433eros')" href="433eros.php">433 EROS</a>
						<a onclick="redirect('ceres')" href="ceres.php">CERES</a>
					</div>
			</li>
			<li class="dropdown">
					<a href="">OTHER</a>
					<div class="dropdown-content">	
						<a onclick="redirect('Aboutus')" href="Aboutus.php">Aboutus</a>
						<a onclick="redirect('Shop')" href="Shop.php">Shop</a>
					</div>
			</li>
		</ul>
	</div>
</nav>
<div class="textbox">
	<h1>GALAXACAL GATEWAY</h1>
	<p>Astronomy is the study of everything in the universe beyond Earth’s atmosphere. That includes objects we can see with our naked eyes, like the Sun , the Moon , the planets, and the stars .<br> It also includes objects we can only see with telescopes or other instruments, like faraway galaxies and tiny particles. <br>And it even includes questions about things we can't see at all, like dark matter and dark energy .</p>
	<a href="https://science.nasa.gov/solar-system" class="herobtn">VISIT US TO LEARN MORE</a>
</div>
</section>
<p style="color: rgb(255, 62, 62);">__________________________________________________________________________________________________________________________________________________________________________</p>

<section style="width: 100%; height: auto; background-color: black;">
<section style="background-color: rgb(17, 16, 16); height: 3150px; width: 90%; text-align: center;margin: auto; position: relative;">
 <br><br><br><br><br><br>
	<div ><h1 style="color:blanchedalmond; text-align: center;font-size: 62px;">SOLAR SYSTEM </h1>
</div>
<br><br><br><br><br>
<div class="moiz" style=" height: 430px;width: 95%;border: 1px solid rgb(25, 21, 21); margin-left: 10px;position: relative;margin-right: 10px; display: flex; background-color: rgb(40, 24, 24);margin: auto; text-align: center;border-radius: 10px; border: 1px solid blanchedalmond;">
	<div style="position: absolute; height: auto;width: 50%;">

<h1 style="font-size: 38px;margin-left: 100px;color:blanchedalmond;" ><br>Solar System Overview</h1>
<br>
<p style="font-weight: 400;font-size: 20px; margin-left: 10px;margin-top: 10px;color:blanchedalmond;">The solar system has one star, eight planets, five officially recognized dwarf planets, at least 290 moons, more than 1.3 million asteroids, and about 3,900 comets.

	It is located in an outer spiral arm of the Milky Way galaxy called the Orion Arm, or Orion Spur. Our solar system orbits the center of the galaxy at about 515,000 mph (828,000 kph). It takes about 230 million years to complete one orbit around the galactic center.</p>
</div>
<div ><img src="m13.gif" style="width: 45%;position: absolute; height: 300px;top: 40px;right:10px ; "></div>
<br><br><br>
<div style="position: absolute;color: blanchedalmond; bottom: 0%;right: 150px;top: 330px;width: 300px;line-height: 1.5 ;"> <br><U>STAR , 8 PLANETS and 1 DWARF PLANET <br>IN SOLAR SYSTEM </U></div>
</div>


<br><br><br><br><br><br>
<div style="position: absolute; color: blanchedalmond;">
	<p style="color: rgb(255, 62, 62);">__________________________________________________________________________________________________________________________________________________________________________</p>

	<br><br><br><br><br><br><br>
<h1 style="font-size: 42px;position: absolute; left: 10%;">MILKY WAY GALAXY </h1>
<br><br><br><br><br><br><br><br>
<div style="position: relative; display: flex;">
<p style="font-size: 20px; width: 40%; position: relative; left: 5%;line-height: 2; text-align: left; ">Milky Way Galaxy, large spiral system consisting of several hundred billion stars, one of which is the Sun. It takes its name from the Milky Way, the irregular luminous band of stars and gas clouds that stretches across the sky as seen from Earth.ilky Way Galaxy, large spiral system consisting of several hundred billion stars, one of which is the Sun. It takes its name from the Milky Way, the irregular luminous band of stars and gas clouds that stretches across the sky as seen from Earth.</p>
<img src="m14.gif" style="position: absolute; width: 50%; right: 0px; height: 300px;  float: right; right: 10px; border-radius: 15px; border: 1px solid blanchedalmond;">
</div>
<br><br>
<div style="width: 90%; position: absolute; left: 5%; line-height: 2;">
	<p style="font-size: 20px; text-align: left; left: 15px;"> A thick layer of interstellar dust obscures much of the Galaxy from scrutiny by optical telescopes, and astronomers can determine its large-scale structure only with the aid of radio and infrared telescopes, which can detect the forms of radiation that penetrate the obscuring matter.</p>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>
<p style="color: rgb(255, 62, 62);">__________________________________________________________________________________________________________________________________________________________________________</p>

<div class="ftp" style="position: relative; font-family: Arial, Helvetica, sans-serif; color: aliceblue;">
	<div style="position: absolute; left: 84px;text-align: left; top: 30px;" >
	<h1 style=" font-size: 85px;font-family: Arial, Helvetica, sans-serif; color: aliceblue;">Solar System <br> Exploration</h1>
	</div>
	<div style="position: absolute; top: 250px; left: 84px; text-align: left; width: auto;">
<h3 style="font-size: 20px; font-weight: lighter; ">Join us as we explore our planetary neighborhood: The Sun, planets, moons, <br> and millions of asteroids, and comets.</h3>
</div>
<div style="position: absolute; left: 84px; text-align: left; top: 500px; word-spacing: 15px; ">
	<p style="font: weight 10px; font-size: 12px;">OUR  SOLAR SYSTEM</p>

</div>
<div style="position: absolute; left: 84px; text-align: left; top: 550px; word-spacing: 15px; ">
	<h1 style="font-weight: bolder; font-size: 80px; color: rgb(42, 124, 217);">8</h1>

</div>
<div style="position: absolute; left: 174px; text-align: left; top: 585px; word-spacing: 15px; ">
	<h3 style="font: weight bolder; font-size: 20px;">planets</h3>

</div>
 <div style="position: absolute; left: 604px; text-align: left; top: 550px; word-spacing: 15px; ">
	<h1 style="font-weight: bolder; font-size: 80px; color: rgb(42, 124, 217);">5</h1>

</div>
<div style="position: absolute; left: 704px; text-align: left; top: 585px; word-spacing: 5px; ">
	<h3 style="font: weight bolder; font-size: 20px;">Dwarf Planets</h3>

</div>
<div style="position: absolute; top: 90%;left: 40%; word-spacing: 10px;">
	<a href="https://science.nasa.gov/solar-system" class="herobtn">LEARN MORE</a>

</div >
<div style="position: absolute; bottom: 0%;">
	<p style="color: rgb(255, 62, 62);">__________________________________________________________________________________________________________________________________________________________________________</p>


</div>

</div>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
				<h4>company</h4>
				<ul>
					<li><a href="#">about us</a></li>
					<li><a href="#">our services</a></li>
					<li><a href="terms.php">privacy policy</a></li>
					<li><a href="#">affiliate program</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>get help</h4>
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">shipping</a></li>
					<li><a href="#">returns</a></li>
					<li><a href="#">order status</a></li>
					<li><a href="#">payment options</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>online shop</h4>
				<ul>
					<li><a href="Shop.php">Shirts</a></li>
					<li><a href="Shop.php">Mugs</a></li>
					<li><a href="Shop.php">Keychain</a></li>
					
				</ul>
			</div>
			<div class="footer-col">
				<h4>follow us</h4>
				<div class="social-links">
					<a href="https://www.facebook.com/NASA/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/NASA"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/nasa/?hl=en"><i class="fab fa-instagram"></i></a>
					<a href="https://www.linkedin.com/company/nasa"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
</section>
</section>
	</body>
	<script>
function redirect(planet) {
 var url = planet + ".php"; 
 window.location.href = url; 
}
</script>
	</html> 
