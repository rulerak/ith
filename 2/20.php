<!DOCTYPE html>
<?php require 'timer.php' ?>
<html>
	<head>
		<link rel="stylesheet" href="	../css/bootstrap.min.css">
		<script src="../js/bootstrap.min.js"></script>
		<script src="nb.js"></script>
		<script src="../js/jquery.min.js"></script>

	
	<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>

	<style>
		
		@font-face {
				    font-family: 'harry_potterregular';
    				src: url('../fonts/harrp___-webfont.woff2') format('woff2'),
         			url('../fonts/harrp___-webfont.woff') format('woff');
    				font-weight: normal;
    				font-style: normal;

			}	
			
			
			
		body {
    				background: url("../images/bg/20.jpg");
			    	background-repeat: no-repeat;
background-size: cover;
					color:white;    			
		}
		h1 {
				padding-top:50px;
			    font-family: 'harry_potterregular';
			    font-size: 50px;
				text-align: center;
				color:white;
			}

	

		#form1 {
			
				padding:170px;
			   	text-align: center;
			    font-family: 'harry_potterregular';
    			font-size:25px;
    			color:grey;
		}
		#form1 input{
			
				background: transparent;
		
		} 
		
			input[type=input] {
				
    			font-size:50px;
    			box-sizing: border-box;
    			border: 2px transparent blue ;
    			border-radius: 10px;
    			width:700px;
    			height:100px;
    			color:grey;
		}
		
		button{
				font-family: 'harry_potterregular';
				font-size=40px;
		}
		
		div.image {
 		
 		  content:url("../images/t.jpg");
 		   height: 400px;
		   width: 400px;
		margin:auto;
}​
	
	</style>
	
	</head>
	
	<body>
		
			<h1>Who's birthday party did Harry, Ron, and Hermione go to in The Chamber of Secrets?<h1>

					

	
			<form id="form1" action="" method="post">
				
		
			<input type="input" name="ans" id="ans"	 autocomplete="off" spellcheck="false" placeholder="YOUR ANSWER">	
			</form>
		
	<?php
			
			error_reporting(0);
			$ans2 = ($_POST['ans']);
			$ans2 = strtolower("$ans2");

			if ($ans2 == "nearly headless nick") 
			{
				setcookie('score', "20", time()+1800);
					
				header("Location: logout.php");
	
			}
 	?>
</body>
</html>
