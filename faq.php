<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	    <title>FAQ|Frellsen's stories campaigh</title>
	    <meta name="description" content="Frequently asked question about Frellsen's memories campaign">
	    <meta name="keywords" content="faq, campaigh, qustions, answers">
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
	</head>

	<body>
		<img class="header-line" alt="header-line" src="images/footer-hp.png">

		<section class="faq_container">
			<div class="vl"></div>

			<h1 class="intro-title">Frequently Asked Questions</h1>

				<div class="faq">
					<div class="faq_question">How do I participate?</div>
						<div class="faq_answer_container">
							<div class="faq_answer">&nbsp;&nbsp;In order to participate in the campaign, please post your story on our Facebook page.</div>
						</div>		
				</div>

				<div class="faq">
					<div class="faq_question">What kind of stories can I post?</div>
						<div class="faq_answer_container">
							<div class="faq_answer">&nbsp;&nbsp;You can post any type of stories as long as they are connected to Frelllsen.</div>
						</div>		
				</div>

				<div class="faq">
					<div class="faq_question">How you will choose the winner?</div>
						<div class="faq_answer_container">
							<div class="faq_answer">&nbsp;&nbsp;The winner of the competition will be determined by the amount of likes on a post.</div>
						</div>		
				</div>

				<div class="faq">
					<div class="faq_question">When I will be able to see my video?</div>
						<div class="faq_answer_container">
							<div class="faq_answer">&nbsp;&nbsp;You will receive your video 1 month after the campaign is finished.</div>
						</div>		
				</div>

				<div class="faq">
					<div class="faq_question">Where can I buy a special edition chocolates?</div>
						<div class="faq_answer_container">
							<div class="faq_answer">&nbsp;&nbsp;Special edition boxes will be available in every store during the campaign.</div>
						</div>		
				</div>

			</section>'

			<div id="button">
				<button id="question">Send your question</button>
			</div>	

			<div id="send-question">
				<div id="close">
					<span>X</span>
				</div>
				<form id="send-question-form" action="faq.php" method="post">
					<input type="text" name="Name" placeholder="Your Name">
					<input type="email" name="Email" placeholder="Your Email">
					<input type="text" name="Question" placeholder="Type your question here">
					<input type="submit">
				</form>
			</div>

			<?php 

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				 	$name = $_POST["Name"];
				 	$email = $_POST["Email"];
				 	$question =$_POST["Question"];
				 	$nextQuestion = "\r\n". $name . "," . $email . "," . $question ; // concatenate all values from input field on new line each(CSV)
				 	file_put_contents("db/questions.txt", $nextQuestion, FILE_APPEND); // append the next row in a file 

				 		echo ( $name . ", thanks for your question!"); 
				 } 
			 ?>

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
    	<script src="js/faq.js"></script>	
	</body>


	
</html>