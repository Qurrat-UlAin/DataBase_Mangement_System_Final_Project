
<?php
include("conncheck.php");

$sql = "SELECT * FROM mainplanets WHERE PlanetName='Jupiter'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
   $planetName = $row["PlanetName"];
  
   $hoursPerDay= $row["HoursPerDay"];
   $travelTime = $row["TravelTime"];
   $orbitPeriod= $row["OrbitPeriod"];
   $gravity= $row["Gravity"];
   $atmosphere= $row["Atmosphere"];
   $spaceMission=$row["SpaceMission"];
   $avgTemp= $row["AverageTemp"];
   $imageData = $row["ImagePath"];
   
 }
} else {
 echo "0 results";
}
//FETCHING FROM D/F TABLE NOW
$sql="select FactNumber1, FactNumber2, FactNumber3 FROM funfacts where PlanetName='Jupiter'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
  $fact1= $row["FactNumber1"];
  $fact2= $row["FactNumber2"];
  $fact3= $row["FactNumber3"];
 }
} else {
 echo "0 results";
}

$sql="select NoOfMoons FROM moonsoftheplanets where NameOfThePlanet='Jupiter'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
	$noOfMoons = $row["NoOfMoons"];
 }
} else {
 echo "0 results";
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASTRONOMY</title>
    <link rel="stylesheet" type="text/css" href="css/crr.css">
</head>
<title>Jupiter</title>
<style>
     *{
	margin:0;
	padding: 0;
	font-family: Century Gothic;
}
.header{
	height: 20vh;
	width: 100%;
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
		background-color: #000000;
		min-width: 120px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}
	.dropdown-content a {
		
		text-decoration: none; 
		text-align: left; 
		display: block; 
		padding: 8px 16px; 
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
	.header1{
		
		background-image:  url('JUPITERMAIN.GIF');
		height: 87vh;
		width: 98vh;
		left: 22%;
		text-align: center; 
		top: 0%;
		
		
	}
	.header1::after {
		content: "";
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 100%; 
		background: linear-gradient(to bottom, transparent, #000); /
	}
	.aa h1::before{
		
			content: '';
			position: absolute;
			left: 0%;
			bottom: -20px;
			background-color: blanchedalmond;
			height: 6px;
			box-sizing: border-box;
			width: 330px;
	}
	.TC a{
        text-decoration: none;
        padding: 12px;
        margin: 50px 0px;
        background-color: blanchedalmond;
        border: 2px solid transparent;
        color: black;
        border-radius: 5px;
        transition: .3s all ease;
    }
    .TC a:hover{
        background-color: transparent;
        color: blanchedalmond;
        border: 2px solid blanchedalmond;
	}
</style>
<body>

<section class="header" style="background-color: rgb(7, 7, 7) ;" >
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
					<a href="">PLANETS</a>
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
<section style="background-color: black; position: relative;height: 1500px;">
	
<div class="header1" style="position: relative; text-align: center;">
	

</div>

<div class="aa" style="position: absolute; text-align: center; top: 16%; left: 36%;color: rgb(255, 255, 255);">
	<h1 style="position: absolute;  font-family: Arial, Helvetica, sans-serif; font-weight: 1; font-size: 50px; 	"> DESTINATION</h1>
</div>
<div  style="position: absolute; text-align: center; top: 16%; left: 36%;color: rgb(255, 255, 255);">
	<h1 style="font-family: Arial, Helvetica, sans-serif;  font-size: 80px;"><br> Jupiter</h1>
</div>
<div style="width: 80%;position: relative; height: 300px; border: 3px solid blanchedalmond;text-align: center; left: 150px;border-radius: 20px; ">
	<div style="position: absolute;font-family: Arial, Helvetica, sans-serif; top: 10px; left: 5%;line-height: 40px;">
	<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 18px;">AVG.TEMPERATURE</h1>
	<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 30px;"><?php echo $avgTemp; ?>F</h1>
	</div>
	<div style="position: absolute;font-family: Arial, Helvetica, sans-serif; top: 10px; left: 35%;line-height: 40px;">
		<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 18px;">MOONS</h1>
		<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 30px;"><?php echo $noOfMoons; ?></h1>
		</div>
		<div style="position: absolute;font-family: Arial, Helvetica, sans-serif; top: 10px; left: 55%;line-height: 40px;">
			<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 18px;">HOURS IN A DAY</h1>
			<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 30px;"><?php echo $hoursPerDay; ?> HRS</h1>
			</div>
			<div style="position: absolute;font-family: Arial, Helvetica, sans-serif; top: 10px; left: 80%;line-height: 40px;">
				<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 18px;">EST. TRAVEL TIME</h1>
				<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 30px;"><?php echo $travelTime; ?> DAYS</h1>
				</div>

				<div style="position: absolute;font-family: Arial, Helvetica, sans-serif; top: 170px; left: 5%;line-height: 40px;">
					<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 18px;">ORBIT PERIOD</h1>
					<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 30px;"><?php echo $orbitPeriod; ?> DAYS</h1>
					</div>
				<div style="position: absolute;font-family: Arial, Helvetica, sans-serif; top: 170px; left: 35%;line-height: 40px;">
					<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 18px;">GRAVITY</h1>
					<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 30px;"><?php echo $gravity; ?> (m/s²)</h1>
					</div>
					
				<div style="position: absolute;font-family: Arial, Helvetica, sans-serif; top: 170px; left: 55%;line-height: 40px;">
					<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 18px;">ATMOSPHERE</h1>
					<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 30px;"><?php echo $atmosphere; ?></h1>
					</div>
					
				<div style="position: absolute;font-family: Arial, Helvetica, sans-serif; top: 170px; left: 80%;line-height: 40px;">
					<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 18px;">SPACE MISSION</h1>
					<h1 style="color:blanchedalmond ; font-weight: lighter	; font-size: 30px;"><?php echo $spaceMission; ?></h1>
</div>	
</div>
<br><br><br>
<div style="position: absolute; left: 38%; top: 72%; font-family: Arial, Helvetica, sans-serif; font-size: 20px;">
	<h1 style="color: blanchedalmond;font-family: Arial, Helvetica, sans-serif; "> Fun facts about Jupiter </h1>
	</div>

	<div style="position: absolute; top: 75%; left: 25%; width: 45%; height: 300px; background-color: rgb(43, 42, 42); border-radius: 30px;border-bottom: 4px solid blanchedalmond;">
	
		<ul style="position: absolute; left: 30px; right: 15px; top: 20px; color: rgb(108, 107, 105); line-height: 1.5; font-size: 20px; ">
			<li>
				<p style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;"><?php echo $fact1 ?></p>
			</li>
<br>
			<li> <p style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;"><?php echo $fact2 ?></p></li>
	
	<br>		<li>
		<p style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;"><?php echo $fact3 ?></p>
	</li>
		</ul>
	</div>
	</div>

	<div style="position: absolute; bottom: 1%; left: 40%;  " class="TC" >
	<a href="mars.php">PREV PLANET</a>
	<a href="saturn.php">NEXT PLANET</a>
</div>
</section>

<script>
function redirect(planet) {
 var url = planet + ".php"; 
 window.location.href = url; 
}
</script>
</body>
</html>

