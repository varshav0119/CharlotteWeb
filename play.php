<?php
	session_start();
	if(!isset($_SESSION["Username"]))
	{
			echo("<div id='contain'><div id='back_hold'><a id='back' href='index.php'>Back</a></div><center>");
			echo("<p class='erm'>You need to sign in to play.</p>");
			echo("<a class='sign' href='signin.html'>Sign In</a>");
			echo("<p class='erm'>Don't have an account?</p>");
			echo("<a class='sign' href='signup.html'>Sign Up</a>");
			echo "</center></div>";
	}
	else
	{
			header("Location:play1.php");
	}
?>
<html>
	<head>
		<link rel="icon" href="favi.png"/>
		<title>Charlotte's Web</title>
		<style>
			body{
				background-image: url(bg.jpg);
			}
			#contain{
				position:absolute;
				left:30%;
				top:30%;
				width:40%;
				height:40%;
				border-radius:20px;
				display:-webkit-flex;
				display:flex;
				background-color:white;
				-webkit-flex-direction:column;
				flex-direction:column;
			}
			.erm{
				position:relative;
				top:15px;
				font-family:Consolas;
				font-size:23;
			}
			.sign{
				position:relative;
				top:15px;
				text-decoration:none;
				font-family:Orator Std;
				font-size:28;
			}
			#back{
				position:relative;
				left:6px;
				top:4px;
				font-family:Orator Std;
				font-size:20;
				color:#1b2347;
				text-decoration:none;
				width:50px;
				height:18px;
				padding:2px 2px;
			}
			#back_hold{
				position:relative;
				left:84%;
				top:5%;
				width:12%;
				height:7%;
			}
		</style>		
	</head>
	<body>
		<audio id="audio" src="1.mp3" loop="true"/>
	</body>
	<script>
		var audio = document.getElementById("audio");
		if(localStorage.getItem("audio")=="play")
			audio.play();
		var theme = localStorage.getItem("theme");
		if(theme=='url("theme1.jpg")'|| theme=="url('theme1.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_1.jpg)";
		else if(theme=='url("theme2.jpg")' || theme=="url('theme2.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_2.jpg)";
	</script>
</html>