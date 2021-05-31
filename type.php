<!DOCTYPE html>
<html>
<head>
	<title>Typing Test</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
	<style>

		*{
			padding: 0;margin: 0;box-sizing: border-box;font-family: 'Nanum Gothic', sans-serif;
		}

		.main{
			width: 100%;
			height: 100vh;
			position: relative;
			background: #07CEDB;
		}

		.center{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			text-align: center;
		}

		h1{
			text-shadow: 0px 0px 6px #EAF0F3;
			margin-bottom: 30px;
		}

		h2{
			text-align: center;
		}

		textarea{
			background-color: #444;
			box-shadow: 0 0 5px rgba(0,0,0,0.5);
			border-radius: 10px 10px 0 0;
			border: 20px solid #A9C8D8;
			color: white;
		}

		#btn{
			padding: 10px 20px;
			border-radius: 5px;
			background-color: #F9F5F4;
			font-size: 1rem;
		}

	</style>
</head>
<body>
<div class="main">
	<div class="center">
	<h1>Hi Start your Test</h1>
	<h2 id="one"> </h2>
	<br>
	<textarea id="two" cols="100" rows="15" placeholder="Remember"> </textarea>	
	<br>
	<button id="btn" class="mainbtn">Start</button>
	</div>
	</div>

	<script type="text/javascript">
		
		// variable declaration
		const setwords = ["Hi i m web developer use php as a backend.",
		"Hi i m android developer use flutter as a backend.",
		"Hi i m Frontend developer uses Html & CSS.",
		"Hi I am Sql developer uses mysql."];

		const msg = document.getElementById('one');
		const typeWords = document.getElementById('two');
		const btn = document.getElementById('btn');
		let startTime,endTime;
        
        //function 1
		const playgame = () =>{
			let randomNumber = Math.floor(Math.random() * setwords.length);
			msg.innerText = setwords[randomNumber];
			let date = new Date();
			startTime = date.getTime();
			btn.innerText = "Done";
		} 
        
        //function 2
		const endPlay = () =>{
			let date = new Date();
			endTime = date.getTime();
			let totalTime = ((endTime - startTime) / 1000); 
			
			let totalString = typeWords.value;
			let wordCount = wordCounter(totalString);
             
			let speed = Math.round((wordCount / totalTime) * 60);
			let finalMSg = "you type "+ wordCount + " words at speed of " + speed + " words per minutes ";
			finalMSg += comapareWords(msg.innerText,totalString);
			msg.innerText = finalMSg;
		}

		const wordCounter = (str) => {

			let response = str.split(" ").length;
			return response;

		}

		const comapareWords = (str1,str2) => {

			let words1 = str1.split(" ");
			let words2 = str2.split(" ");
			let cnt = 0;
            

            //indes value = words 1 
			words1.forEach(function(item,index) {    
			  if (item == words2[index]) {
			  	    cnt++;
			  }
			})

			let errorWords = (words1.length - cnt);
			return (cnt + " correct out of " + words1.length + " words & total error are " + errorWords + ".");
		}
        

        //button event
		btn.addEventListener('click',function(){

			if (this.innerText == 'Start') {

				typeWords.disabled = false;
				playgame();

			}else if (this.innerText == "Done") {
				typeWords.disabled = true;
				btn.innerText = "Start";
				endPlay();
			}

		})
   
	</script>

</body>
</html>