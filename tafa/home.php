<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">Quick options</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      
      <?php
         }else{ 
      ?>
      <div class="box" style="text-align: center;">
         <h3 class="title">Please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
         </div>
      </div>
      <?php
      }
      ?>

       <div class="box">
         <h3 class="title">Top categories</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-atom"></i><span>Physics</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>Chemistry</span></a>
            <a href="#"><i class="fas fa-calculator"></i><span>Mathematics</span></a>
            <a href="#"><i class="fas fa-syringe"></i><span>Biology</span></a>
            <a href="#"><i class="fas fa-music"></i><span>Music</span></a>
          
         </div>
   
      </div>

      <div class="box">
         <h3 class="title">Popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-book-open"></i><span>FORM ONE</span></a>
            <a href="#"><i class="fas fa-book-reader"></i><span>FORM TWO</span></a>
            <a href="#"><i class="fab fa-medapps"></i><span>Holiday assignments</span></a>
            <a href="#"><i class="fab fa-react"></i><span>FORM THREE</span></a>
            <a href="#"><i class="fas fa-graduation-cap"></i><span>FORM FOUR</span></a>
            
         </div>
      </div>


   </div>

</section>

<!-- quick select section ends -->

<!-- courses section starts  -->

<<section class="courses">

   <h1 class="heading">Download holiday assignments</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
           
            <div class="info">
               <h3>FORM ONE</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span></span>
         </div>
         <h3 class="title">Complete form One holiday assignments</h3>
         <a href="https://files.wegopublishers.co.ke/?dir=uploads%2FFORM-1---HOLIDAY-ASSIGNMENTS" class="inline-btn">Download</a>
      </div>

      <div class="box">
         <div class="tutor">
           
            <div class="info">
               <h3>FORM TWO</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span></span>
         </div>
         <h3 class="title">Complete form two holiday assignments</h3>
         <a href="https://files.wegopublishers.co.ke/?dir=uploads%2FFORM-2---HOLIDAY-ASSIGNMENTS" class="inline-btn">Download</a>
      </div>

      <div class="box">
         <div class="tutor">
           
            <div class="info">
               <h3>FORM THREE</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span></span>
         </div>
         <h3 class="title">Complete form three holiday assignments</h3>
         <a href="https://files.wegopublishers.co.ke/?dir=uploads%2FFORM-3---HOLIDAY-ASSIGNMENTS" class="inline-btn">Download</a>
      </div>

      <div class="box">
         <div class="tutor">
          
            <div class="info">
               <h3>FORM FOUR</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span></span>
         </div>
         <h3 class="title">Complete form four holiday assignments</h3>
         <a href="https://files.wegopublishers.co.ke/?dir=uploads%2FFORM-4---HOLIDAY-ASSIGNMENTS" class="inline-btn">Download</a>
      </div>
</section>


<!-- courses section ends -->












<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>