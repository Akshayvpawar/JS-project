<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container my-auto">
 <div class="card mt-5">
 	<div class="card-header text-center bg-info">BMI Calculator</div>
 	<div class="card-body">
 		<form class="w-50 m-auto">
 			<div class="form-group">
 				<label>Weight:</label>
 				<input type="number" name="" id="weight" class="form-control" placeholder="Weight in Kg" required="">
 			</div>
 			<div class="form-group">
 				<label>Height:</label>
 				<input type="number" name="" id="height" class="form-control" placeholder="Height in Feet">
 			</div>
 			<div class="form-group">
 				<label>BMI Value:</label>
 				<input type="number" name="" id="total" class="form-control">
 			</div>
 			<div>
 				<button type="submit" class="btn btn-success text-center border-0" onclick="myfun()">Check BMI</button>
 			</div>
 		</form>
 	</div>
 	<div class="card-footer text-center" id="text1">
 		<p id="text"></p>
 	</div>
 </div>
</div>

<script type="text/javascript">
	
	function myfun (argument) {

	var a = document.getElementById("weight").value;
	var b = document.getElementById("height").value;	 

	b = b * 12;
	b = b * 0.025;

	var bmi = a / (b * b);

	bmi = Math.round(bmi);

	document.getElementById("total").value = bmi;
	
	if ((bmi>0) && (bmi<18.5)) {
	     document.getElementById('text1').style.backgroundColor ="#01A9DB";
       document.getElementById('text').style.color = '#ffff';
       document.getElementById("text").innerHTML = "Result of BMI Index :" + " " +  "Under weight";
	}
    else if ((bmi>18.5) && (bmi<24)) {
    	 document.getElementById('text1').style.backgroundColor ="#088A29";
       document.getElementById('text').style.color = '#ffff';
    	 document.getElementById("text").innerHTML = "Result of BMI Index :" + " " + "Normal";
    }
    else if ((bmi>24) && (bmi<29)) {
    	document.getElementById('text1').style.backgroundColor ="#FF8000";
      document.getElementById('text').style.color = '#ffff';
    	document.getElementById("text").innerHTML = "Result of BMI Index :" + " " + "Overweight";
    }

    else if ((bmi>29) && (bmi<40)) {
      document.getElementById('text1').style.backgroundColor ="#DF0101";
      document.getElementById('text').style.color = '#ffff';
      document.getElementById("text").innerHTML = "Result of BMI Index :" + " " + "Obesity";
    }
   
	}

	
</script>
</body>
</html>