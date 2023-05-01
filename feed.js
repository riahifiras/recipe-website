console.log(screen.width) //outputs the width of the user's screen in pixels to the console.

var searchButton = document.getElementsByClassName('search')[0]; //returns an array-like object of elements that have the specified class name, 
                                                                //and the [0] index is used to select the first element in the collection.
var exitButton = document.getElementsByClassName('exit')[3];

searchButton.addEventListener("click", () => pop("search-window"));       /*The event listener takes a callback function as its second argument 
                                                                            and will execute the function when the searchButton is clicked it will 
                                                                            call the pop() function with the argument "search-window" 
                                                                            and when the exitButton is clicked, it will call the disappear() 
                                                                            function with the argument "search-window".*/
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

function pop(cName){                                        //The pop() function is used to display a pop-up window.
    let out = document.getElementsByClassName("out")[0];
    out.style.display = "block";
    out.addEventListener("click", () => disappear(cName));
    document.getElementsByClassName(cName)[0].style.display = "flex";
    document.getElementsByClassName("containter")[0].style.filter = "blur(5px)";
    document.onkeydown = function (e) {
        if(e.key == "Escape"){
            disappear(cName);
        }
    };
}

function disappear(cName){                              //The disappear() function is used to close the pop-up window.
    let out = document.getElementsByClassName("out")[0];
    out.style.display = "none";
    document.getElementsByClassName(cName)[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
}

var hearts = document.getElementsByClassName("heart");  
for(i=0; i<hearts.length; i++){                         //add event listeners to all elements on the page with the class name "heart"
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
