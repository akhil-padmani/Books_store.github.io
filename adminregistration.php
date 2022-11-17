<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select =  "SELECT * FROM `admin` WHERE email = '$email' AND password = '$pass'" or die('query failed');

   $result=mysqli_query($conn,$select);
   if(mysqli_num_rows($result) > 0)
   {
      $message[] = 'user already exist!';
   }
   else
   {
      if($pass != $cpass)
      {
         $message[] = 'confirm password not matched!';
      }
      else
      {
         $insert ="INSERT INTO `admin`(name, email, password) VALUES('$name', '$email', '$cpass')" or die('query failed');
         mysqli_query($conn,$insert);
         $message[] = 'registered successfully!';
         header('location:adminlogin.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="register.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" style="background-color:white; color:blue; padding:10px; margin-right:85%;">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
};
?>
   
<div class="form-container">

   <form action="" method="POST">
      <!-- <h3>register now</h3> -->
      <aside>
   <img src="images/login3.jpg" alt="">
  </aside> 
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
      <input type="submit" name="submit" value="register now" class="btn">
      <!-- <p>already have an account? <a href="adminlogin.php">login now</a></p> -->
   </form>

</div>

</body>
</html>