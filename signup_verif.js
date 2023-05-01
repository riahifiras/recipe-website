const email = document.getElementsByClassName("email")[0]; //Assigns the first element with a class name of "email" to the email variable.
const name = document.getElementsByClassName("name")[0]; //Assigns the first element with a class name of "name" to the name variable.
const username = document.getElementsByClassName("username")[0]; //Assigns the first element with a class name of "username" to the username variable.
const pass1 = document.getElementsByClassName("password1")[0];//Assigns the first element with a class name of "password1" to the pass1 variable.
const pass2 = document.getElementsByClassName("password2")[0];//Assigns the first element with a class name of "password2" to the pass2 variable.

let signupButton = document.getElementsByClassName("btn")[0];//Assigns the first element with a class name of "btn" to the signupButton variable.
signupButton.addEventListener("click", ok);//Adds an event listener to signupButton that listens for a "click" event and triggers the ok function.
email.addEventListener("keyup", checkInput) //Adds an event listener to email that listens for a "keyup" event and triggers the checkInput function.

email.addEventListener("keydown", enter);//Adds an event listener to email that listens for a "keydown" event and triggers the enter function.
name.addEventListener("keydown", enter); //Adds an event listener to name that listens for a "keydown" event and triggers the enter function.
username.addEventListener("keydown", enter);//Adds an event listener to username that listens for a "keydown" event and triggers the enter function.
pass1.addEventListener("keydown", enter);//Adds an event listener to pass1 that listens for a "keydown" event and triggers the enter function.
pass2.addEventListener("keydown", enter);//Adds an event listener to pass2 that listens for a "keydown" event and triggers the enter function.

function enter(e){ //If the key pressed during the event is the "Enter" key, the ok function is triggered.
    if(e.key == "Enter"){
        ok();
    }
}

const validateEmail = (email) => { //takes an email parameter and returns a boolean indicating whether the email is valid or not, based on a regular expression pattern.
    return String(email).toLowerCase().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
}

function checkInput() { /*checks if the email entered is valid by calling the validateEmail function. 
                            If the email is not valid, the email input field is given a red border.*/
    if(validateEmail(email.value) == null){
        email.style.border = "2px solid red";
    }
    else{
        email.style.border = "none";
    }
}

function ok(){ /*checks if the email is valid, the two passwords match, and all input fields have been filled out. 
                If all conditions are met, the user is redirected to a "feed.html" page. 
                If any of the conditions are not met, the corresponding input fields are given a red border. */
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
