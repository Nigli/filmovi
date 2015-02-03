<?php
    $youtube_id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trailer</title>
        <script type="text/javascript" src="js/youtube_iframe.js"></script>
        <link href="css/style.css" type="text/css" rel="stylesheet"> 
    </head>
  <body>
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
      <div id="player"></div>
      <div id="trailer_title"><?php  echo $youtube_id ?></div>
      <div></div>
  </body>
</html>