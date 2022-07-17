<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!--Logo-->
    <link rel="shortcut icon" type="image/png" href="images/logoham.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="script.js"></script>

</head>
<body>
<section class="header">

<a href="home.php" class="logo">HAMSAFAR.</a>

<nav class="navbar">
      <a href="home1.php">home</a>
      <a href="about1.php">about</a>
      <a href="package1.php">package</a>
      <a href="book.php">book</a>
      <a href="travelagent.php">Travel agent</a>
      <a href="review.php">Review</a>
      <a href="logout.php">logout</a>
   </nav>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- header section ends -->

 <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
    <h1>Questions</h1>
 </div>





<section class="booking">

   <h1 class="heading-title">What Questions do you have?</h1>

   <form action="question_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="q_name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="q_email">
         </div>
         <div class="inputBox">
            <span>question :</span>
            <input type="text" placeholder="your question" name="question">
         </div>
         
      <input type="submit" value="submit" class="btn" name="send">
      

   </form>

</section>



<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home1.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about1.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package1.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         <a href="travelagent.php"> <i class="fas fa-angle-right"></i> travel agent</a>
         <a href="review.php"> <i class="fas fa-angle-right"></i> review</a>
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
         <a href="#"> <i class="fas fa-map"></i> Karach, Pakistan - 74200 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/profile.php?id=100007470010994"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/hamsafa69362489"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://instagram.com/syed_aali?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://bit.ly/3uCrII8"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>HAM-H</span> | aap ke travel plans 'HAM' dekh lenge! </div>

</section>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="script.js"></script>
    
</body>
</html>