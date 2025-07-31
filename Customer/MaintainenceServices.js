const overlay = document.getElementById('overlay');
const overlay2 = document.getElementById('overlay2');
const openOverlayButton2 = document.getElementById('openOverlay2');
const blurBackground = document.getElementById('blurBackground');
const openOverlayButton = document.getElementById('openOverlay');
const closeOverlayButton = document.getElementById('closeOverlay');
const closeOverlayButton2 = document.getElementById('closeOverlay1');

openOverlayButton.onclick = function(event) {
    event.preventDefault();
    overlay.style.display = 'flex';
    blurBackground.style.display = 'block';
};

closeOverlayButton.onclick = function() {
    overlay.style.display = 'none';
    blurBackground.style.display = 'none';
};

openOverlayButton2.onclick = function(event) {
    event.preventDefault();
    overlay2.style.display = 'block';
    blurBackground.style.display = 'block';
    overlay.style.display = 'none';
};

closeOverlayButton2.onclick = function() {
    overlay2.style.display = 'none';
    blurBackground.style.display = 'none';
};


function formOn1() {
    let btn = document.getElementById('lahore');
    btn.style.borderBottom = "5px solid black"; 
   let form_on = document.getElementById('divForm');
   form_on.style.display = 'block';
}
function formOn() {
    let btn = document.getElementById('Gujranwala');
    btn.style.borderBottom = "5px solid black"; 
   let form_on = document.getElementById('divForm');
   form_on.style.display = 'block';
}