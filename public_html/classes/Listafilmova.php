<?php
class Listafilmova{
	//get ALL from LISTAFILMOVA table
	public static function GetAllMovies(){
		$db = Conn::GetConnection();
                $res = $db->query("SELECT * FROM listafilmova");
                while ($movies = $res->fetchObject(get_called_class())) {
                    $array[]=$movies;
                }
                return $array;
	}
        public static function GetAllNotWatchedMovies(){
		$db = Conn::GetConnection();                
                $res = $db->query("SELECT * FROM listafilmova WHERE watched=0");
                while($movies = $res->fetchObject(get_called_class())){
                    $array[]=$movies;
                }
                return $array;
	}
	//get MOVIE NAME by IMDB ID from LISTAFILMOVA table
	public static function GetMovieNameByIMDBId($imdb_id){				
		$db = Conn::GetConnection();
                $res = $db->query("SELECT name FROM listafilmova WHERE imdb_id='$imdb_id' limit 1");
                $movie = $res->fetchObject(get_called_class());
                return $movie->name;
	}
	//inserts IMDB ID and NAME into LISTAFILMOVA table
	public static function InsertMovieShort($imdb_id,$movie_name){
		$db = Conn::GetConnection();
                $db->exec("INSERT INTO listafilmova (imdb_id,name) VALUES('$imdb_id','$movie_name')");
	}
	//inserts ALL into LISTAFILMOVA table
	public static function InsertMovie($imdb_id,$movie_name,$trailer_id,$movie_year,$movie_runtime,$movie_director,$movie_actors,$movie_poster){
		$db = Conn::GetConnection();
                $db->exec("INSERT INTO listafilmova (imdb_id,name,youtube_id,year,runtime,director,actors,poster) VALUES('$imdb_id','$movie_name','$trailer_id','$movie_year','$movie_runtime','$movie_director','$movie_actors','$movie_poster')");
        }
 //marks movie as watched
 public static function WatchedMovie($imdb_id,$watched){
		$db = Conn::GetConnection();
    $db-exec("UPDATE listafilmova SET watched='$watched' WHERE imdb_id='$imdb_id'");
	}
	//deletes MOVIE by IMDB ID from LISTAFILMOVA table
	public static function DeleteMovie($imdb_id){
		$db = Conn::GetConnection();
                $db-exec("DELETE FROM listafilmova WHERE imdb_id='$imdb_id'");
	}
}