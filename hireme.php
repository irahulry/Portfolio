<?php
include("db.php");
$plan = "not";
$msg = " ";
if(isset($_GET['response'])){
    if($_GET['response']==1){
        $msg = "<h1 id='msg'>Your response has been recorded!</h1>";
    }
    if($_GET['response']==0){
        $msg = "<h1 id='msg'>Error while submitting! Please contact <a href='https://instagram.com/irahulry/'>HERE</a></h1>";
        $query1 = mysqli_query($con,"insert into `hire` (`id`,`name`,`email`,`project`,`message`)
        values (NULL,`null`,`null`,`null`,`null`) ");
    }
}
if(isset($_GET['plan'])){
    $plan = $_GET['plan'];
}
if(isset($_POST['hire'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email =mysqli_real_escape_string($con, $_POST['email']);
    $project = mysqli_real_escape_string($con,$_POST['work']);
    $msg = mysqli_real_escape_string($con,$_POST['message']);
    
        $query = mysqli_query($con,"insert into hire (`id`,`plan`,`name`,`email`,`project`,`message`)
        values (NULL,'{$plan}','{$name}','{$email}','{$project}','{$msg}') ");
        if($query){
            echo "<script>window.open('hireme.php?response=1','_self')</script>";
        }
        else{
            echo "<script>window.open('hireme.php?response=0','_self')</script>";
        }
}



?>
<html>
<head>
    <title>Rahul</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js" ></script><meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body id="body">
<!-- MPVE TO UP BOTTOM -->
<div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- NAVIGATION MENU -->
<nav>
    <div class="navbar ">
        <div class="logo"><a href="#">Rahul.</a></div>
        <ul class="menu">
            <li><a href="index.html#home">Home</a></li>
            <li><a href="index.html#about">About</a></li>
            <li><a href="index.html#skills">Skills</a></li>
            <li><a href="index.html#project">Projects</a></li>
            <li><a href="index.html#services">Services</a></li>
            <li><a href="index.html#pricing">Pricing</a></li>
            <li><a href="index.html#contact">Contact</a></li>
            <div class="cancel-btn">
                <i class="fas fa-times"></i>
            </div>
        </ul>
        <div class="media-icons">
        <a href="http://instagram.com/irahulry/"><i class="fab fa-instagram"></i></a>
        
        
        </div>
    </div>

    <div class="menu-btn" >
        <i class="fas fa-bars"></i>
    </div>
</nav>
<!-- HOME SECTION START -->
<section class="hire" id="hire" >
    <div class="hire-content" data-aos="fade-up">
       <center> <?php echo $msg; ?></center>
        <form method="post" class="form">
            <div>
                <input type="hidden" value="<?php echo $plan; ?>" name="plan" id="plan"/><br/>
                <input type="text" placeholder="Enter your name..." name="name" id="name"/><br/>
                <input type="email" placeholder="Enter your email..." name="email" id="email"/><Br/>
                <input type="text" id="work" name="work" placeholder="What type of project are you hiring for?"/><br/>
                <textarea id="message" name="message" placeholder="YOUR MESSAGE..."></textarea><br/><br/>
                <input type="submit" class="btn" value="HIRE" id="hire" name="hire"/><br/><br/><br/>

                <a href="mailto:trphpprogram@gmail.com">
                    <input style="cursor:pointer;width:130%;" type="text" value="trphpprogram@gmail.com"/>
                </a>
            </div>
        </form>
    </div>
</section>

<!-- CONTACT SECTION START -->

<section class="contact" id="contact">

    <div class="content" data-aos="fade-up" data-aos-offset="250">
        <div class="title"><span>Contact Me</span></div>
    
        <div class="text">
            <div class="topic">Have Any Projects?</div>
            <p>Please contact if you have any Project or idea or need further explanation on packages. I will help you choose the best fit for you.
               </p>
            <a href="#">
                <div class="button">
                    <button>Let's Chat</button>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- FOOTER SECTION START -->

<footer>
    <div class="text">
        <span>Created By <a href="#about">Rahul</a> | &#169; 2021 All Rights Reserved</span>
    </div>
</footer>

<script src="js/js.js"></script>

  <script>
    AOS.init({
        offset: 150,
        duration: 500,
    });
    </script>
   
  
      
</body>
</html>