<html>
<head>
<meta charset="UTF-8">
	<!-- jQuery, Popper and Bootstrap. -->
	<script src="js/other/jquery/jquery-3.3.1.min.js"></script>
	<script src="js/other/popper/popper.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<script src="js/bootstrap/bootstrap.min.js"></script>

	<!--  -->
	<script src="js/main.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<title>404 | Crooked Pictures</title>
	<script>
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
</head>
<style type="text/css">
	/* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
<!-- The video -->
<video autoplay id="myVideo">
  <source src="second.mp4" type="video/mp4">
</video>

<script type='text/javascript'>
    document.getElementById('myVideo').addEventListener('ended',myHandler,false);
    function myHandler(e) {
        window.location.href = "/";
    }
</script>

<!-- Optional: some overlay text to describe the video -->
<!-- <div class="content">
  <h1>Heading</h1>
  <p>Lorem ipsum...</p>
  <button id="myBtn" onclick="myFunction()">Pause</button>
</div> -->
</html>