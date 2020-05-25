<?php

$one = $_POST['one'];
$two = $_POST['two'];

$onearray = preg_split('/\r\n|\r|\n/', $one);
$twoarray = preg_split('/\r\n|\r|\n/', $two);

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
				
					<textarea type="text" rows="4" cols="50" class="marg" id="emailF" style="font-size: 18px;"/><?php
						$i = 0;
						$countarr1 = count($onearray);

						for($i = 0; $i < $countarr1; $i++){
							@$onearray[$i] = @$onearray[$i].@$twoarray[$i];
							echo @$onearray[$i]."\r\n";
						}
					?></textarea>
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