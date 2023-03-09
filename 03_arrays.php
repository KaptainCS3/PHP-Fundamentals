<?php
    //!creating arrays
    //! #1
    $user_names = ['John', 'Bless', 'Charles', 'Junior', 'Leonard'];
    //! #2
    $user_ages = array(28, 22, 21, 23, 22);


    //! Associative Array
    $colors = [
        1 => 'Red',
        3 => 'Green',
        4 => 'Blue',
        8 => 'White'
    ];

    echo $colors[3];

    //!Working with multi dimensional arrays

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

    echo " " . $people[1]['first_name'];

    //!Converting associative array to JSON OBJECT
    $results = json_encode($people);
    print_r($results);
?>