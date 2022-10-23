<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-2">
      <div class="flex">
      <a href="#" class="logo"> <img src="images/logoju.png" width="300px" height="60px"> JU Library </a>

         <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="log.php"><span class="btn active login-btn ">login</span></a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
         <div class="user-box">
         <div id="user-btn" href="log.php"></div>
         </div>
         
      </div>
   </div>

</header>