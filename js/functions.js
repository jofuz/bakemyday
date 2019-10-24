// show the mobile menu
function showMenu() {
  var x = document.getElementById("menuBlock");
  if (x.style.display === "block") {
    x.style.display = "none";
    x.style.height = "0px";
  } else {
    x.style.display = "block";
    x.style.height = "auto";
  }
}