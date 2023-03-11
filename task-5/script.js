const displayBoxField = document.getElementById("displaybox");
function displayOnScreen(val){
    let numberEntered = val;
    console.log(numberEntered);
    displayBoxField.innerHTML = numberEntered;
}

