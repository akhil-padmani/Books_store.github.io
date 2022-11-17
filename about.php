<?php

include 'dbcon.php';

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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="about.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading3">
   <h3> <span> &hearts; </span> &nbsp;about us&nbsp; <span> &hearts;</span></h3>
</div>



<section class="reviews">

   <h1 class="title">client's reviews</h1><br>

   <div class="box-container">

      <div class="box">
         <img src="images/m1.jpeg" alt="">
         <p>IT'S A GREAT STORE AND SELLING HELPFUL BOOKS AND GIVES AMAZING DELIVERY.</p>
         <h3> &copy; Goyani Nikhil</h3>
      </div>

      <div class="box">
         <img src="images/m2.jpg" alt="">
         <p>IT'S A GREAT STORE AND SELLING HELPFUL BOOKS AND GIVES AMAZING DELIVERY.</p>
         <h3>&copy; Ayush Danani </h3>
      </div>

      <div class="box">
         <img src="images/m4.jpg" alt="">
         <p>IT'S A GREAT STORE AND SELLING HELPFUL BOOKS AND GIVES AMAZING DELIVERY.</p>
         <h3>&copy; Man Bhingaradiya </h3>
</div>
   </div>

</section><br><br><br><br>

<section class="authors">

   <h1 class="title">Great authors</h1><br>

   <div class="box-container">

      <div class="box">
         <img src="images/a1.jpeg" alt="">
         <p>IT'S A GREAT STORE AND SELLING HELPFUL BOOKS AND GIVES AMAZING DELIVERY.</p>
         <h3> &copy; Ravindranath Tagore </h3>
      </div>

      <div class="box">
         <img src="images/a2.jpg" alt="">
         <p>IT'S A GREAT STORE AND SELLING HELPFUL BOOKS AND GIVES AMAZING DELIVERY.</p>
         <h3>&copy; Javerchand Meghani</h3>
      </div>

      <div class="box">
         <img src="images/a3.jpg" alt="">
         <p>IT'S A GREAT STORE AND SELLING HELPFUL BOOKS AND GIVES AMAZING DELIVERY.</p>
         <h3>&copy; Ramanujan </h3>
</div>
   </div>
</section>
<br><br><br><br>





<?php include 'footer.php'; ?>
</body>
</html>