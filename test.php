<html>
	<head>
					
		<link rel="stylesheet"  href="css/animate.css">
	    <link rel="stylesheet" href="css/miestilo.css">
        <link rel="stylesheet" href="css/miestliologin.css">
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Averia+Libre" rel="stylesheet">

        <script>$(function(){ 
        			$("#bt").click(function(){
                       $("#dv").hide();
			        }); 
			        $("#bt2").click(function(){
                       $("#dv").show();
			        });
			        $("#bt3").click(function(){
			        	$("#divix").load("test2.php");
			        });
			    });
        </script>
	
	</head>
	<body>
		<div class="container">
			<div class="col-md-4">
				<input type="submit" value="Hide" class="btn btn-primary" id="bt">
				<input type="submit" value="Show" class="btn btn-warning" id="bt2">
				<div id="dv">
					<h1>HELLO</h1><br><br>
					<h1>HELLO</h1><br><br>
					<h1>HELLO</h1><br><br>
				</div>
			</div>
			<div class="col-md-4">
				<input type="submit" value="click" class="btn btn-info" id="bt3">

				<div id="divix">
					<h1>hello it me again</h1>
				</div>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
		
	</body>
</html>