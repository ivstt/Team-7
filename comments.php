<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	    <title>Take part in our campaign|Share your story|</title>
	    <meta name="description" content="Share your sweet memories and be a star">
	    <meta name="keywords" content="campaign, share, story, memories, family">
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
	</head>

	<body>
		<main>
			<img class="header-line" alt="header-line" src="images/footer-hp.png">
			<div class="vl"></div>
			<article id="comments">
				<h1 class="intro-title">Share with us your Frellsen story</h1>
				<div class="container">
					
					<form id="add-coment-form" action="comments.php" method="post">
						<input type="text" name="Name" placeholder="Name">
						<input type="text" name="Title" placeholder="Title of your story">
						<textarea name="story"></textarea>
						<input id="submit-button" type="submit" name="submit-button" value="Submit">
					</form>


					<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
						 	$name = $_POST["Name"];
						 	$title = $_POST["Title"];
						 	$story = $_POST["story"];
						 	$story = str_replace("\r\n", "", $story); // replace all new lines made by user with empty string
						 	$next_row = "\r\n". $name . "," . $title . "," . $story ; // concatenate all values from input field on new line each(CSV)
						 	file_put_contents("db/stories.txt", $next_row, FILE_APPEND); // append the next row in a file 

						 	 echo ( $name . ", you succesfully submitted your story!"); 
						 } 
					 ?>     

					<img id="story-chocolate" src="images/chocolate-story.jpg" alt="chocolate-image"> 

				</div>	

			</article>

			<div id="counter">
				<input type="hidden" id="day-count" value="2018-01-15">
			</div>

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
		<script src="js/counter.js"></script>	
	</body>
	
</html>