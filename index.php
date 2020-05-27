<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="Styles/style.css">

		</head>
		<body style="background-image: src('Images/loginBg.png');">
			<h1 id="topText" style="margin-top: 30px;">Append everything Together !</h1>
			<div id="loginBox" style="height: 750px;padding: 12px;">
				<p id="boxContent" style="margin-top: 25px;">Insert 3 Parameters</p>
				<form action="result.php" method="post">
					<textarea type="text" name="one" class="marg" id="emailF" placeholder="1" style="width:30%;height: 10cm;font-size: 15px;"/></textarea>
					<textarea type="text" name="two" class="marg" id="other" placeholder="2" style="border-bottom: 2pt solid red;height: 10cm;font-size: 15px;"/></textarea>
					<textarea type="text" name="three" class="marg" id="other" placeholder="3" style="border-bottom: 2pt solid green;height: 10cm;font-size: 15px;"/></textarea><br>

					<div class="leftcheck" style="float: right;margin-right: 101px;margin-top: 15px;">
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					</div>

					<div class="rightcheck" style="float: left;margin-left: 101px;margin-top: 15px;">
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					</div>

					<div class="centercheck" style="text-align: center;margin: auto;margin-right: 190px;margin-top: 15px;">
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					<input type="checkbox" name="allup" value="allup">
					<label for="allup">All Uppercase</label><br>
					</div>

					<button name="btn" id="submitBtn" style="margin-top: 3.5%; margin-right: 340px;border-radius: 12px;color: white; background-color: #123456;">
						Append
					</button>
				</form>
			</div>
		</body>

	</html>