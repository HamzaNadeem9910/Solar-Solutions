function showModel(brand,name) {
    let model = document.getElementById('divmodel');
    let conpic = document.getElementById('containerpic');
    let modelContainer = document.getElementById('model-container');
    
    console.log(brand);
    console.log(name+"model");
    
    // Make AJAX request to fetch models
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'fetch_models.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function() {
        if (this.status == 200) {
            let models = JSON.parse(this.responseText);
            modelContainer.innerHTML = '';

            models.forEach(function(model, index) {
                let radioInput = document.createElement('input');
                radioInput.type = 'radio';
                radioInput.name = name+"model";
                radioInput.id = 'model' + (index + 1);
                radioInput.value = model;

                let label = document.createElement('label');
                label.htmlFor = 'model' + (index + 1);
                label.textContent = model;

                modelContainer.appendChild(radioInput);
                modelContainer.appendChild(label);
                modelContainer.appendChild(document.createElement('br'));
                modelContainer.appendChild(document.createElement('br'));
            });
        }
    };

    xhr.send('brand=' + brand +'&name=' +name);
    //xhr.send('name=' + name);
    
    
    model.classList.add('modelvisible');
    conpic.classList.add('conpicsize');
}
let modelExit = document.getElementById('exit-model');

// Function to close the cart
function closemodeldiv() {
    let model = document.getElementById('divmodel');

    model.classList.remove('modelvisible');
    
}
window.onclick = function(event) {
    if (event.target == cartOverlay) {
        model.classList.remove('modelvisible');
    }
};
