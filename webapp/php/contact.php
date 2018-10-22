<?php
if (isset($_POST['submit'])) {
	  $name = $_POST['name'];
      $email = $_POST['email'];
      $textarea = $_POST['message'];    
      
	  echo "Your message was sent succesfully, thank you";  

} else {
	
      echo "Could not send the message, please try again"; 
}

?>



