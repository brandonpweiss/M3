<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>M3</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="style.css" type="text/css" rel="stylesheet">
<link href="normalize.css" rel="stylesheet" type="text/css">
 <link href="component.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
     <script src="html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="modernizr.custom.js" type="text/javascript"></script>
<script src="jquery.instagram.js"></script>
<script type="text/javascript" src="jquery.dlmenu.js"></script>
<script type="text/javascript" src="http://stratus.sc/stratus.js"></script>
</head>
<body>
	<a name="top"></a>
	<div class="reg_bg">
	</div>
		<div class="blurry_bg">
		</div>
			<div class="wrap">
<header class="clearfix">
	<div class="headerwrap">
	<a href="#" class="logo" id="top"><img src="images/logo4.png" alt="M3" id="logo"></a>
	<a href="#" class="logo2" id="top"><img src="images/logo3.png" alt="M3" id="log2"></a>
	<nav>
		<ul class="nav">
			<li><a href="#" id="about">ABOUT</a></li>
			<li><a href="http://www.soundcloud.com/deejaym3" target="_blank" id="music">MUSIC</a></li>
			<li><a href="#" id="photos">PHOTOS</li>
			<li><a href="#" id="events">EVENTS</a></li>
			<li><a href="http://www.youtube.com" target="_blank" id="videos">VIDEOS</a></li>
			<li><a href="M3bio.pdf" target="_blank" id="EPK">EPK</a></li>
			<li><a href="#" id="booking">BOOKING</a></li>
		</ul>
	</nav>
	 <!--/////////////////////////////////
            ///////////hamburger menu////////////
            ////////////////////////////////////-->

            <div id="dl-menu" class="dl-menuwrapper">
                <button>Open Menu</button>
                <ul class="dl-menu hamburger">
                    <li><a href="#" class="hamburger-navitem" id="hamburgerNavAbout">ABOUT</a></li>
                    <li><a href="#" class="hamburger-navitem" id="hamburgerNavMusic">MUSIC</a></li>
                    <li><a href="#" class="hamburger-navitem" id="hamburgerNavPhotos">PHOTOS</a></li>
                    <li><a href="#" class="hamburger-navitem" id="hamburgerNavEvents">EVENTS</a></li>
                    <li><a href="http://www.youtube.com" class="hamburger-navitem" id="hamburgerNavVideos">VIDEOS</a></li>
                    <li><a href="#" class="hamburger-navitem" id="hamburgerNavBooking">BOOKING</a></li>
                </ul>
            </div><!-- /dl-menuwrapper -->
	</div>
	<div class="centerpiece">
			<img id="biglogo" src="images/logo4.png">
	<div class="official">THE OFFICIAL SITE OF DJM3</div>
	<a href="#" id="moreabout">VIEW MORE ></a>
	</div>
	<div class="sociallinks clearfix">
		<a href="https://www.facebook.com/malcolm.i.poindexter?fref=ts&ref=br_tf" target="_blank" class="social">
			<img src="images/fb2.png" alt="">
		</a>
		<a href="http://www.twitter.com/deejaym3" target="_blank" class="social">
			<img src="images/twitter2.png" alt="">
		</a>
		<a href="http://www.soundcloud.com/deejaym3" target="_blank"  class="social">
			<img src="images/soundcloud2.png" alt="">
		</a>
	</div>
</header>
<a class="marker" name="about"></a>
<section class="clearfix" id="about">
	<h1>ABOUT <img src="images/logo4.png"></h1>
	<p>A well known Philly DJ, M3 has been in the game for 20+ years. Growing up listening to hip hop and R&B in the early 80’s through the 90’s, founded a prominent radio mix show in the MD/DC area. Returned to Philly to rock the clubs, store openings and bars with talented artists and various DJs. Spent a year in LA promoting his mixing style and working with producers, dancers and club DJs. Brought back new skills and massive musical selections. Now spinning for the SWEAT Fitness circuit, PUMA and Hip Philly with a residency at Raven Lounge. M3 is known as an entertainer with a great understanding and appreciation of music. He consistently destroys dance floors without missing a beat.</p> <br><br>
	<p>VENUES PERFORMED AT</p>
<p>Surrender, Las Vegas | Fluid Nightclub, Philly | Melkweg, Amsterdam</p><br><br>
<p>ARTISTS PERFORMED WITH</p>
<p>Public Enemy | De La Soul | Common | Digital Underground | Ice T | Ice Cube</p>
</section>
<a class="marker" name="photos"></a>
<section class="clearfix" id="photos">
	<h1>#M3Philly</h1>
	<div class="instagram clearfix"></div>
</section>
<a class="marker" name="events"></a>
<section class="clearfix" id="events">
<table>
	<tr>
		<td>DATE</td>
		<td>TIME</td>
		<td>VENUE</td>
	</tr>
<?php
include ('config.php');
$query = mysqli_query ($mysqli, "SELECT * FROM events");
while ($row = mysqli_fetch_array($query)) {
	print "
	<tr>
		<td>$row[dt]</td>
		<td>$row[tm]</td>
		<td>$row[venue]</td>
	</tr>";
};
?>
</table>
</section>
<a class="marker" name="booking"></a>
<section class="clearfix" id="booking">
	For booking inqueries, please contact: <br>
	<a style="font-size: 20px" href="mailto:djm3booking@gmail.com">DJM3booking@Gmail.com</a>
</section>
</div>
<!-- </div>
</div> -->

<script type="text/javascript">
$(function() {
$(".instagram").instagram({
  hash: 'm3philly'
, clientId: '8d07f20351af48bbabda7b11ae11ed03'
});
});
</script>
<script type="text/javascript" src="dlmenu2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$.stratus({
  links: 'http://soundcloud.com/deejaym3'
});
});
</script>
<script>// When ready...
window.addEventListener("load",function() {
	// Set a timeout...
	setTimeout(function(){
		// Hide the address bar!
		window.scrollTo(0, 1);
	}, 0);
});</script>
<script type="text/javascript" src="scroll.js"></script>
</body>
</html>