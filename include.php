<?php
// wordprocessor
switch(true) {
    case isset($_POST['a1']):
        // replace every value in array what have a-A with @ and 4
	    $rep1x = array_map(fn($el) => str_replace('a', '@', $el), $onearray);
	    $rep2x = array_map(fn($el) => str_replace('a', '@', $el), $twoarray);
	    $rep3x = array_map(fn($el) => str_replace('a', '@', $el), $threearray);
	    $rep1 = array_map(fn($el) => str_replace('A', '@', $el), $rep1x);
	    $rep2 = array_map(fn($el) => str_replace('A', '@', $el), $rep2x);
	    $rep3 = array_map(fn($el) => str_replace('A', '@', $el), $rep3x);
    break;

    case isset($_POST['a2']):
        $rep1x = array_map(fn($el) => str_replace('a', '4', $el), $onearray);
        $rep2x = array_map(fn($el) => str_replace('a', '4', $el), $twoarray);
        $rep3x = array_map(fn($el) => str_replace('a', '4', $el), $threearray);
    
        $rep1 = array_map(fn($el) => str_replace('A', '4', $el), $rep1x);
        $rep2 = array_map(fn($el) => str_replace('A', '4', $el), $rep2x);
        $rep3 = array_map(fn($el) => str_replace('A', '4', $el), $rep3x);

        break;

        case isset($_POST['e1']):
            // replace every value in array what have E-e with 3
            $rep1x = array_map(fn($el) => str_replace('e', '3', $el), $onearray);
            $rep2x = array_map(fn($el) => str_replace('e', '3', $el), $twoarray);
            $rep3x = array_map(fn($el) => str_replace('e', '3', $el), $threearray);

            $rep1 = array_map(fn($el) => str_replace('E', '3', $el), $rep1x);
            $rep2 = array_map(fn($el) => str_replace('E', '3', $el), $rep2x);
            $rep3 = array_map(fn($el) => str_replace('E', '3', $el), $rep3x);
        break;

        case isset($_POST['s1']):
	// replace every value in array what have S-s with $ and 5
	$rep1x = array_map(fn($el) => str_replace('s', '$', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('s', '$', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('s', '$', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('S', '$', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('S', '$', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('S', '$', $el), $rep3x);
        break;

        case isset($_POST['s2']):

            $rep1x = array_map(fn($el) => str_replace('s', '5', $el), $onearray);
            $rep2x = array_map(fn($el) => str_replace('s', '5', $el), $twoarray);
            $rep3x = array_map(fn($el) => str_replace('s', '5', $el), $threearray);
        
            $rep1 = array_map(fn($el) => str_replace('S', '5', $el), $rep1x);
            $rep2 = array_map(fn($el) => str_replace('S', '5', $el), $rep2x);
            $rep3 = array_map(fn($el) => str_replace('S', '5', $el), $rep3x);
        break;

        case isset($_POST['o1']):
	// replace every value in array what have O-o with 0
	$rep1x = array_map(fn($el) => str_replace('o', '0', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('o', '0', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('o', '0', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('O', '0', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('O', '0', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('O', '0', $el), $rep3x);
        break;

        case isset($_POST['t1']):
	// replace every value in array what have T-t with 7
	$rep1x = array_map(fn($el) => str_replace('t', '7', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('t', '7', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('t', '7', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('T', '7', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('T', '7', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('T', '7', $el), $rep3x);
        break;

        case isset($_POST['i1']):
            	// replace every value in array what have I-i with ! and 1
	$rep1x = array_map(fn($el) => str_replace('i', '!', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('i', '!', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('i', '!', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('I', '!', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('I', '!', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('I', '!', $el), $rep3x);	
        break;

        case isset($_POST['i2']):
            $rep1x = array_map(fn($el) => str_replace('i', '1', $el), $onearray);
            $rep2x = array_map(fn($el) => str_replace('i', '1', $el), $twoarray);
            $rep3x = array_map(fn($el) => str_replace('i', '1', $el), $threearray);
        
            $rep1 = array_map(fn($el) => str_replace('I', '1', $el), $rep1x);
            $rep2 = array_map(fn($el) => str_replace('I', '1', $el), $rep2x);
            $rep3 = array_map(fn($el) => str_replace('I', '1', $el), $rep3x);
        break;

        case isset($_POST['l1']):
            	// replace every value in array what have L-l with 1
	$rep1x = array_map(fn($el) => str_replace('l', '1', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('l', '1', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('l', '1', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('L', '1', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('L', '1', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('L', '1', $el), $rep3x);
        break;

        case isset($_POST['w1']):
	// replace every value in array what have W-w with vv
	$rep1x = array_map(fn($el) => str_replace('w', 'vv', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('w', 'vv', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('w', 'vv', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('W', 'vv', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('W', 'vv', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('W', 'vv', $el), $rep3x);
        break;

        case isset($_POST['g1']):
	// replace every value in array what have G-g with 6
	$rep1x = array_map(fn($el) => str_replace('g', '6', $el), $onearray);
	$rep2x = array_map(fn($el) => str_replace('g', '6', $el), $twoarray);
	$rep3x = array_map(fn($el) => str_replace('g', '6', $el), $threearray);

	$rep1 = array_map(fn($el) => str_replace('G', '6', $el), $rep1x);
	$rep2 = array_map(fn($el) => str_replace('G', '6', $el), $rep2x);
	$rep3 = array_map(fn($el) => str_replace('G', '6', $el), $rep3x);	
        break;

        case isset($_POST['ucfirst']):
	// make first letter in each value Up in array 
	$rep1 = array_map('ucfirst', $onearray);
	$rep2 = array_map('ucfirst', $twoarray);
	$rep3 = array_map('ucfirst', $threearray);
        break;

        case isset($_POST['allup']):
	// make each value in the array uppercase 
	$rep1 = array_map('strtoupper', $onearray);
	$rep2 = array_map('strtoupper', $twoarray);
	$rep3 = array_map('strtoupper', $threearray);
        break;

        case isset($_POST['alldown']):
	// make each value in the array lowercase
	$rep1 = array_map('strtolower', $onearray);
	$rep2 = array_map('strtolower', $twoarray);
	$rep3 = array_map('strtolower', $threearray);
        break;
}
?>
