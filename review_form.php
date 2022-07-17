
<!-- Review table -->
<?php

   $connection = mysqli_connect('localhost','root','','hamsafar');
   error_reporting(0);
   if(isset($_POST['send'])){
      $rname= $_POST['r_name'];
      $remail = $_POST['r_email'];
      $review = $_POST['review'];
      
      

      $request = " insert into review_form(r_name, r_email, review) values('$rname','$remail','$review') ";
      mysqli_query($connection, $request);

      header('location:review.php'); 
    
   }else{
      echo 'something went wrong please try again!';
   }

?>