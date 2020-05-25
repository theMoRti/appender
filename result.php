<?php

$one = $_POST['one'];
$two = $_POST['two'];

$onearray = explode(' ', $one);
$twoarray = explode(' ', $two);

?>
<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="Styles/style.css">

		</head>
		<body>
			<h1 id="topText">Here is your Result !</h1>
			<div id="loginBox">
			
				<p id="boxContent">Your Result is :</p>
				<form>
				
					<input type="text" class="marg" id="emailF" value="hey" style="font-size: 18px;"/>
					<br>
					<bottun type="submit" name="btn">
						<a id="submitBtn" href="index.php" style="margin-right: 344px;border-radius: 12px;color: white; background-color: #123456;">
							Return
						</a>
					</bottun>
				</form>
			</div>
		</body>

	</html>