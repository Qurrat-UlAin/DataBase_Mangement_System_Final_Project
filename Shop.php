
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Our Shop</title>
    <style>
       body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #000000;
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
	.herobtn{
		display: inline-block;
		text-decoration: none;
		color: #070707;
		border: 1px solid rgb(4, 4, 4);
		padding: 12px 34px;
		font-size: 15px;
		background: transparent;
		position: relative;
        background-color: blanchedalmond;
		cursor: pointer;
        border-radius: 25px;
	}
	.herobtn:hover{
		border: 1px solid#f7f4f7;
		background: #230927;
        color: blanchedalmond;
		transition: 0.5s;
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
    
    header {
      background-color: #333;
      color: white;
      padding: 20px;
      text-align: center;
    }
    
    .container {
        position: relative;
      width: 100%;
      margin: 20px auto;
   display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }
    
    .product-card {
      width: 300px;
      background-color:blanchedalmond;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(244, 237, 237, 0.1);
      margin: 20px;
      padding: 20px;
    }
    
    .product-img {
      width: 100%;
      height: 200px;
      border-radius: 5px;
      object-fit: cover;
    }
    
    .product-info {
      margin-top: 10px;
      text-align: center;
    }
    
    .product-title {
      font-weight: bold;
      font-size: 1.2em;
    }
    
    .product-price {
        position: relative;
      color: #b7d6f8;
      background-color:rgb(38, 37, 37);
      border: 1px solid black;
      width: 80px;
      left: 35%;
      border-radius: 20px;

      font-size: 1.2em;
        .dynamic-product-card {
            width: 300px;
            background-color: blanchedalmond;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(244, 237, 237, 0.1);
            margin: 20px;
            padding: 20px;
        }
    </style>
</head>

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
                            <a onclick="redirect('Logout')" href="Logout.php">Log Out</a>
                        </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
 <?php
 include("conncheck.php");

 $sql = "SELECT ProductName, ProductPrice FROM producttable";
 $result = $conn->query($sql);

 // Define the image paths
 $images = array(
   "Glass Planet Keychains" => "pic1.jpg",
   "Flat Metal Planet Keychain" => "pic3.avif",
   "8 Planets Cotton Shirt" => "pic4.avif",
   "Dwarf Planet Cotton Tee" => "pic5.jpg",
   "Solar System Cotton Tee" => "pic6.jpg",
   "Solar System Mug" => "mug1.jpeg",
   "Planetary Details Mug" => "mug2.jpeg",
   "Hot n Cold Jupiter Mug" => "mug4.jpeg",
   "Triangular Keychains" => "pic10.jpg",
 );

 if ($result->num_rows > 0) {
  
     $count = 0;
     echo '<div class="container">';
     while ($row = $result->fetch_assoc()) {
         $count++;
         echo '<div class="product-card">
         <img class="product-img" src="'.$images[$row["ProductName"]].'" alt="Product Image">
         <div class="product-info">
            <h2 class="product-title">' . $row["ProductName"] . '</h2>
            <p class="product-price">' . $row["ProductPrice"] . '</p>
            <button class="herobtn">Add to Cart</button>
         </div>
        </div>';
    
         if ($count % 3 == 0) {
             echo '</div><div class="container">';
         }
     }
     echo '</div>';
 } else {
     echo "No products found";
 }
 $conn->close();
 ?>
</div>
<div style="text-align: center; margin-top: 20px;">
    <a href="LetsCheckOut.php" class="herobtn">Check Out</a>
</div>

</body>
</html>