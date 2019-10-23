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

window.onload = function () {
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.font = "42px Fascinate Inline";
    ctx.strokeStyle = "#ffb2b5";
    ctx.textAlign = "center";
    ctx.strokeText("Every Day is Pastry Day", 210, 80);
}