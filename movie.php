<?php
class Movie {
    public $director;
    public $title;
    public $releaseYear;
    public $minutes;
    public $genre;

    public function __construct(string $_title, string $_director, int $_releaseYear, int $_minutes, string $_genre) {
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->genre = $_genre;
        $this->minutes = $_minutes;
    }
}
?>