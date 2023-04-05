let mode = localStorage.getItem("mode");
if(mode == "dark"){
    document.documentElement.style.setProperty('--white', '#000000');
    document.documentElement.style.setProperty('--color1', '#2d241f');
    document.documentElement.style.setProperty('--color2', '#3d3328');
    document.documentElement.style.setProperty('--color3', '#514739');
    document.documentElement.style.setProperty('--color4', '#6a5b4f');
    document.documentElement.style.setProperty('--color5', '#8c7b66');
    document.documentElement.style.setProperty('--color6', '#bfaa8f');
    document.documentElement.style.setProperty('--black', '#ffffff');
}
else{
    document.documentElement.style.setProperty('--white', '#ffffff');
    document.documentElement.style.setProperty('--color1', '#ede0d4');
    document.documentElement.style.setProperty('--color2', '#e6ccb2');
    document.documentElement.style.setProperty('--color3', '#ddb892');
    document.documentElement.style.setProperty('--color4', '#b08968');
    document.documentElement.style.setProperty('--color5', '#7f5539');
    document.documentElement.style.setProperty('--color6', '#9c6644');
    document.documentElement.style.setProperty('--black', '#232b2b');
}