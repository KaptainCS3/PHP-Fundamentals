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
?>