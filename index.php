<?php

class Movie{
    // proprietà
    public $name;
    public $year_of_release;
    public $category=[];
    public $director;

    // costruttore
    function __construct($name,$year_of_release,array $category,$director){
        $this->name = $name;
        $this->year_of_release = $year_of_release;
        $this->category = $category;
        $this->director = $director;
    }

    // metodi
    function printFilm(){
        echo "$this->name è un film del $this->year_of_release di genere ";
        foreach($this->category as $key => $value){
            echo "$value ";
          }
        echo " diretto da $this->director <br>";
    }
}

// istanza 1
$film1 = new Movie("Pulp Fiction","1994",["Crime", "Drama","Thriller", "Comedy"],"Quentin Tarantino");
$film1->printFilm();

// istanza 2
$film2 = new Movie("Jurassic Park","1993",["Adventure", "Fantasy"],"Steven Spielberg");
$film2->printFilm();









?> 