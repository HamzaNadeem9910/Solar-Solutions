function confirmDelete(){

    return confirm("Are you sure you want to delete this product?");
}

function confirmAdd(){

    var modelNum = document.getElementById("modelnum").value;
    if(modelNum>0){

    let add = prompt("Type 'Yes' if you want to add product");

    if(add.toUpperCase()=='YES'){
        alert("Product added Successfully.");
        return true;
    }else{
        alert("Error to add Product.");
        return false;
    }
}else{
    alert("Model fields must be greater than 0 e.g 1 .");
}


}
function confirmUpdate(){

    let add = prompt("Type 'Yes' if you want to Update product");

    if(add.toUpperCase()=='YES'){
        alert("Product Updated Successfully.");
        return true;
    }else{
        alert("Error to Update Product.");
        return false;
    }


}
function addModelFields() {
    var modelNum = document.getElementById("modelnum").value;
    if(modelNum>0){

    var modelFieldsDiv = document.getElementById("modelFields");
    var priceFieldsDiv = document.getElementById("priceFields");
    var statusFieldsDiv = document.getElementById("statusFields");

    modelFieldsDiv.innerHTML = ''; // Clear previous fields 
    priceFieldsDiv.innerHTML = ''; // Clear previous fields
    statusFieldsDiv.innerHTML = '';

    for (var i = 1; i <= modelNum; i++) {
        modelFieldsDiv.innerHTML += '<label for="pmodel' + i + '">Product model ' + i + ':</label>';
        modelFieldsDiv.innerHTML += '<input type="text" name="pmodel' + i + '" id="pmodel' + i + '" placeholder="Enter Product model" maxlength="20" required><br><br>';
        priceFieldsDiv.innerHTML += '<label for="pprice' + i + '">Price of model ' + i + ':</label>';
        priceFieldsDiv.innerHTML += '<input type="number" name="pprice' + i + '" id="pprice' + i + '" placeholder="Enter Model price" maxlength="10" required><br><br>';
        statusFieldsDiv.innerHTML += '<label for="status' + i + '">Status of Model ' + i + ':</label><br><br>';
        statusFieldsDiv.innerHTML += '<input type="radio" name="status' + i + '" id="status' + i + '" value="available" required>';
        statusFieldsDiv.innerHTML +='<label for="status"><small>Available</small></label><br>';

        statusFieldsDiv.innerHTML += '<input type="radio" name="status' + i + '" id="status' + i + '" value="notavailable" required>';
        statusFieldsDiv.innerHTML += '<label for="status"><small>Not Available</small></label><br><br>';

    }

}if(modelNum<=0) {
    alert("Model fields must be greater than 0 e.g 1 .");

}
}

