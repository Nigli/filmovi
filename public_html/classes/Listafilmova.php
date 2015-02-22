<?php
class Listafilmova{
	//get ALL from LISTAFILMOVA table
	public static function GetAllFromMovies(){
		$db = Conn::GetConnection();
		$res = mysqli_query($db,"SELECT * FROM listafilmova");
		while($rw = mysqli_fetch_object($res)){
			$array[]=$rw;
		}
		return $array;
	}
	//get MOVIE NAME by IMDB ID from LISTAFILMOVA table
	public static function GetMovieNameByIMDBId($imdb_id){				
		$db = Conn::GetConnection();
		$res = mysqli_query($db,"SELECT name FROM listafilmova WHERE imdb_id='$imdb_id' limit 1");
		while($rw = mysqli_fetch_object($res)){
			return $rw->name;
		}
	}
	//inserts IMDB ID and NAME into LISTAFILMOVA table
	public static function InsertMovieShort($imdb_id,$movie_name){
		$db = Conn::GetConnection();
		mysqli_query($db,"INSERT INTO listafilmova (imdb_id,name) VALUES('$imdb_id','$movie_name')");
	}
	//inserts ALL into LISTAFILMOVA table
	public static function InsertMovie($imdb_id,$movie_name,$trailer_id,$movie_year,$movie_runtime,$movie_director,$movie_actors,$movie_poster){
		$db = Conn::GetConnection();
		mysqli_query($db,"INSERT INTO listafilmova (imdb_id,name,youtube_id,year,runtime,director,actors,poster) VALUES('$imdb_id','$movie_name','$trailer_id','$movie_year','$movie_runtime','$movie_director','$movie_actors','$movie_poster')");
	}
	//deletes MOVIE by IMDB ID from LISTAFILMOVA table
	public static function DeleteMovie($imdb_id){
		$db = Conn::GetConnection();
		mysqli_query($db,"DELETE FROM listafilmova WHERE imdb_id='$imdb_id'");
	}
	//get ALL by IMDB ID from LISTAFILMOVA table
	public static function GetAllFromMoviesByIMDBId($imdb_id){
		$db = Conn::GetConnection();
		$res = mysqli_query($db,"SELECT * FROM listafilmova WHERE imdb_id='$imdb_id'");
		while($rw = mysqli_fetch_object($res)){
			$array[]=$rw;
		}
		return $array;
	}
}