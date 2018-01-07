<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	    <title>Video example of my Frellsen story</title>
	    <meta name="description" content="See our video story and inspire yourself">
	    <meta name="keywords" content="video, memories, example, story, inspiration">
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
	</head>


	<body>
		<main>	
			<img class="header-line" alt="header-line" src="images/footer-hp.png">
			<div class="vl"></div>
			<section id="video-box">
				<h1 class="intro-title">Watch our video for inspiration</h1>	
				<ul>
					<li>
						<button class="controls" id="play-pause">Play/Pause</button>
					</li>	
					<li>
						<button class="controls" id="make-big">Big</button>
					</li>	
					<li>	
						<button class="controls" id="make-normal">Normal</button>
					</li>
					<li>	
						<button class="controls" id="make-small">Small</button>
					</li>	
				</ul>	
					
				<video id="video" width="700">
					 <source src="images/frellsen-video.mp4" type="video/mp4">
				</video>	 	
	
			</section>	
		</main>

	    <footer id="nav-footer">

			<ul id="nav-buttons">
				<li class="nav"><a href="index.php">Home</a></li>
				<li class="nav"><a href="history.php">Story of Frellsen</a></li>
				<li class="nav"><a href="campaign.php">About the campaign</a></li>
				<li class="nav"><a href="video.php">Video story</a></li>
				<li class="nav"><a href="comments.php">Share your story</a></li>
				<li class="nav"><a href="faq.php">FAQ</a></li>
			</ul>
					
		</footer>
		<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/frellsen.js"></script>
	</body>

	
</html>