
<?php
include("conncheck.php");
session_start(); 
if (isset($_SESSION['userEmail'])) {
   require 'vendor/autoload.php';
   $mail = new PHPMailer\PHPMailer\PHPMailer(true);

   try {
       //Server settings
       $mail->SMTPDebug = 2;                    
       $mail->isSMTP();                       
       $mail->Host = 'smtp.gmail.com'; 
       $mail->SMTPAuth = true;                  
       $mail->Username = '';          
       $mail->Password = '';                
       $mail->SMTPSecure = 'tls';                
       $mail->Port = 587;                       

       //Recipients
       $userEmail = $_SESSION['userEmail']; 
       $mail->setFrom('', 'Developers');
       $mail->addAddress($userEmail); 

       //Content
       $mail->isHTML(true);                    
       $mail->Subject = 'Here is the subject';
       $mail->Body = 'This is the HTML message body <b>in bold!</b>';
       $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	   if($mail->send()){
		echo "<span class='success'>Email sent successfully</span>";
	 }else{
		echo "<span class='error'>Failed to send email. Error: " . $mail->ErrorInfo . "</span>";
	  }
	 } catch (Exception $e) {
		echo "<span class='error'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</span>";
	 }

   // End the user's session
   unset($_SESSION['userEmail']);
   session_destroy();
} else {
   echo "No active session found.";
}
?>
<html>
    <style>
		.error {
      color: red;
  }
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
	.ftp {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(planetrows.jpg	);
	height: 100vh;
	width: 177vh;
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
    </style>
    <body style="background-color: black;">
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
        <h1 style="position: relative; font-size: 80px; color: rgb(111, 233, 81); text-align: center;top: 60px;"><b>SUCCESSFUL <br>PURCHASE<br>CHECK YOUR EMAIL</b></h1>
        <a href="Homepage.php" class="herobtn" style="position: relative; text-align: center; top: 120px; left: 40%;">GO BACK TO HOME</a>
    </body>
</html>
