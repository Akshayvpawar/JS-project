<!DOCTYPE html>
<html>
<head>
	<title>Love Calculator</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
	 body{

	 	background-image:url("https://images.unsplash.com/photo-1612490690182-1cbbc5ee55ad?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80");
	 	background-repeat: no-repeat;
	 	background-size: cover;
	 	background-position: center;
	 	width: 100%;
	 	height: 100vh;
	 	position: relative;
         
	 }

	 header{
	 	width: 100%;
	 	position: absolute;
	 	top: 50%;
	 	left: 75%;
	 	transform: translate(-50%,-50%);
	 }
	</style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
<div class="card w-50 mr-auto text-center" id="one">
  <div class="card-header bg-danger">Love Calculator</div>
  <div class="card-body">
  	<form class="form-inline w-75 m-auto">
  		<div class="form-group">
  			<input type="text" name="" class="form-control text-center" placeholder="Enter your Name" id="name">
  		</div>
        <div> <span class="pl-4 pr-4"> + </span> </div>
  		<div class="form-group">
  			<input type="text" name="" class="form-control text-center" placeholder="Enter love Name" id="lname">
  		</div>

  	</form>
  	<br>
  	<div class="w-75 m-auto">
  	 
  	<button class="btn btn-success w-50" onclick="myfun()">Click</button>

    </div>
    <br>
    <div class="w-75 m-auto">
    	<input type="text" name="" id="get" class="form-control w-25 m-auto text-center" placeholder="Result">
    </div>

  </div>
  <div class="card-footer">All The Best</div>
</div>
</header>

<script type="text/javascript">

	$(document).ready(function(){
	$(window).scroll(function(){

		var positiontop = $(document).scrollTop();
        console.log(positiontop);
        if ((positiontop > 0 ) && (positiontop < 4) ) {

        	$('#one').addClass('animate__animated animate__backInLeft');

        }


	});
	});
	
	function myfun (argument) {

		var name = document.getElementById('name').value;
		var lname = document.getElementById('lname').value;

		if (name == "") {

			alert("enter name");
	        }	
			else if (name.length <=3) {
				alert("ENter 3 characters");
			}else if(!isNaN(name)){
				alert('only characters allowed');
			}

			else if (lname == "") {

				alert("Enter Love name");
			}
			else if (lname.length <=3) {
				alert("Enter 3 characters");
			}
			else if (!isNaN(lname)) {
				alert("Enter characters only");
			}
		
	  else{
	    var a = Math.random()*100;
	    a = Math.floor(a);
	    document.getElementById('get').value = a + "" + "%"; 
	}
}



</script>

</body>
</html>