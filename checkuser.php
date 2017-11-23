<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","Charlotte's Web");
	if(!$conn)
		echo "Error. Please connect to database and try again.";
	else
	{
		extract($_POST);
		$query = "SELECT * FROM Users";
		$res=mysqli_query($conn,$query);
		$numr=mysqli_num_rows($res);
		$flag=0;
		if($numr>0)
		{
			for($i=0;$i<$numr;$i++)
			{
				$row=mysqli_fetch_assoc($res);
				if($un==$row["Username"])
				{
					$flag=1;
					if($pw!=$row["Password"])
					{
						echo "<div id='d'><center><p id='txt1'> Username and Password don't match! Please try again. </p>";
						echo "<br/><br/><a id='linky' href='signin.html'>Sign In</a><br/><br/>";
						echo "<a id='homie' href='index.php'>Homepage</a></center></div>";
					}
					else
					{
						echo "<div id='d'><center><p id='txt2'> Successfully Signed In. </p><br/>";
						echo "<a id='homie' href='index.php'>Homepage</a></center></div>";
						$_SESSION["Username"]=$un;
					}
				}
				
			}
		}
		if($flag==0)
		{
			echo "<div id='d'><center><p id='inv'> Invalid credentials! Please try again. </p>";
			echo "<br/><br/><a id='link' href='signin.html'>Sign In</a><br/><br/>";
			echo "<a id='home' href='index.php'>Homepage</a></center></div>";
		}
	}
?>


<html>
	<head>
		<link rel="icon" href="favi.png"/>
		<title>Charlotte's Web</title>
		<style>
			body{
				background-image:url(bg.jpg);
			}
			#d
			{
				width:30%;
				height:40%;
				display:flex;
				background-color:white;
				position:absolute;
				left:35%;
				top:30%;
				border-radius:20px;
			}
			#inv,#home,#link{
				position:relative;
				font-family:Orator Std;
				font-size:25px;
				padding-left:5px;
				padding-right:5px;
			}
			#txt1,#txt2
			{
				position:relative;
				top:25px;
				left:30px;
				font-family:Orator Std;
				font-size:25px;
				padding-left:5px;
				padding-right:5px;
			}
			#linky
			{
				font-family:Orator Std;
				font-size:20px;
			}
			#homie
			{
				font-family:Orator Std;
				font-size:20px;
				position:relative;
				left:25px;
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
		if(theme=='url("theme1.jpg")' || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_1.jpg)";
		else if(theme=='url("theme2.jpg")' || theme=='url(theme2.jpg)')
			document.body.style.backgroundImage="url(bg_2.jpg)";
		if(document.getElementById("txt2"))
			sessionStorage.setItem("out","yes");
		else
			sessionStorage.setItem("out","no");
	</script>
</html>