
<!DOCTYPE html>
<html>
<head>
    <title>Check Out</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background: url('space_for_signup.gif') no-repeat center center fixed;
            background-size: cover;
        }
        .card {
            margin: 50px auto;
            width: 300px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .centered-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .btn-center {
            text-align: center;
        }
        .card h2 {
            margin-top: 150px;
        }
       

    </style>
</head>
<body>
    <div class="flex-container">
    
            <div class="card">
            <form method="post">
           <div class="form-group">
               <label for="inputName">Name</label>
               <input type="text" class="form-control" id="inputName" name="UserName" placeholder="Your Name">
           </div>
           <div class="form-group">
               <label for="inputEmail4">Email</label>
               <input type="email" class="form-control" id="inputEmail4" name="Email" placeholder="Email">
           </div>
           <div class="form-group">
               <label for="inputCity">City</label>
               <input type="text" class="form-control" id="inputCity" name="City">
           </div>
           <div class="form-group">
               <label for="inputCity">Address</label>
               <input type="text" class="form-control" id="inputAddress" name="TheAddress">
           </div>
           <div class="form-group">
               <label for="inputPhone">Phone Number</label>
               <div class="input-group">
                  <div class="input-group-prepend">
                      <select class="custom-select" style="max-width: 120px;" id="CountryCode" name="CountryCode">
                          <option value="+1">+1 (USA)</option>
                          <option value="+92">+92 (PAK)</option>
                          <option value="+91">+91 (IND)</option>
                      </select>
                  </div>
                  <input type="text" class="form-control" id="inputPhone" name="PhoneNumber" placeholder="Enter your phone number">
               </div>
               <small id="phoneError" class="form-text text-danger"></small>
           </div>
           <div class="form-group">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck">
                  <a href="terms.php" target="_blank">I agree with Terms & Conditions</a>
               </div>
           </div>
       
            </div>
        
            <div class="card">
               
               <div class="form-group">
                 <label>Payment Method</label>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="paymentMethod" id="masterCard" value="Master Card">
                     <label class="form-check-label" for="masterCard">Master Card</label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="COD">
                     <label class="form-check-label" for="cod">COD</label>
                 </div>
                 <button type="submit" class="btn btn-primary" name="CheckOut">Check Out</button>
              
        </div>
                </form>
    </div>
    </div>
    <script>
        document.getElementById('inputPhone').addEventListener('input', function () {
            var phoneNumber = this.value.replace(/\D/g, '');
            var maxLength = 11;

            if (phoneNumber.length > maxLength) {
                document.getElementById('phoneError').textContent = 'Phone number cannot exceed ' + maxLength + ' digits.';
            } else {
                document.getElementById('phoneError').textContent = '';
            }
        });
    </script>
</body>
</html>

<?php
include("conncheck.php");
session_start();


if (isset($_POST["CheckOut"])) {
  $userName = $_POST["UserName"];
  $userEmail = $_POST["Email"];
  $_SESSION['userEmail'] = $userEmail;
  $userCity = $_POST["City"];
  $userPhNumber = $_POST["CountryCode"].$_POST["PhoneNumber"];
  $countryCode = $_POST["CountryCode"];
  $theAdress=$_POST["TheAddress"];
  if (isset($_POST["gridCheck"])) {
      if (!empty($userEmail) && !empty($userCity) && !empty($userName)) {
          if (!isset($_POST["paymentMethod"])) {
              echo "Please select a payment method.";
              exit();
          }
          $paymentMethod = $_POST["paymentMethod"];
          $query = "INSERT INTO customerstable (UserName, Email, City, PhoneNumber, TheAddress, PayementMethod)
           VALUES ('$userName', '$userEmail', '$userCity', '$userPhNumber', '$theAdress', '$paymentMethod')";
           if (mysqli_query($conn, $query)) {
            if (isset($_POST["CheckOut"])) {
            echo "<script>window.location.href='Successcheckout.php';</script>";
            exit();
          } else {
            echo "<script>window.location.href='Failurecheckout.php';</script>";
            exit();
          }
      } else {
          echo "You cannot checkout without filling all the fields!!";
      }
  } else {
      echo "Please accept the Terms & Conditions.";
  }
}
}
?>