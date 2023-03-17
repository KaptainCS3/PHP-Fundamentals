<?php

    $my_str = "JW.org official website of Jehovah's Witnesses";

    //! strlen method
    //Returns string length
    
    echo strlen("$my_str \n");

    //! strpos method
    //Returns first occurrence of a substring, and takes two parameter
    print_r(strpos($my_str, 'website'));

    //! strrev method
    //Returns string in reverse
    print_r(strrev($my_str));
?>