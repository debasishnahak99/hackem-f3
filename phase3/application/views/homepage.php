<!DOCTYPE html>
<html lang="en">
<head>
<title>Indigo Express</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
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
.item {
    display: none;
    position: relative;
    .transition(.01s ease-in-out left);
}

.carousel {
  max-height: 400px;
  overflow: hidden;

  .item img {
    width: 100%;
    height: auto;
  }
}
.body{
	background-color: aquamarine;

}
.text {
  color: Azure;
  font-size: 35px;
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
    left:420px;
}
 
</style>
<body>
	<div class="navbar navbar-inverse">	
			<h3><div class="indigo"><strong>Indigo</strong></div>-<div class="express"><strong>express</strong></div></h3>
			<a href="signup.html"><div class="log"><span class='glyphicon glyphicon-user'></span> 
			<strong>SIGN UP</strong></div></a>
			 <a href="login.html"><div class="log"><span class='glyphicon glyphicon-log-in'></span> 
			<strong>LOG IN</strong></div></a>
			
	</div>
		<nav class="navbar navbar-inverse">
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
		</nav>
		<br>
<div class="container">		
	<div class="row">
		<div class="col-md-7">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <a href="articlepage-football.html"><img src="pictures/football.jpg" alt="football" width="700px" height="456px">
	   <div class="text">football:Wins the Match</div></a>
    </div>

    <div class="item">
      <a href="articlepage-ramdev.html"><img src="pictures/ramdev.jpg" width="700px" height="456px">
	   <div class="text">Ramdev soon in jail</div></a>
    </div>

    <div class="item">
      <a href="articlepage-modi.html"><img src="pictures/modi.jpg" width="700px" height="456px">
	   <div class="text">Modi:speech at madison garden</div></a>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
		<div class=" col-md-offset-1 col-md-4">
			<div class="jumbotron"><h1>news headlines</h1>
			<h2>current issue is here</h2>
			</div>
		</div>
	</div>
	<hr>
		<h2><strong>Monthly latest news</strong></h2>
	<div class="row">	
		<div class="col-md-7">
	
			<div class="row">	
				<div class="col-md-3">
					<div class="pictures"><img src="pictures/truck.jpg" width="150" height="100"></div>
				</div>
				<div class="col-md-9">
					<div class="news"><h2>Fires in Amri hospital</h2>
					<p>A minor fire broke out in a private hospital here, but swift
					action by authorities and Fire and Rescue Service personnel
					averted any casualty.</p></div>
				</div>
			</div>	
			<hr>
			<div class="row">	
				<div class="col-md-3">
					<div class="pictures"><img src="pictures/isro.jpg" width="150" height="100"></div>
				</div>
				<div class="col-md-9">
					<div class="news"><h2>'Indian soil' could well be a woman.</h2>
					<p>An indigenous rocket as heavy as 200 full-grown Asian elephants could well be the one taking
					"Indians into space from Indian soil" 
					as the country inches closer to joining the big boy's space club..</p></div>
				</div>
			</div>	
			<hr>
			<div class="row">	
				<div class="col-md-3">
					<div class="pictures"><img src="pictures/raman.jpg" width="150" height="100"></div>
				</div>
				<div class="col-md-9">
					<div class="news"><h2>South Korean telecom firm to set up manufacturing unit in Chattisgarh</h2>
					<p>An official said that the representatives from Sung Ha Telecom company met Raman Singh and gave
					in-principle consent to set up its mobile phone manufacturing plant 
					in Naya Raipur – the upcoming new capital of Chhattisgarh.
					</p></div>
				</div>
			</div>	
			<hr>			
			<div class="row">	
				<div class="col-md-3">
					<div class="pictures"><img src="pictures/pc.jpg" width="150" height="100"></div>
				</div>
				<div class="col-md-9">
					<div class="news"><h2>Priyanka Chopra meets PM Narendra Modi in Berlin thanks to a
					‘lovely coincidence’</h2><p>wrote, “Was such a lovely coincidence to be in #berlin🇩🇪 at the same time as the Prime Minister.
					Thank you @narendramodi Sir  for taking the time from your packed schedule to meet me this morning. 🇮🇳.” 
					</p></div>
				</div>
			</div>
			<hr>			
			<div class="row">	
				<div class="col-md-3">
					<div class="pictures"><img src="pictures/donald.jpg" width="150" height="100"></div>
				</div>
				<div class="col-md-9">
					<div class="news"><h2>Donald Trump administration nearing completion of Cuba policy review</h2>
					<p>The policy review, coordinated by the National Security Council, is expected pick up steam now that 
					Trump has returned from his first foreign trip, one 
					administration official said, speaking on condition of anonymity.</p>
					</div>
				</div>
			</div>		
			<hr>
			<div class="row">	
				<div class="col-md-3">
					<div class="pictures"><img src="pictures/result.jpg" width="150" height="100"></div>
				</div>
				<div class="col-md-9">
					<div class="news"><h2>ICSE Class X and ISC Class XII results 2017: southern region shines</h2>
					<p>A total of 1,75,299 candidates appeared for the ICSE examinations and 98.53% passed out. Of the 73,633 students who took the ISC examinations,
					96.47% passed.</p>
					</div>
				</div>
			</div>		
			<hr>
			<div class="row">	
				<div class="col-md-3">
					<div class="pictures"><img src="pictures/tkss.jpg" width="150" height="100"></div>
				</div>
				<div class="col-md-9">
					<div class="news"><h2>Kapil Sharma's Show Gets More Time, Thanks To Salman Khan (Sort Of)
					</h2>
					<p>Kapil Sharma's embattled show has reportedly got an extension of two months from the channel after it was reported that 
					it will be replaced by Salman Khan's Dus Ka Dum</p>
					</div>
				</div>
			</div>			
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