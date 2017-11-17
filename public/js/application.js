window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        navbar.className = navbar.className.replace("transparent", "block");
    } else {
        navbar.className = navbar.className.replace("block", "transparent");
    }
}

function popup(element) {
  document.getElementById("img").src = element.src;
  document.getElementById("popup").style.display = "block";
}

