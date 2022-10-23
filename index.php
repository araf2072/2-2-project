
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Welcome to JU libraray.</h3>
      <p>The more that you read, the more things you will know. The more that you learn, the more places you’ll go.</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>


<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/content-img.png" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Established in 1985 , the JU library is equipped with a huge collection of books. Located behind the monument of “Sangshaptak”, the library is conveniently placed between the main academic buildings and the dormitories. There are more than 110,000 books, 14,000 hardbound journals, 22,000 online journals and 36 on-line journals database in the library. The library can accommodate over 500 students at a time. Airy with ample glass openings, the library is an elegant piece of architecture.</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>If you have any query then contact with us</p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>