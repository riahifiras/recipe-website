console.log(screen.width)

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
    document.onkeydown = function (e) {
        if(e.key == "Escape"){
            disappear(cName);
        }
    };
    //let buttons = document.getElementsByClassName("button");
    /*for(button of buttons){
        button.style.display = "none";
    }*/
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
    /*for(button of buttons){
        if(button.id == "ranking" && screen.width > 700){
            continue;
        }
        button.style.display = "flex";
    }*/
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

const modeBtn = document.getElementsByClassName("mode")[0];
modeBtn.addEventListener("click", changeMode);

function changeMode(){
    
    let mode = localStorage.getItem("mode");
    if(mode == "light"){
        localStorage.setItem("mode", "dark");
        document.documentElement.style.setProperty('--color1', '#2d241f');
        document.documentElement.style.setProperty('--color2', '#3d3328');
        document.documentElement.style.setProperty('--color3', '#514739');
        document.documentElement.style.setProperty('--color4', '#6a5b4f');
        document.documentElement.style.setProperty('--color5', '#8c7b66');
        document.documentElement.style.setProperty('--color6', '#bfaa8f');
        document.documentElement.style.setProperty('--black', '#ffffff');
    }
    else{
        localStorage.setItem("mode", "light");
        document.documentElement.style.setProperty('--color1', '#ede0d4');
        document.documentElement.style.setProperty('--color2', '#e6ccb2');
        document.documentElement.style.setProperty('--color3', '#ddb892');
        document.documentElement.style.setProperty('--color4', '#b08968');
        document.documentElement.style.setProperty('--color5', '#7f5539');
        document.documentElement.style.setProperty('--color6', '#9c6644');
        document.documentElement.style.setProperty('--black', '#232b2b');
    }
}