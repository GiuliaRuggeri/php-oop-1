<?php

class Movie
{

    public $name;
    public $year;
    public $genre;
    public $language;

    public function __construct($name, $year, $genre, $language) {

        $this->name=$name;
        $this->year=$year;
        $this->genre=$genre;
        $this->language=$language;
        
    }

    public function getMovieInfo(){

        $info=$this->name .",". $this->year .",". $this->genre .",". $this->language;
    }
}
