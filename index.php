<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   <link rel="stylesheet" href="styles.css">

   

</head>
<body>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
    <!-- header section starts  -->

<header class="header">
<div id="menu-btn" class="fas fa-bars"></div>





<a href="#home" class="logo">Portfolio</a>

<nav class="navbar">
   <a href="#home" class="active">home</a>
   <a href="#about">about</a>
   <a href="#services">services</a>
   <a href="#contact">contact</a>
   <a href="#login">Login</a>
   <a href="#contact">Register</a>
</nav>
<div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>
</header>
<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy7q2d5VfnlGWDFHxopN3tkgN6AqLS5riTEOvMoFH3zg&usqp=CAU&ec=48665701">

   <div class="content">
      <h3 data-aos="fade-up">hi, i am sana shaikh</h3>
      <span data-aos="fade-up">web developer</span>
      <p data-aos="fade-up">Strong design and intrigation with intuitive problem ofing is. Passionate about implementing and launching Ability to translate bushes requirements into technical solutions. Looking to start the cameras an entry-level software engineer with
reputed firm disen by technology.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

   


</section>
<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Strong design and intrigation with intuitive problem ofing is. Passionate about implementing and launching Ability to translate bushes requirements into technical solutions. Looking to start the cameras an entry-level software engineer with
reputed firm disen by technology</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span>Pooja Kumari </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> Kumaripooja4020@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Bhubaneswar, india </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> 6200459413 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span>Fresher </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">download CV</a>

   </div>
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>60%</span></h3> </div>
      </div>

   </div>


   </section>
   <!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

<form action="" method="post">
   <div class="flex">
      <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
      <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
   </div>
   <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
   <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
   <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
</form>

<div class="box-container">

   <div class="box" data-aos="zoom-in">
      <i class="fas fa-phone"></i>
      <h3>phone</h3>
      <p>6200459413</p>
   </div>

   <div class="box" data-aos="zoom-in">
      <i class="fas fa-envelope"></i>
      <h3>email</h3>
      <p>kumaripooja4020@gmail.com</p>
   </div>

   <div class="box" data-aos="zoom-in">
      <i class="fas fa-map-marker-alt"></i>
      <h3>address</h3>
      <p>Bhubaneswar, india </p>
   </div>

</div>

</section>

<!-- contact section ends -->





<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>



