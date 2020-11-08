<?php
include_once 'database.php';
if(isset($_POST['save']))
{	
	$yourname=$_POST['yourname'];
	$aboutme=$_POST['aboutme'];
	$postgraduation=$_POST['postgraduation'];
	$graduation=$_POST['graduation'];
	$school=$_POST['school'];
	$skill1=$_POST['skill1'];
	$skill2=$_POST['skill2'];
	$skill3=$_POST['skill3'];
	$skill4=$_POST['skill4'];	
	$skill5=$_POST['skill5'];
	$project1=$_POST['project1'];
	$project2=$_POST['project2'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$email=$_POST['email'];

$sql = "INSERT INTO finaltable (yourname,aboutme,postgraduation,graduation,school,skill1,skill2,skill3,skill4,skill5,project1,project2,phone,address,email) VALUES ('$yourname','$aboutme','$postgraduation','$graduation','$school','$skill1','$skill2','$skill3','$skill4','$skill5','$project1','$project2','$phone','$address','$email')";



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span><?php echo "$yourname"; ?></span> <span></span></h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#education" data-after="Education">Education</a></li>
		<li><a href="#skills" data-after="Skills">Skills</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
			
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->



 <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-5.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About ME<span></span></h1>
        <h2>HELLO EVERYONE!</h2>
        <p><?php echo "$aboutme"; ?></p>
      			
			
	</div>
	
    </div>
  </section>
  <!-- End About Section -->




<!-- Service Section -->
  <section id="education">
<h1 class="section-title"><span>EDUCATION</span></h1>
<BR><BR>
<center><div style="background-color:#EAEDED;padding:20px;width:50%">
  <h1 style="font-size:30px;color:black">MASTERS</h1>
  <p style="color:black"><?php echo "$postgraduation"; ?></p>
  
</div> </center>
<center><div style="background-color:#F2F3F4;padding:20px;width:50%">
  <h1 style="font-size:30px;color:black">GRADUATION</h1>
  <p style="color:black"><?php echo "$graduation"; ?></p>
  
</div> </center>
<center><div style="background-color:#EAEDED;color:black;padding:20px;width:50%">
  <h1 style="font-size:30px;color:black">SCHOOL</h1>
  <p><?php echo "$school"; ?></p>
  
</div> </center>

</section>

 
  <!-- End Service Section -->



<section id="skills">
    <div class="projects container">
      <div class="projects-header">
<style>
*{
list-style: none;
padding:0;
font-family: sans-serif;
}

body{
	background: white;
}

.skills{
width: 500px;
color: black;
margin: 60px auto;;

}
.skills li{
margin: 20px 0;
}

.bar{
background: #353b48;
display: block;
height: 2px;
border: 1px solid rgba(0,0,0,0.3);
border-radius: 3px;
overflow: hidden;
box-shadow: 0 0 10px #2187e7b3;
}
.bar span{
height: 2px;
float: left;
background: #2187e7;
}


.cpp{
width: 90%;
animation: cpp 2s;
}

.java{
width: 75%;
animation: java 2s;
}

.ds{
width: 90%;
animation: ds 2s;
}

.dbms{
width: 90%;
animation: dbms 2s;}

.os{
width: 90%;
animation: os 2s;
}

@keyframes cpp{
0%{
	width: 0%;
}
100%{
	width: 90%;
}
}
@keyframes java{
0%{
	width: 0%;
}
100%{
width: 60%;
}
}
@keyframes ds {
0%{
	width: 0%;
}
100%{
width: 60%;
}
}

@keyframes dbms{
0%{
	width: 0%;
}
100%{
width: 80%;
}
}
@keyframes os{
0%{
	width: 0%;
}
100%{
width: 70%;
}
}





</style>




<div class="skills">
	 <div><h1 class="section-title"><span>MY SKILLS</span></h1></div>
		<div><br><br><br><br></div>
	
	<li>
	<h1 style="font-size:30px"><?php echo "$skill1"; ?></h1>
	<span class="bar">
	<span class="cpp"></span></span>
	<li>
	<div><br></div>
	<li>
	<h1 style="font-size:30px"><?php echo "$skill2"; ?></h1>
	<span class="bar">
	<span class="java"></span></span>
	<li>
	<div><br></div>
	<li>
	<h1 style="font-size:30px"><?php echo "$skill3"; ?></h1>
	<span class="bar">
	<span class="ds"></span></span>
	<li>
	<div><br></div>
	<li>
	<h1 style="font-size:20px"><?php echo "$skill4"; ?></h1>
	<span class="bar">
	<span class="dbms"></span></span>
	<li>
	<div><br><br></div>
	<li><h1 style="font-size:30px"><?php echo "$skill5"; ?></h1>
	<span class="bar">
	<span class="os"></span></span>
	<li>
	<div><br><br><br><br></div>

</div> 
</a>
</section>



<section id="projects">
 
        <h1 class="section-title"><span>PROJECTS</span></h1>
        <p>Here is a brief about my Projects</p>

    <div style="margin-left: 10%;background-color: #D6DBDF;width: 35%;float: left;">
<h1 style="font-size:30px;color:black"><br><br>WEB DEVELOPMENT<br><br></h1>
  <p style="color:black"><?php echo "$project1"; ?><br><br><br><br><br></p>
</div></center>
  </div>
  <center> <div style="margin-left:10%;margin-right:10%; background-color:#D6DBDF;width: 35%;float: left;">
<h1 style="font-size:30px;color:black"><br><br>ANDROID APP DEVELOPMENT<br><br></h1>
  <p style="color:black"><?php echo "$project2"; ?><br><br><br></p>
</div></center>
  </div>
   </div></div>   

</section>
  
 







  

  

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+91<?php echo "$phone"; ?></h2>
          </div>
        </div>
        <div class="contact-item">
         
          <div class="contact-info">
            <h1>Email</h1>
            <h2><?php echo "$email"; ?></h2>
            
          </div>
        </div>
        <div class="contact-item">
      
          <div class="contact-info">
            <h1>Address</h1>
            <h2><?php echo "$address"; ?></h2>
          </div>
        </div>
      </div>

<style>

body{
margin: 0;
padding: 0;
text-align: center;
background-size: cover;
background-position: center;
font-family: sans-serif;
}

.contact-title{
	margin-top: 100px;
	color: crimson;
	text-transform: uppercase;
	transition: all 4s ease-in-out;

}

.contact-title h1
{
	font-size: 32px;
	line-height: 10px;
}
.contact-title h2
{
	font-size:16px;
}
form
{
	margin-top: 50px;
	transition: all 4s ease-in-out;
}
.form-control
{
	width: 600px;
	background: transparent;
	border: none;
	outline: none;
	border-bottom: 1px solid gray;
	color: #fff;
	font-size: 18px;
	margin-bottom: 16px;
}
input
{
	height: 45px;
}

form.submit
{
	background: #ff5722;
	border-color: transparent;
	color: #fff;
	font-size: 20px;
	font-weight: bold;
	letter-spacing: 2px;
	height: 50px;
	margin-top: 20px;
}

form .submit:hover
{
	background-color: #f44336;
	cursor: pointer;
}	
	






</style>




<div class="contact-title">
	 <div><h1 class="section-title">Drop Your<span>Message</span></h1></div>
</div>


<div class="contact-form">
	<form id="contact-form" method="post" action="">
	<input name="name" type="text" class="form-control" placeholder="Your Name" required>
	<br><br>
	
	<input name="email" type="email" class="form-control" placeholder="Your Email" required><br><br>
	<textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea><br><br>
	
	<input type="submit" class="form-control-submit" value="SEND MESSAGE" style="background-color:crimson; border-color:crimson; color:white">


    </div>
  </section>
  <!-- End Contact Section---->




</body>
</html>