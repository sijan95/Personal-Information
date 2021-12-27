<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal Infromation</title>
</head>
</html>




<!DOCTYPE html>
<html>
<head>
	<title>Personal Information</title>
	<style>
	*{
	margin:0;
	padding:0;
	}
	header{
	height:60px;
	background:#262626;
	padding:0 50px;
	}
	.logo{
	width:30%;
	float:left;
	color:#fff;
	font-weight:bold;
	text-transform:uppercase;
	line-height:60px;
	font-size:35px;
	font-family:sans-serif;
	}
	nav{
	width:68%;
	float:right;
	}
	nav ul{
	list-style:none;
	float:right;
	}
	nav ul li{
	display: inline-block;
	}
	nav ul li a{
	text-decoration: none;
	color:#fff;
	font-family:sans-serif;
	font-weight:bold;
	margin:0 10px;
	line-height:60px;
	text-transform:uppercase;
	}
	.banner{
	height:100%;
	}
	.banner img{
	width:100%;
	height:90vh;
	}
	.content{
	padding:5%;
	}
	.content p{
	font-size:18px;
	line-height:1.7;
	font-family:sans-serif;
	margin-bottom:25px;
	}
	footer{
	background:#000;
	color:#fff;
	padding:15px 50px;
	text-align:center;
	}
	   
	   
	   @media (max-width: 600px){        

	header {
	 width: 100%;
	 height: 100%;
	 padding: 0;
	 text-align: center;
	}
	.logo {
	 width: 100%;
	 float: none;
	}
	nav {
	 width: 100%;
	 float: none;
	}
	nav ul li {
	 display: block;
	}
	nav ul {
	 float: none;
	}
	   }    
	</style>
</head>
<body>
	<header>
		
		<nav>
			<ul>
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">About</a>
				</li>
				<li>
					<a href="#">Portfolio</a>
				</li>
				<li>
					<a href="#">Location</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
				<li>
					<a href="#">Feedback</a>
				</li>
			</ul>
		</nav>
	</header>
	<div class="box">
  <img src="profile.jpg" alt="" class="box-img">
        <body>

	<a href="logout.php">Logout</a>
    
</body>
  
  <h1 align="center">
  Information of Sohanur Rahman
  </h1>

<h1 align="center">
Department CSE</h1>
<h5 align="center">
<p align="center">ID:182014003</p>
<p align="center">
<img src="image.jpg" height="250"/>
</p>


Hobbies</h5>
<h5 align="center">One of my favourite hobby is travelling because I love discovering new cities and places around the world. 
 </h5>
 <h5 align="center">I often save up for months to plan a trip every year. I love friends’ trips and family outings but solo travelling
  </h5>
 <h5 align="center">brings me the real adventure and thrill to venture into new places all by myself. </h5>
<p align="center">
<img src="image1.jpg" height="250"/>
</p>

<p align="center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.9805175038136!2d90.36755538607812!3d23.74876886856208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4e35954bcb%3A0x754ef3a364984235!2sDhanmondi%20Party%20Center!5e0!3m2!1sen!2sbd!4v1638298495800!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</p>

 
<body>
  <h2>Contact Info</h2> 
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">House:97/7.Road: 9/A</div>
          <div class="text-two">Dhanmondi, Dhaka</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-two">+880173585180</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">sijanshohan5@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send me a message</div>
        <p>If you have any to ask me about my information, you can contact with me.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>

<html>    
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">    
<style>    
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    
    
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}    
    
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */    
</style>    
</head>    
<body>    
<h2>FEED BACK FORM</h2>    
<div class="container">    
  <form>    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placeholder="Your name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="mailid" placeholder="Your mail id..">    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="country">Country</label>    
      </div>    
      <div class="col-75">    
        <select id="country" name="country">    
            <option value="none">Select Country</option>    
          <option value="australia">Australia</option>    
          <option value="canada">Canada</option>    
          <option value="usa">USA</option>    
          <option value="russia">Russia</option>    
          <option value="japan">Japan</option>    
          <option value="india">Bangladesh</option>    
          <option value="china">China</option>    
        </select>    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit">    
    </div>    
  </form>    
</div> 
<ul>
<li><a href="https://www.facebook.com/profile.php?id=100010035104300&sk=photos_by"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
<li><a href="https://twitter.com/sijanshohan5"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
<li><a href="https://www.instagram.com/sijan_shohan/"><i class="fa fa-instagram-square" aria-hidden="true"></i></a></li>
<li><a href="https://myaccount.google.com/?utm_source=OGB&utm_medium=act"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
</ul>
</body>    
</html> 

</div>
</body>
</html>

