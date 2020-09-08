<? php 
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $visitor_email = $_POST['youremail'];
  $message = $_POST['Message'];
  
  $email_from = 'bthsacschemclub@gmail.com';
  
  $email_subject = "New Form Submission";
  
  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email .\n".
                    "User Message: $message.\n";
                    
        
        $to = "ltsang5994@bths.edu";
        
       $headers = "From: email_from \r\n";
       
       $headers .= "Reply-To: $visitor_email \r\n";
       
       mail($to,$email_subject,$email_body,$headers);
       
       header("Location:index.html");
?>
