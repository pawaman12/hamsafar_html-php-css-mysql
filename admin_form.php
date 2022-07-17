
<!-- package table -->
<?php

   $connection = mysqli_connect('localhost','root','','hamsafar');
   error_reporting(0);
   if(isset($_POST['done'])){
      $admin_name= $_POST['admin_name'];
      $type = $_POST['type'];
      $str_from = $_POST['str_from'];
      $country = $_POST['country'];
      $city = $_POST['city'];
      $duration  = $_POST['duration'];
      
      

      $request = " insert into package_form(admin_name, type, str_from, country, city, duration) values('$admin_name','$type','$str_from','$country','$city','$duration') ";
      mysqli_query($connection, $request);

      header('location:admin_page.php'); 
    
   }else{
      echo 'something went wrong please try again!';
   }

?>


<!-- offer table -->
<?php

   $connection = mysqli_connect('localhost','root','','hamsafar');

   if(isset($_POST['done'])){
      $admin_name = $_POST['admin_name'];
      $p_id = $_POST['p_id'];
      $percentage = $_POST['percentage'];
      $exception = $_POST['exception'];
      $starting_date = $_POST['starting_date'];
      $ending_date = $_POST['ending_date'];

      $request = " insert into offer_form(admin_name, p_id, percentage, exception, starting_date, ending_date) values('$admin_name','$p_id','$percentage','$exception','$starting_date','$ending_date') ";
      mysqli_query($connection, $request);

      header('location:admin_page.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>

