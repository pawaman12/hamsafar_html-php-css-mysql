<!-- questions table -->

<?php

   $connection = mysqli_connect('localhost','root','','hamsafar');
   error_reporting(0);
   if(isset($_POST['send'])){
      $q_name= $_POST['q_name'];
      $q_email = $_POST['q_email'];
      $question = $_POST['question'];
      
      $request = " insert into question_form(q_name, q_email, question) values('$q_name','$q_email','$question') ";
      mysqli_query($connection, $request);

      header('location:questions.php'); 
    
   }else{
      echo 'something went wrong please try again!';
   }

?>