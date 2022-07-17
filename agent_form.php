<!-- travel agents table -->

<?php

   $connection = mysqli_connect('localhost','root','','hamsafar');
   error_reporting(0);
   if(isset($_POST['send'])){
      $y_name= $_POST['y_name'];
      $agent_name = $_POST['agent_name'];
      $reason = $_POST['reason'];
      
      $request = " insert into agent_form(y_name, agent_name, reason) values('$y_name','$agent_name','$reason') ";
      mysqli_query($connection, $request);

      header('location:travelagent.php'); 
    
   }else{
      echo 'something went wrong please try again!';
   }

?>