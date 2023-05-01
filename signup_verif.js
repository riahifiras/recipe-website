const email = document.getElementsByClassName("email")[0];
const name = document.getElementsByClassName("name")[0];
const username = document.getElementsByClassName("username")[0];
const pass1 = document.getElementsByClassName("password1")[0];
const pass2 = document.getElementsByClassName("password2")[0];

let signupButton = document.getElementsByClassName("btn")[0];
signupButton.addEventListener("click", ok);
email.addEventListener("keyup", checkInput)

email.addEventListener("keydown", enter);
name.addEventListener("keydown", enter);
username.addEventListener("keydown", enter);
pass1.addEventListener("keydown", enter);
pass2.addEventListener("keydown", enter);

function enter(e){
    if(e.key == "Enter"){
        ok();
    }
}

const validateEmail = (email) => {
    return String(email).toLowerCase().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
}

function checkInput() {
    if(validateEmail(email.value) == null){
        email.style.border = "2px solid red";
    }
    else{
        email.style.border = "none";
    }
}

function ok(){
    if(validateEmail(email.value) != null && pass1.value == pass2.value && pass1.value != "" && pass2.value != "" && username.value != "" && name.value != ""){
        window.location.href = "feed.html"
    }
    else{
        if(validateEmail(email.value) == null){
            email.style.border = "2px solid red";
        }
        if(pass1.value != pass2.value){
            pass2.style.border = "2px solid red";
        }
        if(username.value == ""){
            username.style.border = "2px solid red";
        }
        if(name.value == ""){
            name.style.border = "2px solid red";
        }
        if(pass1.value == ""){
            pass1.style.border = "2px solid red";
        }
    }

}
