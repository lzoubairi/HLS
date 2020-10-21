
<!DOCTYPE html>

<html>

  <head>
    <title>Read video with HLS</title>

  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <video id="video"
    muted="muted"></video>
    <script>
      if(Hls.isSupported()) {
        var video = document.getElementById('video');
        var hls = new Hls();
        hls.loadSource('https://wowzaec2demo.streamlock.net/live/bigbuckbunny/playlist.m3u8');
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED,function() {
        video.play();
      });
     }
    </script>
  </body>

</html>
