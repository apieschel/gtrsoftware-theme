<?php 
// Template Name: Tic Tac Toe
get_header();
?>

<head>
	<style type="text/css">
		
		::-moz-selection {
			background: transparent;
			color: rgb(182, 70, 54);
			text-shadow: none;
		}

		html {
			height: 100%;
			overflow: hidden; 
		}
		
	</style>
</head>

<div class="container">
	<h1>Tic Tac Toe</h1>
	<p class="description">A Tic Tac Toe game in which the player plays verses an AI named "LYRA" that has a few choice taunts. The game impliments a min-max algorithm that is adapted from <a style="color: red;" href="https://medium.freecodecamp.org/how-to-make-your-tic-tac-toe-game-unbeatable-by-using-the-minimax-algorithm-9d690bad4b37">this article</a>.</p>
</div>

<div class="score">
	<h3><span class="player">Player: </span><span id="playerScore">0</span></h3>
	<h3><span class="player">LYRA: </span><span id="computerScore">0</span></h3>
	<h3><span class="player">Ties: </span><span id="ties">0</span></h3>
</div>

<p id="playX"><span><em>Player is "X" by default.</em></span><button id="playO">Play as "O" instead</button></p>

<ul class="board">
	<li class="one"><span id="one"></span></li>
	<li class="two"><span id="two"></span></li>
	<li class="three"><span id="three"></span></li>
	<li class="four"><span id="four"></span></li>
	<li class="five"><span id="five"></span></li>
	<li class="six"><span id="six"></span></li>
	<li class="seven"><span id="seven"></span></li>
	<li class="eight"><span id="eight"></span></li>
	<li class="nine"><span id="nine"></span></li>
</ul>

<div id="computerVoice"><strong>LYRA</strong>: Good luck. You're going to need it.</div>

<?php get_footer(); ?>