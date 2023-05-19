function loader(){
  document.querySelector('.loader').style.display = 'none';
}

function fadeOut(){
  setInterval(loader, 1000);
}

window.onload = fadeOut;

const reserveBtn = document.getElementById('reserve');
reserve.addEventListener('click', function() {
    alert('Button clicked!');
});