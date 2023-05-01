var user = document.getElementsByClassName("username")[0];
var pass = document.getElementsByClassName("password")[0];

let loginButton = document.getElementsByClassName("btn")[0];
loginButton.addEventListener("click", ok);

user.addEventListener("keydown", enter);
pass.addEventListener("keydown", enter);

function enter(e){
    if(e.key == "Enter"){
        ok();
    }
}

function ok(){
    if(user.value == "ferr" && pass.value == "ferr"){
        window.location.href = "feed.html"
    }
    else{
        alert("try again");
    }
}
