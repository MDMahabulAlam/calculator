<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Calculator by Mahabul</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="background">
		<div class="container">
			<div class="screen">
				<div class="screen-body">
					<div class="screen-body-item-left">
						<div class="app-title">
							<div class="title">
								PHP <br> Calculator <br>
							</div>
						</div>
					</div>
					<div class="screen-body-item">
						<div class="app-form">
							<form method="POST">
								<div class="app-form-group">
									<input type="text" class="app-form-control" placeholder="Enter a Number" name="num1">
								</div>
								<div class="app-form-group">
									<input type="text" class="app-form-control" placeholder="Enter another Number" name="num2">
								</div>

								<div class="select-style">
									<select name="operation">
										<option value="add">Addition</option>
										<option value="sub">Subtraction</option>
										<option value="mult">Multiplication</option>
										<option value="div">Divission</option>
									</select>
								</div>

								<div>
									<input type="submit" name="submit" value="submit" class="app-form-button">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="app-form-group showdata">
					<p>
						<?php
							if(isset($_POST['submit'])){
								$num1 = $_POST['num1'];
								$num2 = $_POST['num2'];
								if ($num1 != 0 && $num2 != 0) {
									// code...
									
									$operation = $_POST['operation'];

									switch($operation){
										case "add": $sum = $num1 + $num2;
											echo "The addition of {$num1} and {$num2} is {$sum}";
											break;
										case "sub": $sub = $num1 - $num2;
											echo "The subtraction of {$num1} and {$num2} is {$sub}";
											break;
										case "mult": $mult = $num1 * $num2;
											echo "The multiplication of {$num1} and {$num2} is {$mult}";
											break;
										case "div": $div = $num1 * $num2;
											echo "The division of {$num1} and {$num2} is {$div}";
											break;
										default: echo "Oops! You forgot to put any value.";
										}
								}
							}
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>