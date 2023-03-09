<?php
    $price = 2500;
    if($price > 2000){
        echo 'Too Expensive';
    }
    else{
        echo 'Sure you can afford it';
    }

    //! Ternary operator
    echo $price > 2000 ? 'Too Expensive' : 'Sure you can afford it';

    $chart_empty = ['bananas', 'pears', 'apples', 'oranges'];
    //!co lessing operator in php
    echo $chart_empty[2] ?? 'Not empty';

    //! Switch case
    $age = 18;
    switch($age){
        case 24: 
            echo 'You are an Adult bro';
            break;
        case 18:
            echo 'You are in the Teen age group';
            break;
        case 11:
            echo 'You are a young Kid';
            break;
        default:
            echo 'You are neither an Adult, Teen, Kid it makes me think you are not alive';
            break;
    }
?>