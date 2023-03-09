<?php
    //! For loop structure
   /* for(initial; condition; increment){
        code to run
    }
    */

    $num = 1;
    for($num; $num <= 20; $num++){
        echo "Number is :". $num . '<br>';
    }

    //! While loop structure
    $multiplier = 1;
    echo 'multiplication of 10 is'. '<br>';
    while($multiplier <= 10){
        echo $multiplier .' X 10 = ' . $multiplier * 10 . '<br>';
        $multiplier++; 
    }

    //! foreach used when working with arrays

  /*  foreach($variable as $values){
         $variable array to be iterated
         $values individual values in the array
         to get index use associative index $index => $values
    }
  */

    $user_names = ['John', 'Bless', 'Charles', 'Junior', 'Leonard'];

    //! To ge the length of the array we use the count() method to pass the array name
    //! #1
    echo 'Using a For loop' . '<br>';
    for($i = 0; $i < count($user_names); $i++){
        echo 'At index ' . $i . ' the user name is ' . $user_names[$i] . '<br>';
    }

    echo 'Using Foreach loop'. '<br>';
    //! #2 same concept in javascript as the for of loop
    //! To get the index use the associative property of arrays 
    foreach($user_names as $index => $user){

        echo 'At index '. $index . ' the user name is ' .  $user . '<br>'; //! return the same returns as using the for loop
    }

    // example we need to loop through the array a return all elements of this sub array

    $people = [
        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'age' => 35,
        ],
        [
            'first_name' => 'Johnson',
            'last_name' => 'Mike',
            'age' => 18,
        ],
        [
            'first_name' => 'Etiene',
            'last_name' => 'Edward',
            'age' => 25,
        ],
        [
            'first_name' => 'Edwin',
            'last_name' => 'Francis',
            'age' => 22,
        ]
        ];

    foreach($people as $index => $peo){
        echo 'At index ' . $index . '<br>';
        foreach ($peo as $key => $value) {
            print_r($key . ' - ' . $value . '<br>');
        }
        echo '<br>';
    }

?>