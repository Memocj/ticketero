// el array de los videos
let vids = [
  "/video/Derecho ALTA.mp4",
  "/video/marketing ALTA.mp4",
  "/video/Redes ALTA.mp4",
  "/video/UPDSMED alta final.mp4",
];
// la longitud del array de los videos
let leng = vids.length;
// un numero utilizado para saber que video se está reproduciendo
let n = 0;
// utilizo el evento "ended" para saber si el video se ha acabado
function playNextVideo() {
  vid.pause();
  vid.setAttribute("src", vids[n % leng]);
  n++;
  if (n === vids.length) {
    n = 0;
  }
  vid.play();
}

// añadimos un listener al evento "ended"
vid.addEventListener("ended", playNextVideo);

// empezamos a reproducir el primer video
playNextVideo();