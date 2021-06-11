<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>
	<link rel="stylesheet" type="text/css" href="index.css">

    <title>Music</title>
 	</head>
	<body>
		<nav>
			<input id="nav-toggle" type="checkbox">
			<div class="logo">MUSIC<strong>BOX</strong></div>
			<ul class="links">
				<li><a href="#">Playlist</a></li>
				<li><a href="#top_tracks">Top Tracks</a></li>				
				<li><a href="teks.php">Penjelasan</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			<label for="nav-toggle" class="icon-burger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</label>
		</nav>
		
<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Playlist</h3>
			</div>
			<div class="col-md-3">
				<a href="javascript:void();" class="album-poster" data-switch="0">
					<img src="pink_sweats.jpg" alt="">
				</a>
				<h4>At My Worst</h4>
				<p>Pink Sweats</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="1">
					<img src="347aidan.jpg" alt="">
				</a>
				<h4>Dancing in My Room</h4>
				<p>347aidan</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="2">
					<img src="billie.jpg" alt="">
				</a>
				<h4>Bad Guy</h4>
				<p>Billie Eilish</p>
			</div>

			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="3">
					<img src="pharell.jpg" alt="">
				</a>
				<h4>Happy</h4>
				<p>Pharrel Williams</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="4">
					<img src="rose2.jpg" alt="">
				</a>
				<h4>Gone</h4>
				<p>ROSÉ</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="5">
					<img src="oned.jpg" alt="">
				</a>
				<h4>Little Things</h4>
				<p>One Direction</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="6">
					<img src="eminem.jpg" alt="">
				</a>
				<h4>Rap God</h4>
				<p>Eminem</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="7">
					<img src="rose1.jpg" alt="">
				</a>
				<h4>On The Ground</h4>
				<p>ROSÉ</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="8">
					<img src="aurora.jpg" alt="">
				</a>
				<h4>Runaway</h4>
				<p>AURORA</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="9">
					<img src="john_denver.jpg" alt="">
				</a>
				<h4>Take Me Home, Country Roads</h4>
				<p>John Denver</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="10">
					<img src="twentyone.png" alt="">
				</a>
				<h4>Stressed Out</h4>
				<p>Twenty One Pilots</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="11">
					<img src="uptown.jpg" alt="">
				</a>
				<h4>Uptown Funk</h4>
				<p>Mark Ronson feat. Bruno Mars</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="12">
					<img src="louis.jpg" alt="">
				</a>
				<h4>What a Wonderful World</h4>
				<p>Louis Armstrong</p>
			</div>


			
		</div>


		<div class="row">
			<div class="top_tracks" id="top_tracks">
				<p id="heading">&nbsp;&nbsp;</p>
				<h3>Top Tracks</h3>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster" data-switch="4">
					<img src="rose2.jpg" alt="">
				</a>
				<h4>ROSÉ - Gone</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster" data-switch="5">
					<img src="oned.jpg" alt="">
				</a>
				<h4>One Direction - Little Things</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster" data-switch="7">
					<img src="rose1.jpg" alt="">
				</a>
				<h4>ROSÉ - On The Ground</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster" data-switch="8">
					<img src="aurora.jpg" alt="">
				</a>
				<h4>Aurora - Runaway</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster" data-switch="1">
					<img src="347aidan.jpg" alt="">
				</a>
				<h4>347aidan - Dancing in My Room</h4>
			</div>
		</div>


	</div>
</div>

	<div id="aplayer"></div>

	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>	

	<script src="index.js"></script>

	</body>
</html>
