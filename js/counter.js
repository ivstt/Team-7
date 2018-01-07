 $(document).ready(function() {

	startCounter();

	// This code is taken from https://www.w3schools.com/howto/howto_js_countdown.asp																		
	function startCounter() { 
	    var counter = $("#counter"),
	        countToDate = $("#day-count").val(),
	        countDownDate = new Date(countToDate).getTime(),
	        now,
	        distance,
	        days,
	        hours,
	        minutes,
	        seconds,
	        htmlToDisplay,
	        template = '<h1 id="count-days"> {days} Days, {hours} Hours, {minutes} Minutes, {seconds} Seconds </h1>',
	        finishedText = "Finished";

	    var interval = setInterval(function() {
	        now = new Date().getTime();

	        distance = countDownDate - now;

	        days = Math.floor(distance / (1000 * 60 * 60 * 24));
	        hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	        minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	        seconds = Math.floor((distance % (1000 * 60)) / 1000);

	        htmlToDisplay = template
	            .replace("{days}", days)
	            .replace("{hours}", hours)
	            .replace("{minutes}", minutes)
	            .replace("{seconds}", seconds);

	        counter.html(htmlToDisplay);

	        if (distance < 0) {
	            clearInterval(interval);
	            counter.html(finishedText);
	        }
	    }, 1000);
	}
});     