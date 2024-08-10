let colorInfo;
if (disasterType == "earthquake") {
    colorInfo = 
    "<tr><td class='text-center'>" +
        "<div class='circle red'></div>" +
        "<div>Earthquake</div>" +
    "</td></tr>";
}
if (disasterType == "tsunami") {
    colorInfo = 
    "<tr><td class='text-center'>" +
        "<div class='circle red'></div>" +
        "<div>Tsunami</div>" +
    "</td></tr>";
}
if (disasterType == "flood") {
    colorInfo =
    "<tr>" +
        "<td class='text-center' style='width: 33%'>" +
            "<div class='circle magenta'></div>" +
            "<div>Flash Flood</div>" +
        "</td>" +

        "<td class='text-center' style='width: 33%'>" +
            "<div class='circle blue'></div>" +
            "<div>Riverine Flood</div>" +
        "</td>" +

        "<td class='text-center' style='width: 33%'>" +
            "<div class='circle green'></div>" +
            "<div>Unknown</div>" +
        "</td>" +
    "</tr>";
}
if (disasterType == "storm") {
    colorInfo =
    "<tr>" +
        "<td class='text-center' style='width: 33%'>" +
            "<div class='circle yellow'></div>" +
            "<div>Tropical Cyclone</div>" +
        "</td>" +

        "<td class='text-center' style='width: 33%'>" +
            "<div class='circle purple'></div>" +
            "<div>Convective Storm</div>" +
        "</td>" +

        "<td class='text-center' style='width: 33%'>" +
            "<div class='circle orange'></div>" +
            "<div>Extra-Tropical Storm</div>" +
        "</td>" +
    "</tr>";
}
document.getElementById('colorInfo').innerHTML = colorInfo;