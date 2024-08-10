let map;
let earthquakeData;
let pings = [];
let storedMinYear, storedMaxYear;

function preload(){ map = loadImage('/assets/img/map.jpg'); }

function setup() {
    let parent = document.getElementById("canvas");
    let canvas = createCanvas(parent.clientWidth, parent.clientWidth/2);
    canvas.parent('canvas');

    storedMinYear = minYear;
    storedMaxYear = maxYear;

    reloadPings();
}


function draw() {
    background(map);
    for (const ping of pings) ping.draw();
    if (rangeChanged()) reloadPings();
}

function reloadPings(){
    storedMinYear = minYear;
    storedMaxYear = maxYear;
    pings = [];
    let location;
    let magnitude;
    let radius;
    let pingColor;
    for (let i = 0; i < data.length; i++) {
        if (data[i].Year < minYear || data[i].Year >= maxYear) continue;
        lat = data[i].Latitude;
        lon = data[i].Longitude;
        magnitude = data[i].Dis_Mag_Value;
        
        location = coordsToCartesian(lat, lon);
        radius = getAppropriateSize(parseFloat(magnitude));
        pingColor = getAppropriateColor(data[i].Disaster_Subtype.toLowerCase());
        pings.push(new Ping(location.x, location.y, radius, pingColor));
    }
}

function coordsToCartesian(latitude, longitude) {
    let lat = parseFloat(latitude);
    let lon = parseFloat(longitude);
    let x = mapRange(lon, -180, 180, 0, width);
    let y = mapRange(lat, -90, 90, height, 0);
    return createVector(x, y);
}

function mapRange (value, a, b, c, d) {
    value = (value - a) / (b - a);
    return c + value * (d - c);
}

function getAppropriateSize(mag){
    if (disasterType == "earthquake")   return pow(10, mag/5);
    if (disasterType == "tsunami")      return pow(10, mag/5.5);
    if (disasterType == "flood")        return mapRange(mag,30,2700000,15,70)
    if (disasterType == "storm")        return 4*Math.log(2*mag);
}

function getAppropriateColor(subtype){
    if (subtype == 'flash flood')           return color(200,50,100);
    if (subtype == 'riverine flood')        return color(50,100,200);
    if (subtype == 'unknown')               return color(100,200,50);
    if (subtype == 'tropical cyclone')      return color(200,200,0);
    if (subtype == 'convective storm')      return color(125,75,200);
    if (subtype == 'extra-tropical storm')  return color(200,100,50);
    return color(200,0,0);
}

function rangeChanged(){
    return storedMinYear != minYear || storedMaxYear != maxYear;
}
