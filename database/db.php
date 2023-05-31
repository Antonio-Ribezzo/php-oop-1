<?php
require_once __DIR__ . '/../models/movie.php';
require_once __DIR__ . '/../models/category.php';


$arrayMovie = [
 new Movie("Pulp Fiction","1994",new Category("Crime","Thriller"), "Quentin Tarantino"),
 new Movie("Jurassic Park","1993",new Category("Adventure","Fantasy"), "Steven Spielberg"),
 new Movie("Taxi Driver","1976",new Category("Drime","Crime"), "Martin Scorsese"),
 new Movie("Twin Peaks","1990",new Category("Mistery",""), "David Lynch"),
 new Movie("Volver","2006",new Category("Drama","Comedy"), "Pedro Almodóvar"),
];


?>