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

					<input type="checkbox" name="i1" value="i1">
					<label for="i1">I-i to !</label><br>

					<input type="checkbox" name="i2" value="i2">
					<label for="i2">I-i to 1</label><br>

					<input type="checkbox" name="l1" value="l1">
					<label for="l1">L-l to 1</label><br>

					<input type="checkbox" name="w1" value="w1">
					<label for="w1">W-w to vv</label><br>

					<input type="checkbox" name="g1" value="g1">
					<label for="g1">G-g to 6</label><br>

					</div>

					<div class="rightcheck" style="float: left;margin-left: 101px;margin-top: 15px;">

					<input type="checkbox" name="allup" value="allup">
					<label for="allup">Uppercase</label><br>

					<input type="checkbox" name="alldown" value="alldown">
					<label for="alldown">Lowercase</label><br>

					<input type="checkbox" name="ucfirst" value="ucfirst">
					<label for="ucfirst">Up first</label><br>

					<input type="checkbox" name="a1" value="a1">
					<label for="a1">A-a to @</label><br>

					<input type="checkbox" name="a2" value="a2">
					<label for="a2">A-a to 4</label><br>

					</div>

					<div class="centercheck" style="text-align: center;margin: auto;margin-right: 190px;margin-top: 15px;">
					
					<input type="checkbox" name="e1" value="e1">
					<label for="e1">E-e to 3</label><br>

					<input type="checkbox" name="s1" value="s1">
					<label for="s1">S-s to $</label><br>

					<input type="checkbox" name="s2" value="s2">
					<label for="s2">S-s to 5</label><br>

					<input type="checkbox" name="o1" value="o1">
					<label for="o1">O-o to 0</label><br>

					<input type="checkbox" name="t1" value="t1">
					<label for="t1">T-t to 7</label><br>

					</div>

					<button name="btn" id="submitBtn" style="margin-top: 3.5%; margin-right: 340px;border-radius: 12px;color: white; background-color: #123456;">
						Append
					</button>
				</form>
			</div>
		</body>

	</html>