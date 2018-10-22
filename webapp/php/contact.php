<?php
if (isset($_POST['submit'])) {
	  $name = $_POST['name'];
      $email = $_POST['email'];
	  $phone = $_POST['phone'];
      $textarea = $_POST['textarea'];
	  $promotional = $_POST['promotional'];     
      
	  echo "Your message was sent succesfully, thank you";  

} else {
	
      echo "Could not send the message, please try again"; 
}

?>



