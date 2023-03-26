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
/*
var hearts = document.getElementsByClassName("heart");
for(i=0; i<hearts.length; i++){
    var l = hearts[i].innerHTML;
    hearts[i].addEventListener("mouseover", function(){
        l = `<i class='bx bxs-heart' style='color:#ff0000'  ></i>`;
    });
    hearts[i].addEventListener("click", function(){
        console.log(l);
        l = `<i class='bx bxs-heart' style='color:#ff0000'  ></i>`;
    });
}*/
