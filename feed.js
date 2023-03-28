

var searchButton = document.getElementsByClassName('search')[0];
var exitButton = document.getElementsByClassName('exit')[1];


searchButton.addEventListener("click", openSearch);
exitButton.addEventListener("click", closeSearch);

function openSearch() {
    document.getElementsByClassName("search-window")[0].style.display = "flex";
    document.getElementsByClassName("containter")[0].style.filter = "blur(5px)";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "none";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        anchorTags[i].style.userSelect = "none";
        anchorTags[i].style.pointerEvents = "none";
    }
    /*var buttons = document.getElementsByTagName("button");
    for(i=0; i<buttons.length; i++){
        if(buttons[i].className = "exit"){
            continue;
        }
        buttons[i].disabled = true;
    }*/
}
  
function closeSearch() {
    document.getElementsByClassName("search-window")[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "auto";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        anchorTags[i].style.pointerEvents = "auto";
        anchorTags[i].style.userSelect = "auto";
    }
    
}
var NotificationsButton = document.getElementsByClassName('notifications')[0];
var exitButton1 = document.getElementsByClassName('exit')[0];

NotificationsButton.addEventListener("click", openNotifications);
exitButton1.addEventListener("click", closeNotifications);

function openNotifications() {
    document.getElementsByClassName("Notifications")[0].style.display = "flex";
    document.getElementsByClassName("containter")[0].style.filter = "blur(5px)";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "none";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        anchorTags[i].style.pointerEvents = "none";
        anchorTags[i].style.userSelect = "none";
    }
}
  
function closeNotifications() {
    document.getElementsByClassName("Notifications")[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "auto";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        anchorTags[i].style.pointerEvents = "auto";
        anchorTags[i].style.userSelect = "auto";
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
var moreButton = document.getElementsByClassName('more')[0];
var exitButton1 = document.getElementById('exit');

moreButton.addEventListener("click", openmore);
exitButton1.addEventListener("click", closemore);

function openmore() {
    document.getElementsByClassName("pluss")[0].style.display = "flex";
    document.getElementsByClassName("containter")[0].style.filter = "blur(5px)";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "none";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
       if(anchorTags[i].id!="poweroff"){
        
        anchorTags[i].style.pointerEvents = "none";
        anchorTags[i].style.userSelect = "none";
       }
       
    }
}
  
function closemore() {
    document.getElementsByClassName("pluss")[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "auto";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        anchorTags[i].style.pointerEvents = "auto";
        anchorTags[i].style.userSelect = "auto";
    }
}

var addButton = document.getElementsByClassName('create')[0];
var exitButton2 = document.getElementById('exit1');

addButton.addEventListener("click", openAdd);
exitButton2.addEventListener("click", closeAdd);

function openAdd() {
    document.getElementsByClassName("add")[0].style.display = "flex";
    document.getElementsByClassName("containter")[0].style.filter = "blur(5px)";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "none";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        anchorTags[i].style.pointerEvents = "none";
        anchorTags[i].style.userSelect = "none";
       
    }
}
  
function closeAdd() {
    document.getElementsByClassName("add")[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "auto";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        anchorTags[i].style.pointerEvents = "auto";
        anchorTags[i].style.userSelect = "auto";
    }
}

var leaderBoardButton = document.getElementsByClassName('ranking')[0];
var exitButton3 = document.getElementsByClassName('exit')[2];

leaderBoardButton.addEventListener("click", openLeaderBoard);
exitButton3.addEventListener("click", closeLeaderBoard);

function openLeaderBoard() {
    document.getElementsByClassName("leaderboard-window")[0].style.display = "flex";
    document.getElementsByClassName("containter")[0].style.filter = "blur(5px)";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "none";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        if(anchorTags[i].classList[0] == "link-to-profile" || anchorTags[i].classList[0] == "recipe-of-the-week"){
            continue
        }
        anchorTags[i].style.pointerEvents = "none";
        anchorTags[i].style.userSelect = "none";
    }
}
  
function closeLeaderBoard() {
    document.getElementsByClassName("leaderboard-window")[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
    var text = document.getElementsByTagName("p");
    for(i=0; i<text.length; i++){
        text[i].style.userSelect = "auto";
    }
    var anchorTags = document.getElementsByTagName("a");
    for(i=0; i<anchorTags.length; i++){
        anchorTags[i].style.pointerEvents = "auto";
        anchorTags[i].style.userSelect = "auto";
    }
}
