<?php
// get the data form three inputs in index
$one = $_POST['one'];
$two = $_POST['two'];
$three = $_POST['three'];
// explode each string data of input into an arraay by enter(\n) separator
$onearray = preg_split('/\r\n|\r|\n/', $one);
$twoarray = preg_split('/\r\n|\r|\n/', $two);
$threearray = preg_split('/\r\n|\r|\n/', $three);

if (@$_POST['a1']) {
	$rep1x = array_map(fn($el) => str_replace('a', '@', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('a', '@', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('a', '@', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('A', '@', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('A', '@', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('A', '@', $el), $rep3x);

} elseif (@$_POST['a2']) {

	$rep1x = array_map(fn($el) => str_replace('a', '4', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('a', '4', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('a', '4', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('A', '4', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('A', '4', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('A', '4', $el), $rep3x);

}  elseif (@$_POST['e1']) {

	$rep1x = array_map(fn($el) => str_replace('e', '3', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('e', '3', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('e', '3', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('E', '3', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('E', '3', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('E', '3', $el), $rep3x);
	
}  elseif (@$_POST['s1']) {

	$rep1x = array_map(fn($el) => str_replace('s', '$', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('s', '$', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('s', '$', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('S', '$', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('S', '$', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('S', '$', $el), $rep3x);
	
}  elseif (@$_POST['s2']) {

	$rep1x = array_map(fn($el) => str_replace('s', '5', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('s', '5', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('s', '5', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('S', '5', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('S', '5', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('S', '5', $el), $rep3x);
	
}  elseif (@$_POST['o1']) {

	$rep1x = array_map(fn($el) => str_replace('o', '0', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('o', '0', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('o', '0', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('O', '0', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('O', '0', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('O', '0', $el), $rep3x);
	
}  elseif (@$_POST['t1']) {

	$rep1x = array_map(fn($el) => str_replace('t', '7', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('t', '7', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('t', '7', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('T', '7', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('T', '7', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('T', '7', $el), $rep3x);
	
}  elseif (@$_POST['i1']) {

	$rep1x = array_map(fn($el) => str_replace('i', '!', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('i', '!', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('i', '!', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('I', '!', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('I', '!', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('I', '!', $el), $rep3x);	

}  elseif (@$_POST['i2']) {

	$rep1x = array_map(fn($el) => str_replace('i', '1', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('i', '1', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('i', '1', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('I', '1', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('I', '1', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('I', '1', $el), $rep3x);
	
}  elseif (@$_POST['l1']) {

	$rep1x = array_map(fn($el) => str_replace('l', '1', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('l', '1', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('l', '1', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('L', '1', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('L', '1', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('L', '1', $el), $rep3x);
	
}  elseif (@$_POST['w1']) {

	$rep1x = array_map(fn($el) => str_replace('w', 'vv', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('w', 'vv', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('w', 'vv', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('W', 'vv', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('W', 'vv', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('W', 'vv', $el), $rep3x);
	
}  elseif (@$_POST['g1']) {

	$rep1x = array_map(fn($el) => str_replace('g', '6', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('g', '6', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('g', '6', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('G', '6', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('G', '6', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('G', '6', $el), $rep3x);	

}	elseif (@$_POST['ucfirst']) {
	$rep1 = array_map('ucfirst', $onearray);
	$rep2 = array_map('ucfirst', $twoarray);
	$rep3 = array_map('ucfirst', $threearray);

}	elseif (@$_POST['allup']) {
	$rep1 = array_map('strtoupper', $onearray);
	$rep2 = array_map('strtoupper', $twoarray);
	$rep3 = array_map('strtoupper', $threearray);

}	elseif (@$_POST['alldown']) {
	$rep1 = array_map('strtolower', $onearray);
	$rep2 = array_map('strtolower', $twoarray);
	$rep3 = array_map('strtolower', $threearray);
}	
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