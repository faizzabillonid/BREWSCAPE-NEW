function loader(){
  document.querySelector('.loader').style.display = 'none';
}

function fadeOut(){
  setInterval(loader, 1000);
}

window.onload = fadeOut;

const reserveBtn = document.getElementById('reserveBtn');
reserveBtn.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission

    const datetime = document.getElementById('datetime').value;
    const numPeople = document.getElementById('schedule').value;

    if (datetime && numPeople) {
        // Convert datetime to the desired format
        const formattedDatetime = new Date(datetime);
        const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
        const formattedDatetimeString = formattedDatetime.toLocaleDateString('en-US', options);

        const confirmationMessage = `Booking confirmed for ${numPeople} people at ${formattedDatetimeString}`;
        alert(confirmationMessage);
    } else {
        alert('Please fill in all required fields.');
    }
});