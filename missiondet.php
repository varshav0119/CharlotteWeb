
<?php
	session_start();
?>
<html>
	<head>
		
		<link rel="icon" href="favi.png"/>
		<title>Charlotte's Web</title>
		
		<style>
			#original{
				width:67%;
				height:87%;
				border-radius:20px;
				background-color:white;
				position:absolute;
				left:16%;
				top:6%;
			}
			#quo
			{ 	font-family:Poor Richard;
				font-size:20;
				position:relative;
				top:10px;
			}
			#det1
			{ 
				font-family:Poor Richard;
				font-size:20;
				position:relative;
				top:10px;
			}
			#det2
			{ 
				font-family:Poor Richard;
				font-size:20;     
				//color:#2e0505;
				position: relative;
				left:50px;
				bottom:30px;
				
			}
			#unl
			{  
				text-shadow:3px 2px gray;
				font-size:37px;
				position:absolute;
				margin: 1.5%;
                left:42%;
                cursor: pointer;
			}
			
		    #pop
			{
                                
				position:absolute;
				left:12%;
				top:77%;
			
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
				position:absolute;
				left:90%;
				top:5%;
				width:12%;
				height:7%;
			}
		</style>
	</head>
	<body>
		<div id="original">
			<div id='back_hold'><a id='back' href='index.php'>Back</a></div>
			<br/><br/>
			<center><img src="logo_sign.jpg" width="23%" height="24%"/></center>

			<p > <center id="quo">As the wind blows through the desolate trees and all that can be heard is the falling of the leaves;</br>
                       Here in the forest, dark and deep, take a few chances because you have miles to go </br>
			                                           and a ray of hope is all I can show.</center></p>
			
             <center id="det1"> The sun will set soon and you're running out of time. The web is getting bigger by the minute</br>
      		                      and you'll be trapped in it and no one will know.</br>
                       
					    <div id="unl"> UNLESS.</div>
						</center>
						<div id="pop">
						 <center id="det2">You take a step to save yourself.</br>
						 Let me guide you. Just solve these simple puzzles one at a time and unlock
						 new stages </br>  that will get you closer to your way out. It's not that hard but you have
						 to be quick.</br>
						 So put your thinking cap on and get going before it's too late.
						 </center> 
                         </div>			
		</div>
	</body>
	<script>
		var theme = localStorage.getItem("theme");
		console.log(theme);
		if(theme=='url("theme1.jpg")' || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_1.jpg)";
		else if(theme=='url("theme2.jpg")' || theme=='url(theme2.jpg)')
			document.body.style.backgroundImage="url(bg_2.jpg)";
		var a= document.getElementById("unl");
                var b= document.getElementById("pop");
                b.style.visibility = "hidden";
		a.addEventListener("mouseover",pop,false);
                a.addEventListener("mouseout",unpop,false);
                function pop()
                    { 
                       var b= document.getElementById("pop");
                       b.style.visibility = "visible";
                       var v=b.setAttribute("style","transform: scale(0.9); transition: all .9s ease-in-out");
                       }  
                function unpop()
                    { 
                       var b= document.getElementById("pop");
                       b.style.visibility = "hidden";
                       b.removeAttribute("style","transform: scale(0.9); transition: all .2s ease-in-out");
                        b.style.visibility = "hidden";
                       }    
	</script>
</html>
