<?php

    $my_str = "JW.org official website of Jehovah's Witnesses";

    //! strlen method
    //Returns string length
    
    echo strlen("$my_str \n");

    //! strpos method
    //Returns first occurrence of a substring, and takes two parameter
    print_r(strpos($my_str, 'website'));

    //!strrpos method
    //Returns last occurrence of a substring
    print_r(strrpos($my_str, "of"));
    //! strrev method
    //Returns string in reverse
    print_r(strrev($my_str));

    //!uppercase
    echo strtoupper($my_str);
    
    //!lowercase
    echo strtolower($my_str);
    
    //! uppercase first letter in string
    echo ucwords($my_str);

    //!Replace string
    echo str_replace('JW.org', 'https://www.jw.org', $my_str);

    //!slice a string
    echo substr($my_str, 0, 18);
?>