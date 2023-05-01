var user = document.getElementsByClassName("username")[0];  /*Get the first element with class "username" from the document 
                                                            and assign it to the variable "user".*/
var pass = document.getElementsByClassName("password")[0];  /*Get the first element with class "password" from the document 
                                                                and assign it to the variable "pass". */

let loginButton = document.getElementsByClassName("btn")[0]; /*Get the first element with class "btn" from the document 
                                                                and assign it to the variable "loginButton".  */
loginButton.addEventListener("click", ok); /*Add an event listener to the "loginButton" variable that listens 
                                            for the "click" event and calls the "ok" function. */

user.addEventListener("keydown", enter); /*Add an event listener to the "user" variable that listens for the "keydown" event 
                                            and calls the "enter" function. */
pass.addEventListener("keydown", enter); /*Add an event listener to the "pass" variable that listens for the "keydown" event 
                                            and calls the "enter" function. */

function enter(e){
    if(e.key == "Enter") // Check if the key pressed is "Enter".
    {
        ok(); // If "Enter" is pressed, call the "ok" function.
    }
}

function ok(){
    if(user.value == "ferr" && pass.value == "ferr") // Check if the value of the "user" variable is "ferr" and the value of the "pass" variable is also "ferr".
    {
        window.location.href = "feed.html" // If both are true, redirect to the "feed.html" page.
    }
    else{
        alert("try again"); // If either is false, show an alert message.
    }
}
