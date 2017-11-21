window.onscroll = function() {navbar()};
function navbar() {
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

function showcover(element) {
    document.getElementById("showcover").innerHTML = element.value.split("\\").pop()

}

function showfiles(element) {
    var files = element.files;
    document.getElementById("showfiles").innerHTML = files.length+" Files choosen"
}
