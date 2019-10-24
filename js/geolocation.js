// when the page has loaded get the geolocation of the user
window.onload = function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
// send the geolocation information to location.php
function showPosition(pos) {
    $.post('../data/location.php', {
        'lat': pos.coords.latitude,
        'lng': pos.coords.longitude
    }, function () {
        console.log(showPosition);
    });
}