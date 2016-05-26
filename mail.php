<?php
  $email = $_POST['email'];
  $message = $_POST['message'];
  $email_subject = "CONTACTUS DETAILS";
  $email_body = "You have received a new message\n".
              "Here is the Email: $email\n".
              "Here is the Message: $message\n".
  $to = "sweetkannan05@gmail.com";
  // $to = "info@etekchnoservices.com";
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";
  $send=mail($to,$email_subject,$email_body,$headers);
  if($send==1) { ?>
    <script>
      alert('Mail has been sent successfully.Our excutive will contact you soon.');
      window.location = "index.html"
    </script>
  <?php 
  } else { ?>
    <script>
      alert('Mail has been sent not successfully due to some problem.Please try again.');
      window.location = "index.html"
    </script>
  <?php }
  ?>