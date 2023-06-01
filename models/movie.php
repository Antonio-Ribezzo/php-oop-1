<?php

    class Film{
        public $name;
        public $year_of_release;
        public $director;
        public $poster;

        public $category;

        // costruttore
        public function __construct($_name,$_year_of_release,$_director,$_poster, Array $_category){
            $this->name = $_name;
            $this->year_of_release = $_year_of_release;
            $this->director = $_director;
            $this->poster = $_poster;
            $this->category = $_category;
        }

        //funzione setter name
        public function get_movie_details(){
            return "Movie: $this->name, rilasciato al pubblico nel $this->year_of_release";
        }

    }
?>