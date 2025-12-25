<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="heading_main.css">
<link rel="stylesheet" href="workouts.css">
<link rel="stylesheet" href="bottom_main.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">  

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fugaz+One&family=Shrikhand&display=swap" rel="stylesheet">

  <title>Workouts | HAPPY FITNESS</title>
</head>
  <body>

    <div class="heading_main">
        <div class="right_heading_main">
          <img class="img_logo" src="images/Hp_logo.png" alt="HAPPY FITNESS'S LOGO">
        </div>
        <div class="middle_heading_main"> 
          <a  href="./index.php"><button class="Workouts" >Main</button></a>
         
        </div>
        <div class="left_heading_main">
          <input class="search_main" type="text" placeholder="Search" >
          <img class="profil_icon" src="images/profile_icon.jpg" alt="profil_icon">
        </div>
    </div>
    <div class="middle_workouts">
        <div class="workouts_p">
          <h1 style="text-align:center;">
              Welcome <?php echo htmlspecialchars($_SESSION['name']); ?> to Happy Fitness 
          </h1>
                  
          <p class="welcome_workouts1"><span class="symbol_workouts_span">&#11167;</span>Choose the muscle you want to train<span class="symbol_workouts_span">&#11167;</span>  </p>
        </div>
        <div class="workouts_img">
          <a href="./shoulder.php"><img class="workouts_img2" src="images/shoulder1.png"></a>
          <a href="./triceps.php"><img class="workouts_img2" src="images/triceps3.png"></a>
          <a href="./forearm.php"><img class="workouts_img2" src="images/forarms4.png"></a>
          <a href="./forearm.php"><img class="workouts_img2" src="images/forarms5.png"></a>
          <a href="./biceps.php"><img class="workouts_img2" src="images/biceps6.png"></a>
          <a href="./chest.php"><img class="workouts_img2" src="images/chest7.png"></a>
          <a href="./abs.php"><img class="workouts_img2" src="images/abs8.png"></a>
          <a href="./abs.php"><img class="workouts_img2" src="images/abs9.png"></a>
          <a href="./back.php"><img class="workouts_img2" src="images/lats10.png"></a>
          <a href="./back.php"><img class="workouts_img2" src="images/traps11.png"></a>
          <a href="./back.php"><img class="workouts_img2" src="images/lowerback12.png"></a>
          <a href="./leg.php"><img class="workouts_img2" src="images/glotes13.png"></a>
          <a href="./leg.php"><img class="workouts_img2" src="images/hamstrings14.png"></a>
          <a href="./leg.php"><img class="workouts_img2" src="images/calves15.png"></a>
          <a href="./leg.php"><img class="workouts_img2" src="images/quads16.png"></a>
        </div>
    </div>
    <div class="bottom_main_page">
      <p class="contact_us"><u>Contact US</u></p>
      <p class="bottom_text1">HappyFitness - Your Fitness Companion</p>
      <p class="bottom_text2">Empowering you to achieve your fitness goals with smart tracking and personalized insights.</p>
      <p class="phone"><span class="phone_span"> <i style="font-size:24px" class="fa">&#xf095;</i></span>+90 &#10088;534&#10089; 705 20 83 </p>
      <p class="mail"><span class="mail_span"><i style="font-size:24px" class="fa">&#xf0e0;</i></span>abdelmoksset667&#64;gmail.com</p>
    </div>
  </body>
</html>
