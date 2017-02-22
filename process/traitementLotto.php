<?php
    


    $nr1 = $_POST["nr1"];
    $nr2 = $_POST["nr2"];
    $nr3 = $_POST["nr3"];
    $nr4 = $_POST["nr4"];
    $nr5 = $_POST["nr5"];

    $arrChoix = [$nr1, $nr2, $nr3, $nr4, $nr5];
    $arrChoix = array_unique($arrChoix, $sort_flags = SORT_NUMERIC);
    if (count($arrChoix) != 5) {
        header("location:./index.php?page=./pages/lotto.php&error=true");
    }

    print "Vos nombres sont: <br/>" . $nr1 . "<br/>" . $nr2 . "<br/>" . $nr3 . "<br/>" . $nr4 . "<br/>" . $nr5 . "<br>";
    

    $arrGagne = [];
    while (count($arrGagne) < 5) {
        $arrGagne[] = mt_rand(1, 50);
        $arrGagne = array_unique($arrGagne, $sort_flags = SORT_NUMERIC);
    }
    
    print "<br/>Les nombres gagnantes sont: <br/>" . $arrGagne[0] . "<br/>" . $arrGagne[1]  . "<br/>" . $arrGagne[2] . "<br/>" . $arrGagne[3] . "<br/>" . $arrGagne[4] . "<br/>";
    
    $result = array_merge($arrChoix, $arrGagne);
    $result = array_unique($result, $sort_flags = SORT_NUMERIC);

    $nrGagne = (count($result) - 10) * -1;

    if ($nrGagne == 0) {
        print "<br/>Vous n'avez pas des nombres gagnants.";
    }
    else if ($nrGagne == 1) {
        print "<br/>Vous avez 1 nombre gagnant.";
    }
    else {
        print "<br/>Vous avez " . $nrGagne . " nombres gagnants.";
    }
    
    
?>