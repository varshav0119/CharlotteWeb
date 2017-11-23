<!DOCTYPE HTML>
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
			#box
			{
				border:none;
				width:535px;
				height:540px;
				padding:24px;
				margin:0px;
				position:absolute;
				top:30px;
				left:100px;

			}
			#web
			{
				position: absolute;
				top:30px;
				left:890px;
			}
			#box>div
			{
				border:none;
				width:110px;
				height:110px;
				float:left;
				margin:10px;
				font-size:64px;
				cursor:pointer;
				text-align:center;
			}
			
			div.front, div.back{
				width:110px;
				height:110px;
				backface-visibility: hidden;
				transform-style:preserve-3d;
				position:absolute;
				transition:transform 0.2s;
			}
			#details{
				position:absolute;
				top:220px;
				left:730px;
				font-family:Orator Std;
				font-size:30px;
			}
			div.back
			{
				transform: rotateY(-180deg);
				font-size: 100px;

			}
			div.front{
				background-color:salmon;
			}
			
			#link{
				position:absolute;
				left:990px;
				top:300px;
				font-family:Orator Std;
				font-size:30px;
			}

		</style>
	</head>
	<body>
		<div id="box"></div>
		<img id="web" src="haha.png"/>	
		<div id="details">Number of wrong attempts : 0/16 </div>
	</body>
	<script>
		var theme = localStorage.getItem("theme");
		console.log(theme);
		if(theme=='url("theme1.jpg")'|| theme=="url('theme1.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_s1.jpg)";
		else if(theme=='url("theme2.jpg")' || theme=="url('theme2.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_s2.jpg)";
		var values=[];
		var tile_id=[];
		var x=0;
		var arr=['a','a','b','b','c','c','d','d','e','e','f','f','g','g','h','h'];
		var number_flipped=0;
		function shuffle(a)
		{
			var i=a.length;
			var j,temp;
			while(--i>0)
			{
				j=Math.floor(Math.random()*(i+1));
				temp=a[j];
				a[j]=a[i];
				a[i]=temp;
			}
		}
		function newBoard()
		{
			x=0;
			number_flipped=0;
			var output='';
			shuffle(arr);
			var a=document.getElementById("box");
			var b=a.children;
			for(var i=0;i<arr.length;i++)
			{
				output += '<div id="tile_'+i+'" ><div class="front" id="front_'+i+'"  onclick="memoryFlipTile(this,\''+arr[i]+'\')"></div><div class="back"></div></div>';
			}
			document.getElementById('box').innerHTML=output;
		}
		function memoryFlipTile(tile, val)
		{
			tile.parentNode.children[1].style.backgroundColor='white';
		 	tile.parentNode.children[1].innerHTML=val;
		 	if(tile.innerHTML=="" && values.length<2)
		 	{
		 		tile.parentNode.children[0].style.transform="rotateY(180deg)";
				tile.parentNode.children[1].style.transform="rotateY(0deg)";
		 		if(values.length==0)
		 		{
		 			values.push(val);
		 			tile_id.push(tile.id);
		 		}
		 		else if(values.length==1)
		 		{
		 			values.push(val);
		 			tile_id.push(tile.id);
		 			if(values[0]==values[1])
		 			{
		 				number_flipped+=2;
		 				values=[];
		 				tile_id=[];
		 				if(number_flipped==arr.length)
		 				{
		 					var y=document.getElementById("details");
			 				y.innerHTML="You have won!<br/>";
			 				var link = document.createElement("a");
							link.id="link";
							link.innerHTML="Next";
							link.id="link";
							link.href="check_level.php";
							document.body.appendChild(link);
							y.style.left="900px";
		 					document.cookie = "level=3";
		 				}
		 			}
			 		else
			 		{
			 			flag=0;
			 			x+=1;
			 			var w=document.getElementById("details");
			 			console.log(x);
			 			if(x==16)
			 			{
			 				flag=1;
							var b=document.getElementById("box");
							var c=b.children;
							var o='';
							for(var i=0;i<c.length;i++)
							{
								o += '<div id="tile_'+i+'" ><div class="front" id="front_'+i+'"  onclick="function a(){}"></div><div class="back"></div></div>';
							}
			 				w.textContent="You have lost!";
			 				console.log(w);
			 				var link = document.createElement("a");
							link.id="link";
							link.innerHTML="Go Home";
							link.href="index.php";
							w.appendChild(link);
							b.innerHTML=o;
							window.location.href="youlose.php";
			 			}
			 			else
			 			{
			 				w.textContent="Number of wrong attempts : "+x+"/16";
			 			}
			 			function flipBack()
			 			{
			 				var tile1=document.getElementById(tile_id[0]).parentNode.children;
			 				var tile2=document.getElementById(tile_id[1]).parentNode.children;
			 				tile1[0].style.transform="rotateY(0deg)";
							tile1[1].style.transform="rotateY(-180deg)";
							tile2[0].style.transform="rotateY(0deg)";
							tile2[1].style.transform="rotateY(-180deg)";
			 				values=[];
			 				tile_id=[];
			 			}
			 			if(flag==0)
		 					setTimeout(flipBack, 700);
		 		}
		 	}

		 }
	}
	newBoard();	
</script>
</html>