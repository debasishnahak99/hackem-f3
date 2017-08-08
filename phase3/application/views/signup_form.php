<!DOCTYPE html>
<html lang="en">

<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>



<head>
<title>Indigo Express</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.indigo {
	color: chartreuse;
	font-size: 32px;
	display: inline;
	padding-bottom:0px;
}
.express {
	color: aliceblue;
	font-size:30px;
	display: inline;
	padding-bottom:0px;
}

h3 {
	padding-left: 20px;
	padding-bottom: 5px;
	padding-top: 5px;
	margin-left:20px;
	border-style: solid;
	border-color:cyan;
	width:270px;
	}
h2 {
	font-size:20px;
	
	}
h6 {
	font-size:15px;	
}	
h5{
font-size:16px;
color:#D3D3D3;}
p {

	font-size:17px;
	text-align: justify;
}
	
.headed  {
	display: inline;
}
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
}


}

.pictures{
	
	padding-top:15px;
	padding-bottom:30px;
}
ul {
    list-style-type: none;
    overflow: display;
    background-color: #333;
}
li a {
    display: block;
    color: white;
    text-align: center;
    text-decoration: none;
}
.log {
float:right;
padding-right:40px;
font-size: 17px;
display:block;
color: yellow;
}
.body{
	background-color: aquamarine;

}
.text {
  color: maroon;
  font-size: 30px;
  padding: 200px 20px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.connect{
	display:inline;
	font-size:10px;
	padding:20px 20px 20px 20px;
}
.footer1{
	padding-left:20px;
	padding-bottom:10px;
}
.footerpar{
	color:white;
	font-size:14px;
}
.navbar {
    margin: 0;
	
}
.privacy {
	float:left;
	padding-left:110px;
	
}
.vr {
    width:1px;
    background-color:ivory;
    position:absolute;
    top:10px;
    bottom:110px;
    left:440px;
}


input[type=textsignup], input[type=password] {
    width: 300px;
    padding:12px  20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}



.signup-image {
    text-align: center;
}

.cancelbutton {
    padding: 14px 20px;
    background-color: #f44336;
	border:0;
	margin:0;
	font-size:15px;
	color: azure;
}
.signupbutton {
    padding: 14px 20px;
    background-color: crimson;
	border:0;
	margin-left:10px;
	font-size:15px;
	color: azure;
}

.cancelbutton,.signupbutton {
    float: left;
    width: 100px;
}

.container {
    padding: 32px;
}




</style>
<body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<div class="navbar navbar-inverse">	
			<h3><div class="indigo"><strong>Indigo</strong></div>-<div class="express"><strong>express</strong></div></h3>
			<a href='signup.html'><div class="log"><span class='glyphicon glyphicon-user'></span> 
			<strong>SIGN UP</strong></div></a>
			 <a href='login.html'><div class="log"><span class='glyphicon glyphicon-log-in'></span> 
			<strong>LOG IN</strong></div></a>
			
	</div>
		<div class="navbar navbar-inverse">
			<div class='collapse navbar-collapse' id='myNavbar'>
			<ul class="nav nav-pills">
				<li><a class="active" href="homepage.html"><i class="fa fa-home" ></i> Home</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">national
				<b class="caret"></span></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">delhi</a></li>
					<li><a href="#">mumbai</a></li>
					<li><a href="#">hawarah</a></li>
					<li><a href="#">chennai</a></li>
				</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">international
				<b class="caret"></span></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">USA</a></li>
					<li><a href="#">Australia</a></li>
					<li><a href="#">Spain</a></li>
					<li><a href="#">Afganistan</a></li>
				</ul>
				</li>
				
				<li><a href="#about">bollywood</a></li>
				
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#about">fashion
				<b class="caret"></span></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">north</a></li>
					<li><a href="#">south</a></li>
					<li><a href="#">east</a></li>
					<li><a href="#">west</a></li>
					
				</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#about">sports
				<b class="caret"></span></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">cricket</a></li>
					<li><a href="#">hockey</a></li>
					<li><a href="#">football</a></li>
					<li><a href="#">golf</a></li>
				</ul>
				</li>	
		
				<li><a href="#about">Science & technology</a></li>
				
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">markets
				<b class="caret"><span></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">bonds</a></li>
					<li><a href="#">commercial real estate</a></li>
					<li><a href="#">commodities & features</a></li>
					<li><a href="#">curencies</a></li>
				</ul>
				</li>
				<li class="searching">
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
			</form>
			</li>
			</ul>
			</div>
		</div>
		<br>
<div class="container">		
	<div class="row">
		<div class="col-md-7">
				<h1><strong>Signup Form</strong></h1>

<form action="/action_page.php" style="border:1px solid #f1f1f1">

 <?php
echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
echo form_open('user_authentication/new_user_registration');

echo form_label('Create Username : ');
echo"<br/>";
echo form_input('username');
echo "<div class='error_msg'>";
if (isset($message_display)) {
echo $message_display;
}
echo "</div>";
echo"<br/>";
echo form_label('Email : ');
echo"<br/>";
$data = array(
'type' => 'email',
'name' => 'email_value'
);
echo form_input($data);
echo"<br/>";
echo"<br/>";
echo form_label('Password : ');
echo"<br/>";
echo form_password('password');
echo"<br/>";
echo"<br/>";
echo form_submit('submit', 'Sign Up');
echo form_close();
?>
<a href="<?php echo base_url() ?> ">For Login Click Here</a>
</form>
		</div>
	<div class="row">	
		<div class="col-md-offset-1 col-md-4">
			<div class="jumbotron"><h1>weather</h1>
			<h2>city weather conditions</h2>
			
			</div>
		</div>
		<div class="col-md-offset-1 col-md-4">
			<div class="jumbotron">
			<h1>videos</h1>
			<h2>videos related to important issue</h2>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-4">
			<div class="jumbotron"><h1>polling analysis</h1></div>
		</div>
	</div>
	</div>	
	</div>
	
		<div class="navbar navbar-inverse">
		<div class="row">
		<div class="col-md-4">
		<div class="footer1">
			<h3><div class="indigo"><strong>Indigo</strong></div>-<div class="express"><strong>express</strong></div></h3>
			<p class="footerpar">Indiogo Express is your news,entertainment,music fashion website. We provide you 
			with the latest breaking news and videos straight from the entertainment industry.
			</p>
			<h4><strong style="color:aqua;">Contact us:</strong><a href="#">mail@indigoexpress.com</a></h4><br>
				<div class="connect"><a href='#'><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></div>
				<div class="connect"><a href='#'><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></div>
				<div class="connect"><a href='#'><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></div>
				<div class="connect"><a href="#"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></div>
				<div class="connect"><a href="#"><i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i></a></div>
		</div>
		</div>
		<div class="vr">&nbsp;</div>
			<div class="col-md-2">
			<h6><strong style="color:aqua;">coustomer service</strong></h6>
			<a href="#"><h6><style="color:aqua;">customer center</style></h6></a>
			<a href="#"><h6><style="color:aqua;">live help</style></h6></a>
			<a href="#"><h6><style="color:aqua;">Redesign guided Tour</style></h6></a>
			<a href="#"><h6><style="color:aqua;">Notice to subscribers</style></h6></a>
			</div>
			<div class="col-md-2">
				<h6><strong style="color:aqua;">Tools & Features</strong></h6>
					<a href="#"><h6><style="color:aqua;">Emails & Alerts</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Guides</style></h6></a>
					<a href="#"><h6><style="color:aqua;">My News</style></h6></a>
					<a href="#"><h6><style="color:aqua;">RSS Feeds</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Watchlist</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Video Center</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Podcasts</style></h6></a>
			</div>
			<div class="col-md-2">
					<h6><strong style="color:aqua;">Ads</strong></h6>
					<a href="#"><h6><style="color:aqua;">Advertise</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Advertise Locally</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Comercial Real Estate Ads</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Place a classified Ads</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Sell your Bussiness</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Sell your Home</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Recuirements and career Ads</style></h6></a>
			</div>
			
			<div class="col-md-2">
					<h6><strong style="color:aqua;">More</strong></h6>
					<a href="#"><h6><style="color:aqua;">content Partnerships</style></h6></a>
					<a href="#"><h6><style="color:aqua;">corrections</style></h6></a>
					<a href="#"><h6><style="color:aqua;">News Archive</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Resister For free</style></h6></a>
					<a href="#"><h6><style="color:aqua;">Reprints</style></h6></a>
			</div>
			
		</div>
		<div class="row">
		<div class='navbar navbar-inverse'>
			<center>
			<div class="privacy"><a href="#"><h5>Privacy Policy</h5></a></div>
			<div class="privacy"><a href="#"><h5>Cookie Policy</h5></a></div>
			<div class="privacy"><a href="#"><h5>copyright Policy</h5></a></div>
			<div class="privacy"><a href="#"><h5>Data Policy</h5></a></div>
			<div class="privacy"><a href="#"><h5>Subscriber agreement & terms of use</h5></a></div>
			</center>
		</div>
		</div>
	<div class='row'>
<div class='navbar navbar-inverse navbar-static-top'>
<div class='col-md-12'>
<center><h5>&copy 1998 - 2017 Indigo Express,Inc. All Rights Reserved.</h5></center>
</div>
</div>
</div>
</body>
</html>