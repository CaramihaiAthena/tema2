
function showError(errorElement, errorMessage) {
    document.querySelector("."+errorElement).classList.add("display-error");  //error element = divul ascuns => il facem sa fie afisat
    document.querySelector("."+errorElement).innerHTML = errorMessage; // =>afisam eroarea referintiata prin div
}

function clearError() {
    let errors = document.querySelectorAll(".error");
    for(let error of errors) {
        error.classList.remove("display-error");
    }
}

let form = document.forms['myForm'];
form.onsubmit = function(event) {
    clearError();

    //daca nu este introdus emailul
    if(form.email.value === "") {
        showError("my-error","You have to enter your email");
        return false;
    } 
    //setTimeout('showError("email-error","You have to enter your email")',3000);
    //daca emailul nu este introdus corect
    let regx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!(regx.test(form.email.value))) {
        showError("my-error","You have to enter a valid email");
        return false;
    }
    //setTimeout('showError("email-error","You have to enter a valid email");',3000);
    if(form.password.value === "") {
        showError("my-error","You have to enter a password");
        return false;
    }
    //setTimeout('showError("password-error","You have to enter a password")',3000);
    if(form.password.value != form.confirmpass.value) {
        showError("my-error","Passwords don't match!");
        return false;
    }
   // setTimeout('showError("confirmPass-error","Passwords dont match!");',3000);
    //event.preventDefault();
}
    function showErrorFor3Seconds(){
       //daca form.submit atunci sa nu se afiseze nicio eroare

       //daca formul are erori, afiseaza-le 3 secunde
    }