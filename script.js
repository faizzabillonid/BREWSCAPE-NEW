function loader(){
  document.querySelector('.loader').style.display = 'none';
}

function fadeOut(){
  setInterval(loader, 2000);
}

window.onload = fadeOut;
document.querySelectorAll('input[type="number"]').forEach(numberInput => {
  numberInput.oninput = () =>{
     if(numberInput.value.length > numberInput.maxLength) numberInput.value = numberInput.value.slice(0, numberInput.maxLength);
  };
});