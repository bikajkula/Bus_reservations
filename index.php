<html>
	<head>
		<title>Rezervacija autobuskih karata |MK</title>
		<meta charset="utf-8">
		<meta name="author" content="Mihajlo Karadzic" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark justify-content-center">
				<div class="justify-content-center">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Bus reservations</a>
						</li>
					</ul>
				</div>
		</nav>
		<div class="row justify-content-center mt-5 mb-5">
			<div class="col-lg-8 justify-content-center text-center mt-3">
				<table id="sedista" class="table table-dark">
				
					<?php  
						for($i=1;$i<=52;$i++){
							echo "<tr>";
							for($j=0;$j<4;$j++){
								if(($i+$j)<=52){
									echo '<td style="color:green;" onclick="uformu('.($j+$i) .')" id="'.($j+$i).'">' . ($j+$i) . ' </td>';
								}
								else{
									break;
								}
							}
							$i+=3;
							echo "</tr>";
						}
					?>
				</table>
					<label for="name">Ime:</label><br> <input type="text" name="name" required>
					<br>
					<label for="surn">Prezime:</label><br> <input type="text" name="surn" required>
					<br>
					Broj sedista:<br>
					<input id="sediste" type="text" name="sediste" required><br>
					<input type="submit" value="Rezervisi sediste" onclick="rezervisi()">
			</div>
		</div>
		<script src="js/script.js"></script>
	</body>
</html>
