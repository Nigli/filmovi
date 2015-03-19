<?php
require 'config.php';
//funkcija za vracanje niza iz fajla
$bookmarks = file("C:\Users\Glisovic\AppData\Local\Popcorn-Time\data\bookmarks.db");
//petlja za vracanje vrednosti $imdb_id iz niza i vracanje $movie_name preko obdbapi.com i slanje upita za ubacivanje vrednosti u bazu
foreach($bookmarks as $row){
    $row = json_decode($row);
    if (property_exists($row, 'imdb_id')){
        $omdb = json_decode(file_get_contents("http://www.omdbapi.com/?i={$row->imdb_id}"));
        $movie_name_string = str_replace(" ", "+", $omdb->Title);
        $trailer_id = getBetween(file_get_contents("http://gdata.youtube.com/feeds/api/videos?q=$movie_name_string-trailer&max-results=1&alt=json",null, null),'?v=','&feature');
        Listafilmova::InsertMovie($row->imdb_id,$omdb->Title,$trailer_id,$omdb->Year,$omdb->Runtime,$omdb->Director,$omdb->Actors,$omdb->Poster);
    }
}
redirect_to('pages/admin.php');