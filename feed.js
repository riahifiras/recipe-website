var searchButton = document.getElementsByClassName('search')[0];
var exitButton = document.getElementById('exit');


searchButton.addEventListener("click", openSearch);
exitButton.addEventListener("click", closeSearch);

function openSearch() {
    document.getElementsByClassName("search-window")[0].style.display = "flex";
    document.getElementsByClassName("containter")[0].style.filter = "blur(5px)";
}
  
function closeSearch() {
    document.getElementsByClassName("search-window")[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
}
var NotificationsButton = document.getElementsByClassName('notifications')[0];
var exitButton1 = document.getElementById('exit1');

NotificationsButton.addEventListener("click", openNotifications);
exitButton1.addEventListener("click", closeNotifications);

function openNotifications() {
    document.getElementsByClassName("Notifications")[0].style.display = "flex";
    document.getElementsByClassName("containter")[0].style.filter = "blur(5px)";
}
  
function closeNotifications() {
    document.getElementsByClassName("Notifications")[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
}
