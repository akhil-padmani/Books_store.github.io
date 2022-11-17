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
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="orders.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3><span>&hearts;</span>&nbsp;your orders&nbsp;<span>&hearts;</span></h3>
</div>

<section class="placed-orders">

   <h1 class="title"></h1>

   <div class="box-container">

      <?php
         $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
      ?>
      <div class="box">
         <p> &#128508;&nbsp;placed on : <span><?php echo $fetch_orders['placed_on']; ?></span> </p><hr>
         <p> &#128508;&nbsp;name : <span><?php echo $fetch_orders['name']; ?></span> </p><hr>
         <p> &#128508;&nbsp;number : <span><?php echo $fetch_orders['number']; ?></span> </p><hr>
         <p> &#128508;&nbsp;email : <span><?php echo $fetch_orders['email']; ?></span> </p><hr>
         <p> &#128508;&nbsp;address : <span><?php echo $fetch_orders['address']; ?></span> </p><hr>
         <p> &#128508;&nbsp;payment method : <span><?php echo $fetch_orders['method']; ?></span> </p><hr>
         <p> &#128508;&nbsp;your orders : <span><?php echo $fetch_orders['total_products']; ?></span> </p><hr>
         <p> &#128508;&nbsp;total price : <span>&#8377;<?php echo $fetch_orders['total_price']; ?>/-</span> </p><hr>
         <p> &#128508;&nbsp;payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending') ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
         </div>
      <?php
       }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

</section>








<?php include 'footer.php'; ?>


</body>
</html>