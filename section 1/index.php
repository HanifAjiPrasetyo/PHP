<?php
// ASSOCIATIVE ARRAY
// $books = [
//     [
//         'name' => "Do Androids Dream of Electric Sheep",
//         'author' => "Philip K. Dick",
//         'releaseYear' => 1968,
//         'purchaseUrl' => "http://example.com"
//     ],
//     [
//         'name' => "Project Hail Mary",
//         'author' => "Andy Weir",
//         'releaseYear' => 2021,
//         'purchaseUrl' => "http://example.com"
//     ],
//     [
//         'name' => "The Martian",
//         'author' => "Andy Weir",
//         'releaseYear' => 2011,
//         'purchaseUrl' => "http://example.com"
//     ]
// ];

// $books[3] = [
//     'name' => "TEST",
//     'author' => "Philip K. Dick",
//     'releaseYear' => 1968,
//     'purchaseUrl' => "http://example.com"
// ];



// function filterByAuthor($books, $author)
// {
//     $filteredBooks = [];

//     foreach($books as $book){
//         if($book['author'] === $author){
//         }
//     }
// }

// unset($books[2]);
// foreach ($books as $book) {
//     echo '<ul><li><a href="$book["purchaseUrl"]"><h4>' . $book["name"] . '(' . $book["releaseYear"] . ') - By ' . $book["author"] . '</h4></a></li></ul>';
// }

// Built-in function untuk filtering array
// $filteredBooks = array_filter($books, function ($book) {
//     return $book['releaseYear'] > 2000;
// });

// require 'index.view.php';

// LAMBDA FUNCTION

// EXTRACT VARIABLES
// function greeting($name)
// {
//     return "Halo $name";
// }
// $greetings = greeting("Hanif");
// echo $greetings;

// // ANONYMOUS / LAMBDA FUNCTION
// $greetings = function ($name) {
//     return "Halo $name";
// };
// echo $greetings("Hanif");
