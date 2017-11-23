<?php
	session_start();
?>
<html>
	<head>
		<link rel="icon" href="favi.png"/>
		<title>Charlotte's Web</title>
		<!--link rel="stylesheet" type="text/css" href="hpstyles.css"-->
		<style>
			body{
				background-image:url(theme1.jpg);
				background-repeat:no-repeat;
				background-size:cover;
			}
			#meaning{
				position:absolute;
				font-family:Orator Std;
				border:1px solid white;
				padding:5px;
				color:#00000c;
				font-weight:bold;
				font-size:18;
			}
			.buttons{
				display:-webkit-flex;
				display:flex;
				position:relative;
				top:0%;
				left:74%;
				width:20%;
				height:20%;
				-webkit-flex-direction:row;
				flex-direction:row;
			}				
			.flex-container {
				display: -webkit-flex;
				display: flex;
				position:relative;
				top:10%;
				left:10%;
				width: 40%;
				height: 60%;
				-webkit-flex-direction: column;
				flex-direction: column;
				-webkit-justify-content: space-between;
				justify-content: space-between;	
			}
			.flex-item {
			   padding: 10% 2%;
			}
			.flex-item:hover{
				border: 1px solid white;
				transform: scale(1.3);
				transition: all .9s ease-in-out;
			}				
			.flex-item{
				font-family:Orator Std;
				font-size:15px;
				color:white;
				text-align:center;
				text-decoration:none;
			}
			#slow{
				font-family:Park Lane NF;
				font-size:50px;
				color:white;
				font-weight:bold;
			}
			#start{
				font-family:Park Lane NF;
				font-size:50px;
				color:white;
				font-weight:bold;
				text-decoration:none;
			}
			#start:hover{
				text-decoration:underline;
			}
			#other{
				font-family:Orator Std;
				font-size:25px;
				color:white;
			}				
			#box1:hover:not(.active){
				border:3px solid white;
			}
			#box2:hover:not(.active) {
				border:3px solid white;
			} 
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
			}
			li {
				float: left;
			}
			li a, #m {
				display: block;
				font-family:Orator Std;
				font-size:20px;
				color: #ffffff;
				text-align: center;
				padding: 14.75px 38px;
				text-decoration: none;
			}
			#m{
				//background-color: #adadab;
				height:22px;
				border-left: 2px solid #adadab;
				border-right: 2px solid #adadab;
				border-top: 2px solid #adadab;
			}
			li a:hover {
				background-color:#adadab;
			}
			#snd{
				position:relative;
				top:9px;
			}
		</style>
    </head>
<body style="background-image:url('theme1.jpg')">
		<ul>
			<li><div id="m">Home</div></li>
			<li><a href="missiondet.php">Mission Details</a></li>
			<li><a id="up" href="signup.html">Sign Up</a></li>
			<li><a id="in" href="signin.html">Sign In</a></li>
			<li><a href="credits.html">Credits</a></li>
		</ul>
		<div class="flex-container">
		<div class="flex-item" id="divup"> <center> <div id="other"> Looking for an adventure? This is the right place to </div> <br> <a id="start" href="play.php"> Start </a> </center></div>
		<div class="flex-item" id="divdown"> <center> <div id="slow">slow progress</div> <br> <div id="other">is better than no progress</div> </center> </div>
		</div>
		<div class="buttons">
		<div class="bt" id="b"><input type="image" width="50%" height="50%" src="change.png" onclick="change(this)" id="theme_change" onmouseover="putmeaning(this)" onmouseout="throwmeaning(this)"/></div>
		<div class="bt" id="sound"><input type="image" id="snd" width="50%" height="50%" onclick="change_sound(this)" onmouseover="putmeaning(this)" onmouseout="throwmeaning(this)"/><audio id="audio" src="1.mp3" loop="true"/></div>
		</div>
		<script>
			var coo = sessionStorage.getItem("out");
			if(coo=="yes")
			{
				var upP = document.getElementById("up").parentNode;
				var i = document.getElementById("in");
				upP.parentNode.removeChild(upP);
				i.innerHTML="Sign Out";
				i.href="signout.php";
			}
			if(localStorage.getItem("theme"))
			{
				if(localStorage.getItem("theme")=='url("theme2.jpg")')
					document.body.style.backgroundImage='url("theme2.jpg")';
				else if(localStorage.getItem("theme")=='url("theme1.jpg")')
					document.body.style.backgroundImage='url("theme1.jpg")';
			}
			else
				localStorage.setItem("theme","url(theme1.jpg)");
			if(localStorage.getItem("audio"))
			{
				if(localStorage.getItem("audio")=="play")
				{
					var audio = document.getElementById("audio");
					audio.previousSibling.src="sound_off.png";
					audio.play();
				}
				else if (localStorage.getItem("audio")=="mute")
				{
					var audio = document.getElementById("audio");
					audio.previousSibling.src="sound_on.png";
					audio.pause();
				}
			}
			else
			{
				localStorage.setItem("audio","play");
				var audio = document.getElementById("audio");
				audio.previousSibling.src="sound_off.png";
				audio.play();				
			}
			function change(t)
			{
				//var y=window.getComputedStyle(document.body).getPropertyValue("background-image");
				//console.log(y);
				//console.log(document.body.style.backgroundImage);
				if(document.body.style.backgroundImage=='url("theme1.jpg")')
				{
					document.body.style.backgroundImage='url("theme2.jpg")';
					var m = document.getElementById("meaning");
					var x = document.body.style.backgroundImage;
					localStorage.setItem("theme",x);
				}
				else
				{
					//console.log("pls");
					document.body.style.backgroundImage="url('theme1.jpg')";
					var m = document.getElementById("meaning");
					localStorage.setItem("theme",document.body.style.backgroundImage);
				}
			}
			function putmeaning(t)
			{
				var node = document.createElement("P");
				if(t.id=="theme_change")
				{
					var txt = document.createTextNode("Toggle Theme");
					node.appendChild(txt);
					document.getElementById("b").appendChild(node);
				}
				else if(t.id=="snd")
				{
					var txt = document.createTextNode("Audio");
					node.appendChild(txt);
					document.getElementById("b").appendChild(node);
					node.style.left="130";
				}	
				node.id="meaning";
			}
			
			function throwmeaning() 
			{
				var meaning=document.getElementById("meaning");
				meaning.parentNode.removeChild(meaning);
			}				
			function change_sound(t)
			{
				var audio = document.getElementById("audio");
				if(localStorage.getItem("audio")=="mute")
				{
					t.src="sound_off.png";
					audio.play();
					localStorage.setItem("audio","play");
				}
				else if(localStorage.getItem("audio")=="play")
				{
					t.src="sound_on.png";
					audio.pause();
					localStorage.setItem("audio","mute");
				}
			}
		</script>
		</div>
</body>
</html>