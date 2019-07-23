$(document).ready(function () {
	
	/* let users = ["ESL_SC2", "OgamingSC2", "cretetion", "freecodecamp", "storbeck", "habathcx", "RobotCaleb", "noobs2ninjas"]; ;*/
	
	let a = "thggupv9oz4ffa6bsqnad5e9y4t720";
	
	/*
	$.ajax({
	url: 'https://api.twitch.tv/helix/users?login=freecodecamp&login=ESL_SC2&login=OgamingSC2&login=cretetion&login=storbeck&login=habathcx&login=RobotCaleb&login=noobs2ninjas',
	headers: {
	'Client-ID': a
	}}).done(function( data ) {
	let dataArray = data.data;
	dataArray.forEach(function(val) {
	let div = document.createElement('div');
	let img = document.createElement('img');
	let span = document.createElement('span');
	let link = document.createElement('a');
	let span2 = document.createElement('span');
	span2.id = val.id;
	span2.innerText = "offline";
	link.href = "https://www.twitch.tv/" + val.login;
	img.src = val.profile_image_url;
	div.appendChild(img);
	div.className = "bottomRow";
	span.innerText = val.display_name;
	link.appendChild(span);
	div.appendChild(link);
	div.appendChild(span2);
	document.body.appendChild(div);
	});
	});

	$.ajax({
	url: 'https://api.twitch.tv/helix/streams?user_login=freecodecamp&user_login=ESL_SC2&user_login=OgamingSC2&user_login=cretetion&user_login=storbeck&user_login=habathcx&user_login=RobotCaleb&user_login=noobs2ninjas',
	headers: {
	'Client-ID': a
	}}).done(function( data ) {
	let dataArray = data.data;
	dataArray.forEach(function(val) {
	document.getElementById(val.user_id).innerText = val.title;
	});
	}); */


	$.ajax({
		url: 'https://api.twitch.tv/helix/streams?first=10&game_id=19180',
		headers: {
			'Client-ID': a
		}
	}).done(function (data) {
		let dataArray = data.data;
		let user_string = "";
		dataArray.forEach(function (val) {
			user_string = user_string + "id=" + val.user_id + "&";
			let div = document.createElement("div");
			let span = document.createElement("span");
			let viewers = document.createElement("span");
			viewers.style = "float:right; font-size:12px; width:60px;";
			viewers.innerText = "Current Viewers: " + val.viewer_count;
			span.style = "float:right; width:130px; text-align:right; color:#f06f05; word-wrap:break-word;";
			span.innerText = val.title;
			div.id = val.user_id;
			div.className = "twitch-container";
			div.appendChild(span);
			div.appendChild(viewers);
			document.getElementById("container").appendChild(div);
		});
		
		$.ajax({
			url: 'https://api.twitch.tv/helix/users?' + user_string,
			headers: {
				'Client-ID': a
			}
		}).done(function (data) {
			let dataArray = data.data;
			dataArray.forEach(function (val) {
				let userDiv = document.getElementById(val.id);
				let container = document.createElement("div");
				let div = document.createElement("div");
				div.id = val.login;
				let img = document.createElement('img');
				let span = document.createElement('span');
				let link = document.createElement('a');
				let span2 = document.createElement('span');
				link.href = "https://www.twitch.tv/" + val.login;
				link.style = "float:right;"
				img.src = val.profile_image_url;
				userDiv.appendChild(img);
				span.innerText = val.display_name;
				link.appendChild(span);
				userDiv.appendChild(link);
				container.appendChild(div);
				container.style = "display:flex; justify-content:center; margin-top:10%; width:100%; clear:both;";
				let description = document.createElement("p");
				description.innerHTML = val.description;
				userDiv.appendChild(container);
				userDiv.appendChild(description);
				let options = {
					width: 400,
					height: 300,
					channel: val.login,
					autoplay: false
				};

				let player = new Twitch.Player(val.login, options);
				player.setVolume(0);

			});
		});
	});
	
	/*
	$.ajax({
	url: 'https://api.twitch.tv/helix/users?' + user_string,
	headers: {
	'Client-ID': "thggupv9oz4ffa6bsqnad5e9y4t720"
	}}).done(function( data ) {
	let dataArray = data.data;
	dataArray.forEach(function(val) {

	});
	});
	*/

});