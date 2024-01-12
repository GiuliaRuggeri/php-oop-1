<?php

class Movie
{

    public $name;
    public $year;
    public $genre;
    public $language;
    public $actor;
    public $director;
    public $country;
    public $runningtime;

    public function __construct($name, $year, $genre, $language, $actor, $director, $country, $runningtime) {

        $this->name=$name;
        $this->year=$year;
        $this->genre=$genre;
        $this->language=$language;
        $this->actor=$actor;
        $this->director=$director;
        $this->country=$country;
        $this->runningtime=$runningtime;
        
    }

    public function getMovieInfo(){

        $info=$this->name .",". $this->year .",". implode(',', $this->genre) .",". $this->language .",". implode(',', $this->actor) .",". $this->director .",". $this->country .",". $this->runningtime;
        return $info; 
    }

    public function getGenreList(){
        $genres=implode(',', $this->genre);
        return $genres;
    }

    public function getActor(){
        $actors=implode(',', $this->actor);
        return $actors;
    }
}
