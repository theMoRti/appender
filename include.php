<?php

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

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;

        case isset($_POST['e1']):

        break;
}
?>
