<?php
// get the data form three inputs in index
$one = $_POST['one'];
$two = $_POST['two'];
$three = $_POST['three'];
// explode each string data of input into an arraay by enter(\n) separator
$onearray = preg_split('/\r\n|\r|\n/', $one);
$twoarray = preg_split('/\r\n|\r|\n/', $two);
$threearray = preg_split('/\r\n|\r|\n/', $three);

$rep1 = $onearray;
$rep2 = $twoarray;
$rep3 = $threearray;	

include_once "include.php";
?>
<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="Styles/style.css">

		</head>
		<body>
			<h1 id="topText">Here is your Result !</h1>
			<div id="loginBox" style="height: 635px;padding: 12px;">
				<p id="boxContent" style="margin-top: 25px;">Your Result is :</p>
				<form>
				
					<textarea type="text" rows="4" cols="50" class="marg" id="emailF" style="border: 1.7pt solid #2196F3;font-size: 18px; width: 60%; height: 10cm;"/><?php
						$i = 0;
						// get indexes numbers of first input
						$countarr1 = count($rep1);
						//$c = array_combine($twoarray, $threearray);
						
						for($i = 0; $i < $countarr1; $i++){
							// showing all values of second input values
							foreach ($rep2 as $val2) {
								// showing all values of third input values
								foreach ($rep3 as $val3) {
								// append proccess 
								@$resultarr[$i] = @$rep1[$i].@$val2.@$val3;
								echo @$resultarr[$i]."\r\n";
								}
							}	
						}
					?></textarea>
					<br>
					<bottun type="submit" name="btn">
						<a id="submitBtn" href="index.php" style="margin-top: 4% !important; margin-right: 344px;border-radius: 12px;color: white; background-color: #123456;">
							Return
						</a>
					</bottun>
				</form>
			</div>
		</body>

	</html>