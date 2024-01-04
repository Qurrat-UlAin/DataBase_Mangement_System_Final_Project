
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
 <style>
    
*{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}


.header{
	height: 20vh;
	width: 100%;
}
nav{
    width: 100%;
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
	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		text-align: left;
	    top: 50px;
		margin-top: 10px;
		
		position: absolute;
		background-color: #1e1717;
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
		background: #f44336;
		display: block;
		margin: auto;
	}
	.dropdown-content a:hover::after{
		width: 100%;
		transition: 1s;
	}
	.nav-links ul li{
		list-style: none;
		display: inline-block;
		padding: 20px 25px;
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
		background: #7cbae7;
		display: block;
		margin: auto;
	}
	.nav-links ul li:hover::after{
		width: 100%;
		transition: 0.5s;
	}
    .wrapper{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .background-container{
        width: 100%;
        min-height: 100vh;
        display: flex; 
    }
    .bg-1{
        flex: 1;
        background-color: black;
    }
    .bg-2{
        flex: 1;
        background-color: blanchedalmond;
    }
    .about-container{
        width: 85%;
        min-height: 80vh;
        position: absolute;
        background-color: blanchedalmond;
        box-shadow: 24px 24px 30px #6d8dad;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 40px;
        border-radius: 5px;
    }
    .image-container{
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .image-container img {
        width: 500px;
        height: 500px;
        margin: 20px;
        border-radius: 10px;
    }
    .text-container{
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        font-size: 22px;
    }
    .text-container h1{
        font-size: 70px;
        padding: 20px 0px;
    }
    .text-container a{
        text-decoration: none;
        padding: 12px;
        margin: 50px 0px;
        background-color: rebeccapurple;
        border: 2px solid transparent;
        color: white;
        border-radius: 5px;
        transition: .3s all ease;
    }
    .text-container a:hover{
        background-color: transparent;
        color: black;
        border: 2px solid rebeccapurple;
    }
    @media screen and (max-width: 1600px){
        .about-container{
            width: 90%;
        }
        .image-container img{
            width: 400px;
            height: 400px;
        }
        .text-container h1{
            font-size: 50px;
        }
    }
    @media screen and (max-width: 1100px){
        .about-container{
            flex-direction: column;
        }
        .image-container img{
            width: 300px;
            height: 300px;
        }
        .text-container {
            align-items: center;
        }
        
    }
   
 </style>

<body>
    <section class="header" style="background-color:  rgb(11, 0, 0) ; width: 100%;">
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
    </section>
    <div class="wrapper">

        <div class="background-container">
            <div class="bg-1"></div>
            <div class="bg-2"></div>
    
        </div>
        <div class="about-container">
            
            <div class="image-container">
                <img src="pic.jpg" alt="">
                
            </div>

            <div class="text-container">
                <h1>DEVELOPERS</h1>
                <ol><li><p>QURRAT UL AIN</p></li>
                <li><p>ABDUL MOIZ KHALID </p></li>
                <li><p>MAAZ HUSSAIN </p></li>
                </ol>
                <br><br>
                <a href="https://web.whatsapp.com/">CONTACT US</a>
            </div>
            
        </div>
    </div>
    <footer style="text-align: center;background-color: grey;height: 20px;bottom: 0%;">
        <p>&copy; 2023 Solar System Exploration. All rights reserved.</p>
    </footer>
    <script>
function redirect(planet) {
 var url = planet + ".php"; 
 window.location.href = url; 
}
</script>

</body>
</html>
    
 