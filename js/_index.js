// window.addEventListener("message", function(e) {
//   if (e.origin === "http://localhost"){
//     const iframe = document.getElementById('contentFrame');
//     iframe.style.height = e.data.frameHeight + 'px';
//     iframe.style.width = e.data.frameWidth + 'px';
//   }
// }, false);

function changeContent(path) {
  document.getElementById("contentFrame").src = path;
}