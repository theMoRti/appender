<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="Styles/style.css">

		</head>
		<body style="background-image: src('Images/loginBg.png');">
			<h1 id="topText">Append everything Together !</h1>
			<div id="loginBox" style="height: 650px;padding: 12px;">
				<p id="boxContent" style="margin-top: 25px;">Insert 3 Parameters</p>
				<form action="result.php" method="post">
					<textarea type="text" name="one" class="marg" id="emailF" placeholder="1" style="width:30%;height: 10cm;font-size: 15px;"/></textarea>
					<textarea type="text" name="two" class="marg" id="other" placeholder="2" style="border-bottom: 2pt solid red;height: 10cm;font-size: 15px;"/></textarea>
					<textarea type="text" name="three" class="marg" id="other" placeholder="3" style="border-bottom: 2pt solid green;height: 10cm;font-size: 15px;"/></textarea>					<br>
					<br>
					<button name="btn" id="submitBtn" style="margin-top: 3.5%; margin-right: 345px;border-radius: 12px;color: white; background-color: #123456;">
						Append
					</button>
				</form>
			</div>
		</body>

	</html>