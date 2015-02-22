<?php
require 'config.php';
//funkcija za vracanje niza iz fajla
$bookmarks = file("C:\Users\Glisovic\AppData\Local\Popcorn-Time\data\bookmarks.db");
//petlja za vracanje vrednosti $imdb_id iz niza i vracanje $movie_name preko obdbapi.com i slanje upita za ubacivanje vrednosti u bazu
foreach($bookmarks as $red){
    $imdb_id = substr($red,12,9);
    $info = file_get_contents("http://www.omdbapi.com/?i=$imdb_id",null, null);
    $start_title = '"Title":"';
    $end_title= '","Year":';
    $movie_name = getBetween($info,$start_title,$end_title);
    $movie_name_string = str_replace(" ", "+", $movie_name);
    $start_year= '","Year":"';
    $end_year= '","Rated"';
    $movie_year = getBetween($info,$start_year,$end_year);
    $start_runtime= '","Runtime":"';
    $end_runtime= '","Genre"';
    $movie_runtime = getBetween($info,$start_runtime,$end_runtime);
    $start_director= '","Director":"';
    $end_director= '","Writer"';
    $movie_director = getBetween($info,$start_director,$end_director);
    $start_actors= '","Actors":"';
    $end_actors= '","Plot"';
    $movie_actors = getBetween($info,$start_actors,$end_actors);
    $start_poster= '","Poster":"';
    $end_poster= '","Metascore"';
    $movie_poster = getBetween($info,$start_poster,$end_poster);
    //youtube
    $info_trailer = file_get_contents("http://gdata.youtube.com/feeds/api/videos?q=$movie_name_string-trailer&max-results=1&alt=json",null, null);
    $start_trailer = '?v=';
    $end_trailer = '&feature';
    $trailer_id = getBetween($info_trailer,$start_trailer,$end_trailer);
    if (substr($imdb_id,0,1) == "t") {
        Listafilmova::InsertMovie($imdb_id,$movie_name,$trailer_id,$movie_year,$movie_runtime,$movie_director,$movie_actors,$movie_poster);
    }
}
redirect_to('pages/admin.php');