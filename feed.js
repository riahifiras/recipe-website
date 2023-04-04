var searchButton = document.getElementsByClassName('search')[0];
var exitButton = document.getElementsByClassName('exit')[3];

searchButton.addEventListener("click", () => pop("search-window"));
exitButton.addEventListener("click", () => disappear("search-window"));

var moreButton = document.getElementsByClassName('more')[0];
var exitButton4 = document.getElementsByClassName('exit')[1];

moreButton.addEventListener("click", () => pop("pluss"));
exitButton4.addEventListener("click", () => disappear("pluss"));

var addButton = document.getElementsByClassName('create')[0];
var exitButton2 = document.getElementsByClassName('exit')[0];

addButton.addEventListener("click", () => pop("add"));
exitButton2.addEventListener("click", () => disappear("add"));

var leaderBoardButton = document.getElementsByClassName('ranking')[0];
var exitButton3 = document.getElementsByClassName('exit')[4];

leaderBoardButton.addEventListener("click", () => pop("leaderboard-window"));
exitButton3.addEventListener("click", () => disappear("leaderboard-window"));

var NotificationsButton = document.getElementsByClassName('notifications')[0];
var exitButton1 = document.getElementsByClassName('exit')[2];

NotificationsButton.addEventListener("click", () => pop("Notifications"));
exitButton1.addEventListener("click", () => disappear("Notifications"));

function pop(cName){
    document.getElementsByClassName(cName)[0].style.display = "flex";
    document.getElementsByClassName("containter")[0].style.filter = "blur(5px)";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "none";
    }
    var text = document.getElementsByTagName("span");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "none";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        if (anchorTags[i].id == "poweroff"){
            continue
        }
        else{
            anchorTags[i].style.userSelect = "none";
            anchorTags[i].style.pointerEvents = "none";
        }
    }
    let buttons = document.getElementsByClassName("button");
    for(button of buttons){
        button.style.display = "none";
    }
}

function disappear(cName){
    document.getElementsByClassName(cName)[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "auto";
    }
    var text = document.getElementsByTagName("span");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "auto";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        anchorTags[i].style.pointerEvents = "auto";
        anchorTags[i].style.userSelect = "auto";
    }
    let buttons = document.getElementsByClassName("button");
    for(button of buttons){
        button.style.display = "flex";
    }
}

var hearts = document.getElementsByClassName("heart");
for(i=0; i<hearts.length; i++){
    var l = hearts[i].innerHTML;
    hearts[i].addEventListener("click", function(e){
        if(e.target.classList[1] == "bx-heart"){
            e.target.classList.remove("bx-heart");
            e.target.classList.add("bxs-heart");
            e.target.parentNode.parentNode.childNodes[3].innerText = parseInt(e.target.parentNode.parentNode.childNodes[3].innerText)+1;
        }
        else{
            e.target.classList.add("bx-heart");
            e.target.classList.remove("bxs-heart");
            e.target.parentNode.parentNode.childNodes[3].innerText = parseInt(e.target.parentNode.parentNode.childNodes[3].innerText)-1;
        }  
    });
}


/*
const mode = document.getElementsByClassName("mode")[0];
mode.addEventListener("click", alter);

function alter(){
    let bg = document.getElementsByTagName("body")[0];
    bg.style.backgroundColor = "#000000"

}
*/
const url = "https://randomuser.me/api/?results=2";
fetch(url)
.then(function(response){
    return response.json();
})
.then(function(response){
    console.log(response);
})
