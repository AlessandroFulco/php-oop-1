<?php

class Movie 
{

    // attributi d'istanza
    public $title;
    public $genre;
    public $year;
    public $director;
    public $rating;

    // funzione costruttore
    public function __construct(string $title, string $genre, int $year, string $director, int $rating)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->director = $director;
        $this->rating = $rating;
    }





} 