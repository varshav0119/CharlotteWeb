<?php
	session_start();
	if(!isset($_SESSION["Username"]))
		header("location:index.php"	);
?>
<html>
	<head>
		<link rel="icon" href="favi.png"/>
		<title>Charlotte's Web</title>
		<style>
			#home{
				position:absolute;
				top:30px;
				left:100px;
				z-index:0;
			}
			#web{
				position:absolute;
				top:30px;
				left:980px;
			}
			#details{
				position:absolute;
				top:240px;
				left:993px;
				font-family:Orator Std;
				font-size:30;
			}
			#egg1{
				position:absolute;
				left:144px;
				top:227px;
				border-radius:100px;
				background-image:url(egg1.png);
				width:20px;
				height:20px;
				z-index:10;
			}
			#egg2{
				position:absolute;
				left:390px;
				top:295px;
				border-radius:100px;
				background-image:url(egg2.png);
				width:20px;
				height:20px;
				z-index:10;
			}
			#egg3{
				position:absolute;
				left:680px;
				top:263px;
				border-radius:100px;
				background-image:url(egg3.png);
				width:20px;
				height:20px;
				z-index:10;
			}
			#egg4{
				position:absolute;
				left:874px;
				top:495px;
				border-radius:100px;
				background-image:url(egg4.png);
				width:20px;
				height:20px;
				z-index:10;
			}
			#egg5{
				position:absolute;
				left:794px;
				top:123px;
				border-radius:100px;
				background-image:url(egg5.png);
				width:20px;
				height:20px;
				z-index:10;
			}
			#egg6{
				position:absolute;
				left:570px;
				top:520px;
				background-image:url(egg6.png);
				width:20px;
				height:20px;
				z-index:10;
				border-radius:30px;
			}
			#win{
				position:relative;
				right:70px;
			}
			
			#link{
				position:relative;
				left:85px;
			}
			
		</style>
	</head>
	<body>
			<img id="home" src="cartoon_home.jpg"/>
			<img id="web" src="haha.png"/>
			<div id="egg1" class="egg"></div>
			<div id="egg2" class="egg"></div>
			<div id="egg3" class="egg"></div>
			<div id="egg4" class="egg"></div>
			<div id="egg5" class="egg"></div>
			<div id="egg6" class="egg"></div>
			<div id="details">
				<center>
					<p id="upper">Easter Eggs</p>
					<p id="downer">Find them all!</p>
					<p id="egg_text">0/6</p>
					<p id="time">Time Left: 120</p>
				<center>
			</div>
	</body>
	<script>
		var theme = localStorage.getItem("theme");
		console.log(theme);
		if(theme=='url("theme1.jpg")'|| theme=="url('theme1.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_s1.jpg)";
		else if(theme=='url("theme2.jpg")' || theme=="url('theme2.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_s2.jpg)";
		var score=0;
		var time = 120;
		var interval = window.setInterval(timer,1000);
		var egg = document.querySelectorAll(".egg");
		console.log(egg);
		for(var i=0; i<egg.length; i++)
			egg[i].addEventListener("click",hit,false);
		function hit(e)
		{
			console.log("hit");
			if(e.target.style.border!="1px solid white")
			{
				score++;
				e.target.style.border="1px solid white";
			}
			console.log(score);
			var txt = document.getElementById("egg_text");
			txt.innerHTML=score+"/6";
			if(score==6)
				victory();
		}
		function timer()
		{
			time=time-1;
			if(time==0)
				you_lose();
			var time_text=document.getElementById("time");
			time_text.textContent="Time Left: "+time;
		}
		function you_lose()
		{
			window.clearInterval(interval);
			window.location.href="youlose.php";
		}
		function victory()
		{
			for(i=0; i<egg.length; i++)
				egg[i].removeEventListener("click",hit,false);
			var txt = document.createElement("p");
			var d = document.getElementById("details");
			txt.id="win";
			txt.style.fontSize="26px";
			txt.style.fontFamily="Poor Richard";
			txt.innerHTML="<center>You have my gratitude for<br/> your help, "+"<?php echo $_SESSION["Username"]; ?>"+". <br/> However, your journey doesn't end here.</center>";
			window.clearInterval(interval);
			d.removeChild(d.children[0]);
			d.appendChild(txt);
			var link = document.createElement("a");
			link.id="link";
			link.innerHTML="Next";
			d.appendChild(link);
			document.cookie = "level=1";
			link.href="check_level.php";	
		}
	</script>
</html>
	