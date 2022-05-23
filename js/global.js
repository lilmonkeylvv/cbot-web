mybutton = document.getElementById("myBtn");
window.onscroll = function () {
       scrollFunction();
};

function scrollFunction() {
       if (
              document.body.scrollTop > 800 ||
              document.documentElement.scrollTop > 800
       ){
              mybutton.style.display = "block";
       } else {
              mybutton.style.display = "none";
       }
}

function topFunction() {
       document.body.scrollTop = 0;
       document.documentElement.scrollTop = 0;
}

function ImageToForum() {
       window.open("#", "_blank");
       window.open("https://chill.lv/", "_self");
}
function BotToForum() {
       window.open("https://chill.lv/forums", "_blank");
}
function BotToMain() {
       window.open("https://chill.lv/", "_blank");
}
function SupportServer() {
       window.open("https://discord.gg/sySpTPbjJe", "_blank");
}
function ImageToForum() {
       window.open("#", "_blank");
       window.open("https://chill.lv/", "_self");
}
function BotToServer() {
       window.open("https://discord.com/oauth2/authorize?client_id=688407916851757136&scope=bot&permissions=8", "_blank");
}