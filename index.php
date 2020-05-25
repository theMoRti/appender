<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="Styles/style.css">

		</head>
		<body style="background-image: src('Images/loginBg.png');">
			<h1 id="topText">Append everything Together !</h1>
			<div id="loginBox">
				<p>Tip : Appender is not a Passworlist maker. it used just for Append more than 1 text (3 Input).</p>
				<p> for having more feature, you can use Passwordlist Maker!</p>
				<p id="boxContent" style="margin-top: 25px;">Insert 3 Parameters</p>
				<form action="result.php" method="post">
					<textarea type="text" name="one" class="marg" id="emailF" placeholder="1"/></textarea>
					<textarea type="text" name="two" class="marg" id="other" placeholder="2" style="border-bottom: 2pt solid red;"/></textarea>
					<textarea type="text" name="three" class="marg" id="other" placeholder="3" style="border-bottom: 2pt solid green;"/></textarea>					<br>
					<br>
					<button name="btn" id="submitBtn" style="margin-right: 345px;border-radius: 12px;color: white; background-color: #123456;">
						Append
					</button>
				</form>
			</div>
		</body>

	</html>