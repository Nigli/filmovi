<?php 
class Movierankings{    
    //inserts RATINGS into MOVIE_RANKINGS table
    public static function InsertMovieRatins($imdb_id,$user_id,$rating){
            $db = Conn::GetConnection();
            $db->exec("INSERT INTO movie_rankings (imdb_id,user_id,rating) VALUES ('$imdb_id','$user_id','$rating')");
    }
    //get TOP 10 from MOVIE_RANKINGS table
    public static function GetTop10FromMovieRank() {
            $db = Conn::GetConnection();
            $res = $db->query("SELECT id, imdb_id, user_id, SUM(rating) as sumrating, date FROM movie_rankings WHERE watched=0 GROUP BY imdb_id ORDER BY sumrating DESC limit 10 ");
            while($movies = $res->fetchObject(get_called_class())){
                $array[]=$movies;
            }
            return $array;
    }
    //get TOP 10 by USER ID from MOVIE_RANKINGS table
    public static function GetTop10FromMovieRankByUserId($user_id) {
            $db = Conn::GetConnection();
            $res = $db->query("SELECT id, imdb_id, user_id, SUM(rating) as sumrating, date FROM movie_rankings WHERE user_id='$user_id' AND watched=0 GROUP BY imdb_id ORDER BY sumrating DESC limit 10");
            while($movies = $res->fetchObject(get_called_class())){
                $array[]=$movies;
            }
            if(isset($array)){
               return $array;
            }else {
                return null;
            }
    }
    //deletes MOVIE by IMDB ID from MOVIE_RANKINGS table
	public static function DeleteMovie($imdb_id){
		$db = Conn::GetConnection();
                $db->exec("DELETE FROM movie_rankings WHERE imdb_id='$imdb_id'");
	}
}