// run the function when the page loads
// set these paramaters for the canvas myCanvas
window.onload = function () {
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.font = "38px Fascinate Inline";
    ctx.strokeStyle = "#ffb2b5";
    ctx.textAlign = "center";
    var gradient = ctx.createLinearGradient(0, 0, 150, 100);
    gradient.addColorStop(0, "rgb(255, 178, 181)");
    gradient.addColorStop(0.9, "rgb(255, 178, 181)");
    gradient.addColorStop(1, "rgb(255, 255, 255)");
    ctx.fillStyle = gradient;
    ctx.fillText("Every Day Is Pastry Day", 200, 80);
    ctx.shadowColor = "rgb(190, 190, 190)";
    ctx.shadowOffsetX = 10;
    ctx.shadowOffsetY = 10
    ctx.shadowBlur = 10;
}