  <?php
     if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $to = "sabine.koch87@gmail.com";
        $subject = "New Message from Contact Form";
        $body = "Name : $nameEmail: $email$message";
        mail($to,$subject,$body);
        echo "Danke für die Nachricht!";
     }
  ?>