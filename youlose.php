<?php
	session_start();
?>

<html>
	<head>
		<link rel="icon" href="favi.png"/>
		<title>Charlotte's Web</title>
		<style>
			#original{
				width:35%;
				height:84%;
				border-radius:20px;
				background-color:white;
				position:absolute;
				left:32.5%;
				top:8%;
			}
			#sorry{ 
				font-family:Orator Std;
				font-size: 34px;
				position:absolute;
				margin: 1.5%;
				top:34%;
				width:70%;
                left:14%;
			}
			#det1{
			    font-family:Poor Richard;
				font-size:30px;     
                position:absolute;
				margin: 1.5%;
				top:46%;
				width:70%;
                left:14%;
				}
			 #s{
				text-decoration:none;
				border:none;
				width:11%;
				background-color:#060d20;
				color:#ffffff;
				height:4%;
				position:absolute;
				left:44%;
				top:80%;
				font-family:Orator Std;
				font-size:20;
				padding:10px;
			}
		</style>
	</head>
	<body>
		<div id="original">
			<br/><br/>
			<center><img src="logo_sign.jpg" width="52%" height="28%"/></center>
			<br/><br/>

			<div > <center id="sorry">Sorry, you lost
                       </center></div>
			
             <div> <center id="det1"> The difference between winning and losing is most often, not quitting. <br/>
			 Better luck next time!</center></div>
			 <br/><br/><br/>        
             <a href="index.php" id="s">Home</a>
		</div>
	</body>
	<script type="text/javascript">
		var theme = localStorage.getItem("theme");
		console.log(theme);
		if(theme=='url("theme1.jpg")'|| theme=="url('theme1.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_1.jpg)";
		else if(theme=='url("theme2.jpg")' || theme=="url('theme2.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_2.jpg)";
	</script>
</html>
