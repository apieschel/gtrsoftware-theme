<?php 
// Template Name: Pomodoro
get_header();
?>

<div class="container">
	<h1>Pomodoro Clock</h1>
	<p>This project uses Javascript timer functions to create a customizable Pomodoro clock. Coded in vanilla Javascript, CSS, and HTML. After initially clicking "Start", click on the clock face to pause and unpause the timer.</p>
</div>

<div class="flex-container">

	<div class="flex-horizontal">
		<div>
			<h2>Session Length</h2>
			<input type="button" id="down" value="-">
			<span id="session-timer">25</span>
			<input type="button" id="up" value="+">
		</div>
		<div>
			<h2>Break Length</h2>
			<input type="button" id="breakdown" value="-">
			<span id="break-timer">5</span>
			<input type="button" id="breakup" value="+">
		</div>
	</div>

	<div id="pause" class="flex-container clockface">
		<div id="session-or-break">Session</div>
		<!-- Displays the countdown timer -->
		<div id="clock"></div>
	</div>

	<div>
		<input type="button" id="start" value="Start">
	</div>

</div>

<?php get_footer(); ?>