<!DOCTYPE html>
<html lang="en">
<head>

  <title>ShowReel - Anthony Pucelle - 3D Designer</title>
  <meta name="description" content=".">
  <meta name="author" content="">
  <?php include 'layout/head.php'; ?>

</head>
<body id="showreel" class="container">

  <?php include 'layout/header.php'; ?>
  <?php include 'layout/mobile-menu.php'; ?>  

	<div class="page">
    <a id="vidpause"><span class="pause icon-player"></span></a>
    <video autoplay id="bgvid">
        <source src="video/showreel_2015.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        <source src="video/showreel_2015.webm" type='video/webm; codecs="vp8, vorbis"' />
        Video not supported.
    </video>
  </div>

  <?php include 'layout/footer.php'; ?>

</div>
</body>

  <?php include 'layout/after-body.php'; ?>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51914780-2', 'melbrins.com');
    ga('send', 'pageview');
  </script>

  <script type="text/javascript">
    swfobject.registerObject("FLVPlayer");
  </script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#mobile-menu").hide();
        $("#toggle-nav").click(function() {
            $("#mobile-menu").slideToggle(500);
        });
    });
  </script>

  <!-- Script to toggle the pause mode -->
  <script>
    
    var vid = document.getElementById("bgvid");
    var pauseButton = document.getElementById("vidpause");

    function vidFade() {
        vid.classList.add("stopfade");
      }
        vid.addEventListener('ended', function() {
        // only functional if "loop" is removed
        vid.pause();
        // to capture IE10
        vidFade();
    });

    pauseButton.addEventListener("click", function() {
      vid.classList.toggle("stopfade");
      if (vid.paused) {
        vid.play();
        pauseButton.innerHTML = "<span class=\"pause icon-player\"></span>";
      } else {
        vid.pause();
        pauseButton.innerHTML = "<span class=\"play icon-player\"></span>";
      }
    })
  </script>

</html>
