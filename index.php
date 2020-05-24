<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="Styles/style.css">

		</head>
		<body style="background-image: src('Images/loginBg.png');">
			<h1 id="topText">Append everything Together !</h1>
			<div id="loginBox">
			
				<p id="boxContent">Insert 3 Parameters</p>
				<form action="result.php" method="post">
					<input type="text" name="one" class="marg" id="emailF" placeholder="1"/>
					<input type="text" name="two" class="marg" id="other" placeholder="2" style="border-bottom: 2pt solid red;"/>
					<input type="text" name="three" class="marg" id="other" placeholder="3"/>
					<br>
					<button name="btn" id="submitBtn" style="margin-right: 345px;border-radius: 12px;color: white; background-color: #123456;">
						Append
					</button>
				</form>
			</div>
		</body>

	</html>