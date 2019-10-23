window.onload = function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
}

function showPosition(pos) {
    this.send('../data/location.php', { 'lat': pos.coords.latitude, 'lng': pos.coords.longitude }, function (res) {
        console.log(res);
    });
}

const xhr = new XMLHttpRequest();

window.onload = function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(saveLocation);
        xhr.open("POST", "/data/location.php");
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    function saveLocation(pos) {
        xhr.send({ 'lat': pos.coords.latitude, 'lng': pos.coords.longitude });
    }
}