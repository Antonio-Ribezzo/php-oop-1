<?php

class Movie{
    // proprietà
    public $name;
    public $year_of_release;
    public $category;
    public $director;

    // costruttore
    function __construct($name,$year_of_release,$category,$director){
        $this->name = $name;
        $this->year_of_release = $year_of_release;
        $this->category = $category;
        $this->director = $director;
    }

    // metodi
    function printFilm(){
        echo "$this->name è un film del $this->year_of_release di genere $this->category diretto da $this->director <br>";
    }
}

// istanza 1
$film1 = new Movie("Pulp Fiction","1994","Crime/Drama","Quentin Tarantino");
$film1->printFilm();

// istanza 2
$film2 = new Movie("Jurassic Park","1993","Adventure","Steven Spielberg");
$film2->printFilm();









?> 