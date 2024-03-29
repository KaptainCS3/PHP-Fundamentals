<?php

    //!cover array methods
   $user_names = ['John', 'Bless', 'Charles', 'Junior', 'Leonard'];

   //!get array length

   echo count($user_names);

   //!search if item exist 

   print_r(in_array('Junior', $user_names)); // return 1 for true and blank overwise

   //!Add element from array
   //! #1
   $user_names[] = 'Peter';

   //! #2 using push method add at the end of the array and unshift add at the beginning
   //! same concept in JS push, unshift
   array_push($user_names, 'Steve', 'Justine', 'Bryan');

    array_unshift($user_names, 'Esther', 'Joyce');
    
    //! Remove element from array

    array_pop($user_names); // remove at the end

    array_shift($user_names); // remove at the beginning

    unset($user_names[0]); //remove at the specific index and remove element and index from array


    //!Split array into chunks

    $chuck_arrays = array_chunk($user_names, 3);

    print_r($chuck_arrays);

    //!Concatenate array

    $odd_num1 = [1,3,5];
    $odd_num2 = [7, 9 , 11];
    $total_odd = array_merge($odd_num1, $odd_num2);

    //!Spread operator

    $even_num1 = [0,2,4,6, 8];
    $even_num2 = [10,12,14, 16, 18];
    $total_even = [...$even_num1, ...$even_num2];
    print_r($total_odd);

    //!Combine method
    //! array types must be the same else it returns an error message
    $combine_array = array_combine($even_num1, $even_num2);
    print_r($combine_array);

    //!Key method
    //!Returns keys/associates of an array
    $keys = array_keys($combine_array);
    print_r($keys);

    //!Flip method
    //!flips the key to value and vice versal
    $flipped_array = array_flip($combine_array);
    print_r($flipped_array);

    //!Range method
    $numbers = range(1, 10);
    print_r($numbers);

    //!Map method
    $square_array = array_map(function($num){
        return "square of $num: $num X $num = " . $num * $num;
    }, $numbers);

    print_r($square_array);

    //!Filter method

    $is_even = array_filter($numbers, function($num){
        return $num % 2 === 0;
    });

    print_r($is_even);

    //!Reduce method

    $is_reduce = array_reduce($numbers, function($current ,$num){
        return $current + $num;
    });
    print_r($is_reduce);
?>