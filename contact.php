<?php
 $conn = mysqli_connect("localhost", "root", "", "lms") or die("connection failed");
	
 session_start();
	if (isset($_POST['send'])) {
		$name = $_POST["name"];
      $email = $_POST["email"];
      $number = $_POST["number"];
      $message=$_POST["message"];

      $input_error = array();
      if (empty($name)) {
         $input_error['name'] = "The Name Filed is Required";
      }
      if (empty($email)) {
         $input_error['email'] = "The Email Filed is Required";
      }
      if (empty($number)) {
         $input_error['number'] = "The Number Filed is Required";
      }
      if (empty($message)) {
         $input_error['message'] = "The Message Filed is Required";
      }

		
	$query = "INSERT INTO 'messages'('name' , 'email', 'number','message') VALUES ('$name','$email','$number','$message' );";
									$result = mysqli_query($db_con,$query) or die("Query Failed!");
                           if (empty($email)||empty($message)){
									header('Location: contact.php?insert=success');
								}else{
									header('Location: contact.php?insert=error');
								}
						
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/stylecon.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
   <?php include 'header.php';?>

    <div class="container">
      <span class="big-circle"></span>
      <img src="images/img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="images/img/location.png" class="icon" alt="" />
              <p>Jahangirnagar University,Savar,Bangladesh</p>
            </div>
            <div class="information">
              <img src="images/img/email.png" class="icon" alt="" />
              <p>juniv.edu</p>
            </div>
            <div class="information">
              <img src="images/img/phone.png" class="icon" alt="" />
              <p>0177-777-9999</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="number" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?> 

    <script src="js/script.js"></script>
   
  </body>
</html>
