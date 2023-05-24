var profilePic = document.getElementsByClassName("pr")[0];
var backgroundPic = document.getElementsByClassName("bgg")[0];

var btn1 = document.getElementById("file-upload1");
var btn2 = document.getElementById("file-upload2");

btn1.addEventListener('change', function(event) {
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();

        reader.addEventListener('load', function() {
            profilePic.src = reader.result;
        });

        reader.readAsDataURL(file);
    } else {
        profilePic.src = '';
    }
});

btn2.addEventListener('change', function(event) {
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.addEventListener('load', function() {
            backgroundPic.src = reader.result;
        });

        reader.readAsDataURL(file);
    } else {
        backgroundPic.src = '';
    }
});
