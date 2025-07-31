document.addEventListener('DOMContentLoaded', () => {
  const elements = document.querySelectorAll('.reveal, .slideIn, .slideOut, .slideUp, .slideDown, .expand');

  function animateElements() {
      const windowHeight = window.innerHeight;

      elements.forEach(element => {
          const elementTop = element.getBoundingClientRect().top;
          const elementVisible = 150;

          if (elementTop < windowHeight - elementVisible) {
              element.classList.add('active');
          } else {
              element.classList.remove('active');
          }
      });
  }

  window.addEventListener('scroll', animateElements);
  animateElements(); // Initial check on load
});
const overlay = document.getElementById('overlay');
const overlay2 = document.getElementById('maintainenceOverlayContent');
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

function formOn2(city) {
    let btnLahore = document.getElementById('lahore');
    let btnGujranwala = document.getElementById('Gujranwala');
    let form_on = document.getElementById('divForm');
    let divHeight = document.getElementById('maintainenceOverlayContent');

    if (city === 'Gujranwala') {
        btnGujranwala.style.borderBottom = "6px solid rgb(175, 175, 166)"; 
        form_on.style.display = 'block';
        divHeight.style.height = '750px';
        divHeight.style.position = 'absolute'; 
        btnLahore.style.cursor = 'not-allowed';
        btnLahore.disabled = true;
    } else if (city === 'Lahore') {
        btnLahore.style.borderBottom = "6px solid rgb(175, 175, 166)"; 
        form_on.style.display = 'block';
        divHeight.style.height = '750px';
        divHeight.style.position = 'absolute'; 
        btnGujranwala.style.cursor = 'not-allowed';
        btnGujranwala.disabled = true;
    }
}

// Add event listeners for the buttons
document.getElementById('lahore').addEventListener('click', function() {
    formOn2('Lahore');
});

document.getElementById('Gujranwala').addEventListener('click', function() {
    formOn2('Gujranwala');
});

document.getElementById('maintainenceBtn').addEventListener('click', function() {
    formOn1('maintainenceBtn');
});

function formOn1(mType) {
    let btn1 = document.getElementById('maintainenceBtn');
    let btn2 = document.getElementById('washingBtn');
    let form_on = document.getElementById('divform');
    let divHeight = document.getElementById('maintainenceOverlayContent');
    

    if (mType === 'maintainenceBtn') {
        btn1.style.background = "rgb(129, 123, 123)"; 
        form_on.style.display = 'block';
        divHeight.style.height = '1090px';
        btn2.style.cursor = 'not-allowed';
        btn2.disabled = true;
    }
    
}


function confirmAdd() {
    // Show the confirmation dialog first
    if (confirm("Are you sure you want to book maintenance service?")) {
        // If the user clicks "OK", show the alert
        alert("Your maintenance service has been booked successfully.");
        return true;  // Proceed with the action (like form submission or redirect)
    } else {
        // If the user clicks "Cancel", do nothing
        return false;  // Prevent the action
    }
}
function setLocation(city) {
    document.getElementById('locationField').value = city;
}
function setType(type) {
    document.getElementById('typeField').value = type;
}
function confirmSubmission(event) {
    // Prevent form submission
    event.preventDefault();

    // Show confirmation dialog
    var confirmation = confirm("Are you sure you want to book the service?");
    if (confirmation) {
        // If confirmed, submit the form
        document.forms["forme"].submit();
    }
}
function sidebar() {
    let nav = document.getElementsByClassName('nav')[0];

    if (nav.style.display === 'none' || nav.style.display === '') {
        nav.style.display = 'flex';
    } else {
        nav.style.display = 'none';
    }
}







