<?php



//Simple Array
$number = [1,23,44,56,23];
$fruits = array('apple', 'orange', 'banana', 'pear');
var_dump($number);
echo $fruits[2].'<br/>';


//Associative Array - have their own keys(can make keys for them - string keys are recommended)
//they're used for tabular data - database data,
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'yellow'
];
echo $colors[4].'<br/>';

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#oof'
];

echo $hex['blue'].'<br/>';

$person = [
    'firstname' => 'Lailah',
    'lastname' => 'Grant'
];
echo $person['firstname'].'<br/>';

//multi-dimensional array - arrays within arrays
$people = [
    [
        'firstname' => 'Lailah',
        'lastname' => 'Grant',
        'email' => 'laig@gmail.com'
    ],
    [
        'firstname' => 'Bush',
        'lastname' => 'Grant',
        'email' => 'bushg@gmail.com'
    ],
    [
        'firstname' => 'waswa',
        'lastname' => 'Grant',
        'email' => 'wasg@gmail.com'
    ],
    [
        'firstname' => 'kato',
        'lastname' => 'Grant',
        'email' => 'katg@gmail.com'
    ]
    ];
echo $people[3]['firstname'].'<br/>';

//to turn array code to json data -json_encode 
var_dump(json_encode($people));

//to turn json data or json object to associative array -json_encode - json_decode




//