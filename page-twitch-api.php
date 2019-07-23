<?php 
// Template Name: Twitch API
get_header();
?>
	
<div class="container">
	<h1>10 Live Final Fantasy XV Twitch Streams</h1>
	<p>This is a small project that pulls stream data through Twitch Tv's web API. The streams focus on a single videogame, Final Fantasy XV, are all currently live, and are sorted by most active viewers. The project takes advantage of jQuery's ajax functionality.</p>
</div>

<div id="container">
</div>

<script src="https://player.twitch.tv/js/embed/v1.js"></script>

<?php get_footer(); ?>