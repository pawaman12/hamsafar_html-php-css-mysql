
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!--Logo-->
   <link rel="shortcut icon" type="image/png" href="images/logoham.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


   

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">HAMSAFAR.</a>

   <nav class="navbar">
   <a href="home1.php">home</a>
      <a href="about1.php">about</a>
      <a href="package1.php">package</a>
      <a href="book.php">book</a>
      <a href="travelagent.php">travel agent</a>
      <a href="review.php">Review</a>
      <a <span>Welcome Admin</span></a>

      <a href="logout.php">logout</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Admin</h1>
</div>

<!-- packages section starts  -->

<section class="package">

   <h1 class="heading-title">Add A New Package!</h1>

   <form action="admin_form.php" method="post" class="admin-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="admin_name">
         </div>
         <div class="inputBox">
            <span>package type :</span>
            <input type="text" placeholder="economical/ decent/ business class" name="type">
         </div>
         <div class="inputBox">
            <span>starting from (Rs) :</span>
            <input type="number" placeholder="starting from(Rs)" name="str_from">
         </div>
         <div class="inputBox">
            <span>country :</span>
            <input type="text" placeholder="enter the country" name="country">
         </div>
         <div class="inputBox">
            <span>city :</span>
            <input type="text" placeholder="enter the city" name="city">
         </div>
         <div class="inputBox">
            <span>duration :</span>
            <input type="number" placeholder="enter the no of days" name="duration">
         </div>
      </div>

      <input type="submit" value="DONE" class="btn" name="done">
      

   </form>

</section>

<!-- packages section ends -->

<!-- offer section starts  -->

<section class="offer">

   <h1 class="heading-title">Add A New Offer!</h1>

   <form action="admin_form.php" method="post" class="admin-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="admin_name">
         </div>
         <div class="inputBox">
            <span>package id:</span>
            <input type="number" placeholder="enter package id" name="p_id">
         </div>
         <div class="inputBox">
            <span>discount percentage</span>
            <input type="number" placeholder="enter discount percentage (%)" name="percentage">
         </div>
         <div class="inputBox">
            <span>exceptions:</span>
            <input type="text" placeholder="enter the exceptions" name="exception">
         </div>
         <div class="inputBox">
            <span>starting date:</span>
            <input type="date" placeholder="enter starting date" name="starting_date">
         </div>
         <div class="inputBox">
            <span>ending date:</span>
            <input type="date" placeholder="enter ending date" name="ending_date">
         </div>
      </div>

      <input type="submit" value="DONE" class="btn" name="done">
      

   </form>

</section>

<!-- booking section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home1.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about1.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package1.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="travelagent.php"> <i class="fas fa-angle-right"></i> travel agent</a>
         <a href="logout.php"> <i class="fas fa-angle-right"></i> logout</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="questions.php"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> HAMSAFAR@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Karachi, Pakistan - 74200 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/profile.php?id=100007470010994"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/hamsafa69362489"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://instagram.com/syed_aali?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://bit.ly/3uCrII8"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>HAM-H</span> |aap ke travel plans 'HAM' dekh lenge! </div>

</section>

<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="script.js"></script>

</body>
</html>