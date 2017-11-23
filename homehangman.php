<?php 
	session_start();
	if(!isset($_SESSION["Username"]))
		header("location:index.php");
?>

<html>
<head>
    <title>Charlotte's Web</title>
	<link rel="icon" href="favi.png"/>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Architects+Daughter|Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="script2new.js"></script>
    <script>window.onload = draw;</script>
</head>

<body>
    <div id="introPage">
        <div id="introText">
            <p>Try to guess what I'm thinking</p>
            
            <div id="buttonContainer">
                <div id="sp" onclick="sp()">Start</div>
                
            </div>
        </div>
        <canvas id="homeHangman" width="250px" height="250px"></canvas>
    </div>
    <div id="singlePage">
        <p>Pick a category:</p>
        <div id="categoryHolder">
            <div id="category">
                <div id="category1">
                    <div id="phrases" onclick="phrase()">Phrases</div>
                    <div id="movies" onclick="movie()">Movies</div>
                </div>
                
            </div>
            
        </div>
    </div>
    
    <div id="gamePage">
        <p id="categoryName"></p>
        <div id="wordWrap">
            <div id="underline1">
                <div id="letter1"></div>
            </div>
            <div id="underline2">
                <div id="letter2"></div>
            </div>
            <div id="underline3">
                <div id="letter3"></div>
            </div>
            <div id="underline4">
                <div id="letter4"></div>
            </div>
            <div id="underline5">
                <div id="letter5"></div>
            </div>
            <div id="underline6">
                <div id="letter6"></div>
            </div>
            <div id="underline7">
                <div id="letter7"></div>
            </div>
            <div id="underline8">
                <div id="letter8"></div>
            </div>
            <div id="underline9">
                <div id="letter9"></div>
            </div>
            <div id="underline10">
                <div id="letter10"></div>
            </div>
            <div id="underline11">
                <div id="letter11"></div>
            </div>
            <div id="underline12">
                <div id="letter12"></div>
            </div>
            <div id="underline13">
                <div id="letter13"></div>
            </div>
            <div id="underline14">
                <div id="letter14"></div>
            </div>
            <div id="underline15">
                <div id="letter15"></div>
            </div>
            <div id="underline16">
                <div id="letter16"></div>
            </div>
            <div id="underline17">
                <div id="letter17"></div>
            </div>
            <div id="underline18">
                <div id="letter18"></div>
            </div>
            <div id="underline19">
                <div id="letter19"></div>
            </div>
            <div id="underline20">
                <div id="letter20"></div>
            </div>
            <div id="underline21">
                <div id="letter21"></div>
            </div>
            <div id="underline22">
                <div id="letter22"></div>
            </div>
            <div id="underline23">
                <div id="letter23"></div>
            </div>
            <div id="underline24">
                <div id="letter24"></div>
            </div>
            <div id="underline25">
                <div id="letter25"></div>
            </div>
            <div id="underline26">
                <div id="letter26"></div>
            </div>
            <div id="underline27">
                <div id="letter27"></div>
            </div>
            <div id="underline28">
                <div id="letter28"></div>
            </div>
            <div id="underline29">
                <div id="letter29"></div>
            </div>
            <div id="underline30">
                <div id="letter30"></div>
            </div>
            <div id="underline31">
                <div id="letter31"></div>
            </div>
            <div id="underline32">
                <div id="letter32"></div>
            </div>
            <div id="underline33">
                <div id="letter33"></div>
            </div>
            <div id="underline34">
                <div id="letter34"></div>
            </div>
            <div id="underline35">
                <div id="letter35"></div>
            </div>
            <div id="underline36">
                <div id="letter36"></div>
            </div>
            <div id="underline37">
                <div id="letter37"></div>
            </div>
            <div id="underline38">
                <div id="letter38"></div>
            </div>
            <div id="underline39">
                <div id="letter39"></div>
            </div>
            <div id="underline40">
                <div id="letter40"></div>
            </div>
            <div id="underline41">
                <div id="letter41"></div>
            </div>
            <div id="underline42">
                <div id="letter42"></div>
            </div>
            <div id="underline43">
                <div id="letter43"></div>
            </div>
            <div id="underline44">
                <div id="letter44"></div>
            </div>
            <div id="underline45">
                <div id="letter45"></div>
            </div>
            <div id="underline46">
                <div id="letter46"></div>
            </div>
            <div id="underline47">
                <div id="letter47"></div>
            </div>
            <div id="underline48">
                <div id="letter48"></div>
            </div>
            <div id="underline49">
                <div id="letter49"></div>
            </div>
            <div id="underline50">
                <div id="letter50"></div> 
            </div>               
            <div id="underline51">
                <div id="letter51"></div>
            </div>
            <div id="underline52">
                <div id="letter52"></div>
            </div>
            <div id="underline53">
                <div id="letter53"></div>
            </div>
            <div id="underline54">
                <div id="letter54"></div>
            </div>
            <div id="underline55">
                <div id="letter55"></div>
            </div>
            <div id="underline56">
                <div id="letter56"></div>
            </div>
            <div id="underline57">
                <div id="letter57"></div>
            </div>
            <div id="underline58">
                <div id="letter58"></div>
            </div>
            <div id="underline59">
                <div id="letter59"></div>
            </div>
            <div id="underline60">
                <div id="letter60"></div>
            </div>
            <div id="underline61">
                <div id="letter61"></div>
            </div>
            <div id="underline62">
                <div id="letter62"></div>
            </div>
            <div id="underline63">
                <div id="letter63"></div>
            </div>
            <div id="underline64">
                <div id="letter64"></div>
            </div>
            <div id="underline65">
                <div id="letter65"></div>
            </div>
            <div id="underline66">
                <div id="letter66"></div>
            </div>
            <div id="underline67">
                <div id="letter67"></div>
            </div>
            <div id="underline68">
                <div id="letter68"></div>
            </div>
            <div id="underline69">
                <div id="letter69"></div>
            </div>
            <div id="underline70">
                <div id="letter70"></div>
            </div>
            <div id="underline71">
                <div id="letter71"></div>
            </div>
            <div id="underline72">
                <div id="letter72"></div>
            </div>
            <div id="underline73">
                <div id="letter73"></div>
            </div>
            <div id="underline74">
                <div id="letter74"></div>
            </div>
            <div id="underline75">
                <div id="letter75"></div>
            </div>
            <div id="underline76">
                <div id="letter76"></div>
            </div>
            <div id="underline77">
                <div id="letter77"></div>
            </div>
            <div id="underline78">
                <div id="letter78"></div>
            </div>
            <div id="underline79">
                <div id="letter79"></div>
            </div>
            <div id="underline80">
                <div id="letter80"></div>
            </div>
            <div id="underline81">
                <div id="letter81"></div>
            </div>
            <div id="underline82">
                <div id="letter82"></div>
            </div>
            <div id="underline83">
                <div id="letter83"></div>
            </div>
            <div id="underline84">
                <div id="letter84"></div>
            </div>
            <div id="underline85">
                <div id="letter85"></div>
            </div>
            <div id="underline86">
                <div id="letter86"></div>
            </div>
            <div id="underline87">
                <div id="letter87"></div>
            </div>
            <div id="underline88">
                <div id="letter88"></div>
            </div>
            <div id="underline89">
                <div id="letter89"></div>
            </div>
            <div id="underline90">
                <div id="letter90"></div>
            </div>
            <div id="underline91">
                <div id="letter91"></div>
            </div>
            <div id="underline92">
                <div id="letter92"></div>
            </div>
            <div id="underline93">
                <div id="letter93"></div>
            </div>
            <div id="underline94">
                <div id="letter94"></div>
            </div>
            <div id="underline95">
                <div id="letter95"></div>
            </div>
            <div id="underline96">
                <div id="letter96"></div>
            </div>
            <div id="underline97">
                <div id="letter97"></div>
            </div>
            <div id="underline98">
                <div id="letter98"></div>
            </div>
            <div id="underline99">
                <div id="letter99"></div>
            </div>
            <div id="underline100">
                <div id="letter100"></div>
            </div>
        </div>
        <canvas id="hangman" width="250px" height="250px"></canvas>
        <div id="results"></div>
        <div id="letterBank">
                <div id="a" value="A" onclick="guessLetter()">A</div>
				<div id="b" value="B" onclick="guessLetter()">B</div>
				<div id="c" value="C" onclick="guessLetter()">C</div>
				<div id="d" value="D" onclick="guessLetter()">D</div>
				<div id="e" value="E" onclick="guessLetter()">E</div>
				<div id="f" value="F" onclick="guessLetter()">F</div>
				<div id="g" value="G" onclick="guessLetter()">G</div>
				<div id="h" value="H" onclick="guessLetter()">H</div>
				<div id="i" value="I" onclick="guessLetter()">I</div>
				<div id="j" value="J" onclick="guessLetter()">J</div>
				<div id="k" value="K" onclick="guessLetter()">K</div>
				<div id="l" value="L" onclick="guessLetter()">L</div>
				<div id="m" value="M" onclick="guessLetter()">M</div>
				<div id="n" value="N" onclick="guessLetter()">N</div>
				<div id="o" value="O" onclick="guessLetter()">O</div>
				<div id="p" value="P" onclick="guessLetter()">P</div>
				<div id="q" value="Q" onclick="guessLetter()">Q</div>
				<div id="r" value="R" onclick="guessLetter()">R</div>
				<div id="s" value="S" onclick="guessLetter()">S</div>
				<div id="t" value="T" onclick="guessLetter()">T</div>
				<div id="u" value="U" onclick="guessLetter()">U</div>
				<div id="v" value="V" onclick="guessLetter()">V</div>
				<div id="w" value="W" onclick="guessLetter()">W</div>
				<div id="x" value="X" onclick="guessLetter()">X</div>
				<div id="y" value="Y" onclick="guessLetter()">Y</div>
				<div id="z" value="Z" onclick="guessLetter()">Z</div>
        </div>
        
       
       
    </div>
    
</body>
</html>