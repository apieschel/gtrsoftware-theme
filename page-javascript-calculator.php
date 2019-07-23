<?php 
// Template Name: Javascript Calculator
get_header();
?>

<main>

	<div class="container">

		<h1>Javascript Calculator</h1>

		<p>This is a calculator coded in vanilla Javscript and CSS that incorporates the design of the Samsung Galaxy S6. Though not all buttons have been implimented yet, the calculator successfully computes most operations.</p>		

	</div>

	<div class="phone-exterior">
		<div class="top-row-container">
			<div class="circle1"></div>
			<div class="circle2"></div>
			<div class="silver-line">
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
				<div class="tiny-circle"></div>
			</div>
			<div class="circle3">
				<div class="blinking-circle"></div>
			</div>
		</div>
		<h1>Samsung</h1>
		<div class="screen-exterior">
			<div class="screen-container">
				<div class="screen-top">
					<div class="main-input-container">
						<label for="input" hidden>Main Input: </label>
						<input type="text" id="input" class="input" disabled>
					</div>
					<label for="currentInput" hidden>Current Input: </label>
					<input type="text" id="currentInput" class="input" value="" disabled>
					<label for="clearLast" hidden>Clear Last: </label>
					<input type="button" class="input" id="clearLast" value="CE">
				</div>
				<div class="screen-bottom">
					<div class="calc-row">
						<div class="button">
							<label for="clear" hidden>Clear: </label>
							<input type="button" class="input input-btn" id="clear" value="C">
						</div>
						<div class="button blue">()</div>
						<div class="button blue">%</div>
						<div class="button">
							<label for="/" hidden>Divide: </label>
							<input type="button" class="operator input-btn" id="/" value="/">
						</div>
					</div>
					<div class="calc-row">
						<div class="button">
							<label for="7" hidden>Seven: </label>
							<input type="button" class="number input-btn" id="7" value="7">
						</div>
						<div class="button">
							<label for="8" hidden>Eight: </label>
							<input type="button" class="number input-btn" id="8" value="8">
						</div>
						<div class="button">
							<label for="9" hidden>Nine: </label>
							<input type="button" class="number input-btn" id="9" value="9">
						</div>
						<div class="button">
							<label for="*" hidden>Multiply: </label>
							<input type="button" class="operator input-btn" id="*" value="*">
						</div>
					</div>
					<div class="calc-row">
						<div class="button">
							<label for="4" hidden>Four: </label>
							<input type="button" class="number input-btn" id="4" value="4">
						</div>
						<div class="button">
							<label for="5" hidden>Five: </label>
							<input type="button" class="number input-btn" id="5" value="5">
						</div>
						<div class="button">
							<label for="6" hidden>Six: </label>
							<input type="button" class="number input-btn" id="6" value="6">
						</div>
						<div class="button">
							<label for="-" hidden>Subtract: </label>
							<input type="button" class="operator input-btn" id="-" value="-">
						</div>
					</div>
					<div class="calc-row">
						<div class="button">
							<label for="1" hidden>One: </label>
							<input type="button" class="number input-btn" id="1" value="1">
						</div>
						<div class="button">
							<label for="2" hidden>Two: </label>
							<input type="button" class="number input-btn" id="2" value="2">
						</div>
						<div class="button">
							<label for="3" hidden>Three: </label>
							<input type="button" class="number input-btn" id="3" value="3">
						</div>
						<div class="button">
							<label for="+" hidden>Add: </label>
							<input type="button" class="operator input-btn" id="+" value="+">
						</div>
					</div>
					<div class="calc-row">
						<div class="button" style="color:#abaaa5; font-size:24px;">+/-</div>
						<div class="button">
							<label for="0" hidden>Zero: </label>
							<input type="button" class="number input-btn" id="0" value="0">
						</div>
						<div class="button">
							<label for="." hidden>Decimal: </label>
							<input type="button" class="number input-btn" id="." value=".">
						</div>
						<div class="button equals-div">
							<label for="=" hidden>Calculate: </label>
							<input type="button" class="equals input-btn" id="submitBtn" value="=">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cover-circle"></div>
	</div>

</main>

<?php get_footer(); ?>