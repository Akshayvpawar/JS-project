<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
	
	<h1>Javascript Ludo</h1>
	
	<div class="dice">
		<p>Player1</p>
		<img src="../img/dice1.png" id="one">
	</div>

	<div class="dice">
		<p>Player2</p>
		<img src="../img/dice1.png" id="two" style="height: 70%;width: 90%;">
	</div>

	<div>
		<button onclick="arrow()">Click Me</button>
	</div>

</div>

<script type="text/javascript">
	
	//For dice 1
	arrow = () => {
	const play1 = Math.floor(Math.random() * 6) + 1;
	//console.log(play1);
    const playdice = `../img/dice${play1}.png`;
    document.getElementById('one').setAttribute('src', playdice);

    //for dice 2
    const play2 = Math.floor(Math.random() * 6) + 1;
	//console.log(play2);
    const playdice2 = `../img/dice${play2}.png`;
    document.getElementById('two').setAttribute('src', playdice2);
    

    //for result 
    if (play1 > play2) {

    	document.querySelector("h1").innerHTML = "Player 1 won";
    
    }else if (play1 < play2) {

    	document.querySelector("h1").innerHTML = "Player 2 won ";
    	
    }else{
    	document.querySelector("h1").innerHTML = "Tie";
    }
}
</script>

</body>
</html>