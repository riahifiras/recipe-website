
const langs = ['eng', 'fr', 'ger', 'ita', 'spa', 'port', 'finn', 'nor', 'pol', 'swd', 'jp', 'kr', 'cn', 'tr'];
//gets the current language preference from local storage and stores it in a variable called currentLang.
var currentLang = localStorage.getItem("lang"); 


for(var i of langs){
    let lang = document.getElementsByClassName(i);
    for(j of lang){
        j.style.display = "none";
    }
}
//checks whether the lang preference has been set in local storage. If not, it sets the default language preference to "eng" (English).
if(localStorage.getItem("lang") == null){ 
    langChange("eng");
}

var lang_items = document.getElementsByClassName(currentLang);
for(var i of lang_items){
    if(i.tagName == "P"){
        i.style.display = "block";
    }
    else{
        i.style.display = "inline";
    }
}

try {
const engBtn = document.getElementsByClassName("lang-eng")[0];
engBtn.addEventListener("click", () => langChange("eng"));
const frBtn = document.getElementsByClassName("lang-fr")[0];
frBtn.addEventListener("click", () => langChange("fr"));
const gerBtn = document.getElementsByClassName("lang-ger")[0];
gerBtn.addEventListener("click", () => langChange("ger"));
const itaBtn = document.getElementsByClassName("lang-ita")[0];
itaBtn.addEventListener("click", () => langChange("ita"));
const spaBtn = document.getElementsByClassName("lang-spa")[0];
spaBtn.addEventListener("click", () => langChange("spa"));
const portBtn = document.getElementsByClassName("lang-port")[0];
portBtn.addEventListener("click", () => langChange("port"));
const finnBtn = document.getElementsByClassName("lang-finn")[0];
finnBtn.addEventListener("click", () => langChange("finn"));
const norBtn = document.getElementsByClassName("lang-nor")[0];
norBtn.addEventListener("click", () => langChange("nor"));
const polBtn = document.getElementsByClassName("lang-pol")[0];
polBtn.addEventListener("click", () => langChange("pol"));
const swdBtn = document.getElementsByClassName("lang-swd")[0];
swdBtn.addEventListener("click", () => langChange("swd"));
const jpBtn = document.getElementsByClassName("lang-jp")[0];
jpBtn.addEventListener("click", () => langChange("jp"));
const krBtn = document.getElementsByClassName("lang-kr")[0];
krBtn.addEventListener("click", () => langChange("kr"));
const cnBtn = document.getElementsByClassName("lang-cn")[0];
cnBtn.addEventListener("click", () => langChange("cn"));
const trBtn = document.getElementsByClassName("lang-tr")[0];
trBtn.addEventListener("click", () => langChange("tr"));

} catch (error) {
    console.log("rlly don't mind :)");
}
/*sets up event listeners for each language button on the page. When a language button is clicked, 
it calls the langChange function with the corresponding language code as an argument. */

function langChange(i){
    localStorage.setItem("lang", i);
    currentLang = localStorage.getItem("lang");
    for(var i of langs){
        let lang = document.getElementsByClassName(i);
        for(j of lang){
            j.style.display = "none";
        }
    }
    
    var lang_items = document.getElementsByClassName(currentLang);
    
    for(var i of lang_items){
        if(i.tagName == "P"){
            i.style.display = "block";
        }
        else{
            i.style.display = "inline";
        }
    }
}
/* updates the current language preference in local storage and calls the same code used earlier
 to hide all elements with language-specific class names and display only the elements 
 that correspond to the new language preference.*/