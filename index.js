

function validateForm() {
    let x = document.forms["myForm"]["name"].value;
    if(x == ""){
        alert("Name and Mobile Input cannot be empty");
        return false;
    }
}

document.querySelector("#demo").innerHTML = "the paragraph has changed";