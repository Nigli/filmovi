// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
var videoID;
//videoID = 'yIzhAKtEzY0';
function onYouTubeIframeAPIReady() {
  //var div = document.getElementsByClassName("trailer_title");//moje
  //var num = 15;//moje
  //var videoID = div[num].textContent;//moje
  player = new YT.Player('ytplayer', {
    //height: '390',
    //width: '640',
    //videoId: videoID,
//    playerVars: { 'autoplay': 1, 'color': 'red', 'theme': 'light', 'rel': 0 },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}
// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
  event.target.setPlaybackQuality('highres');
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    //setTimeout(stopVideo, 6000);
    done = true;
  }
}
function stopVideo() {
  player.stopVideo();
}
//function playVideo() {
//    player.playVideo();
//}
/**
 * this function will set video id global var
 */
function setVideoId(videoIdParam) {
   alert('usli smo');
    videoID = videoIdParam;
}
/**
 * change atribute value
 */
function atributeChange(ID) {
    document.getElementById("ytplayer").setAttribute("src", "https://www.youtube.com/embed/" + ID + "?autoplay=1&enablejsapi=1&rel=0&theme=light");
}
