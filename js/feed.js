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

//The pop() function is used to display a pop-up window.
function pop(cName){
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
//The disappear() function is used to close the pop-up window.
function disappear(cName){
    let out = document.getElementsByClassName("out")[0];
    out.style.display = "none";
    document.getElementsByClassName(cName)[0].style.display = "none";
    document.getElementsByClassName("containter")[0].style.filter = "none";
}

var hearts = document.getElementsByClassName("heart");  
for(i=0; i<hearts.length; i++){
    var l = hearts[i].innerHTML;
    hearts[i].addEventListener("click", likes);
}

function likes(e){
    if(e.target.classList[1] == "bx-heart"){
        e.target.classList.remove("bx-heart");
        e.target.classList.add("bxs-heart");
        e.target.parentNode.parentNode.childNodes[1].innerText = parseInt(e.target.parentNode.parentNode.childNodes[1].innerText)+1;
        
    }
    else{
        e.target.classList.add("bx-heart");
        e.target.classList.remove("bxs-heart");
        e.target.parentNode.parentNode.childNodes[1].innerText = parseInt(e.target.parentNode.parentNode.childNodes[1].innerText)-1;
    }  
}

addBtn = document.getElementsByClassName("add-btn")[0];
addBtn.addEventListener("click", addIngredient);

function addIngredient(){
    var ing = document.getElementById("ingredient");
    var quantity = document.getElementById("howMuch");
    console.log(ing);
    const newIng = document.createElement("td");
    newIng.innerText = ing.value;
    const newQuan = document.createElement("td");
    newQuan.innerText = quantity.value;
    const added = document.createElement("tr");
    added.appendChild(newIng);
    added.appendChild(newQuan);
    const table = document.getElementById("ingredients");
    table.appendChild(added);
    added.addEventListener("mouseover", (e)=>{e.target.parentNode.style.backgroundColor = "var(--color1)"})
    added.addEventListener("mouseout", (e)=>{e.target.parentNode.style.backgroundColor = "var(--color2)"})

}
