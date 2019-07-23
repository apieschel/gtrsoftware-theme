<?php 
// Template Name: Simon
get_header();
?>

<div class="simon-body">
	<div class="container">
		<h1>Simon</h1>
		<p>This is a clone of the classic memory game Simon. The sounds rely on Javascript's audioContext functionality. Oscillators are created via a function, and the frequency of each different note is set numerically. The four notes make up an A-minor chord.</p>
	</div>
	<div class="canvas-wrapper">
		<canvas id="screen" width="500" height="500"></canvas>
	</div>
	<div class="ui">
		<h1>Simon<span class="trademark">&reg;</span></h1>
		<div style="display:flex; justify-content:space-between;">
			<div style="display:flex;flex-direction:column;padding-top:18px;"><div class="count"><span id="steps">1</span><h3>Count</h3></div></div>
			<div style="display:flex;flex-direction:column;justify-content:center;"><div class="fake-light"></div><button id="restart"></button><h3>Restart</h3></div>
			<div style="display:flex;flex-direction:column;justify-content:center;"><div class="strict-light"></div><button id="strictBtn"></button><h3>Strict</h3></div>
		</div>

		<div id="switch" style="display:flex; justify-content:center;">
			<span id="on">OFF</span><button id="on-off"><div id="on-switch"></div></button><span id="off">ON</span>
		</div>
		<h2 id="wrong"></h2>
		<div style="display:flex; justify-content:center;">

		</div>
	</div>
	<div class="border-vertical"></div>
	<div class="border-horizontal"></div>
</div>

<?php get_footer(); ?>