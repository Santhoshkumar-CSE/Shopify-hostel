<?php
@include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About us</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<section class="about">
   <div class="row">
      <div class="box">
         <img src="images/shopify.png" alt="">
         <h3>why choose us?</h3>
         <p>We are here to help you...</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
      <div class="box">
         <img src="images/campus.jpg" alt="">
         <h3>what we provide?</h3>
         <p>A complete solution for hostel problems like new beds, new buckets, and text books...</p>
         <a href="shop.php" class="btn">our website</a>
      </div>
   </div>
</section>

