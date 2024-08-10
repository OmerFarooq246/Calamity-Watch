let radius = 200;
let map;
let clickLocation;
let rotX = 0, rotY = 0;
let saveRotX = 0, saveRotY = 0;
let firstDrag = true;
let impacts = [];
let storedMinYear, storedMaxYear;

function preload() { map = loadImage('/assets/img/map.jpg'); }

function setup() {
    let parent = document.getElementById("canvas");
    let canvas = createCanvas(parent.clientWidth, parent.clientWidth/2, WEBGL);
    canvas.parent('canvas');

    storedMinYear = minYear;
    storedMaxYear = maxYear;

    reloadIndicators();

    noStroke();
}

function draw() {
    background(0);

    rotateX(saveRotY + rotY);
    rotateY(saveRotX + rotX);

    noStroke();

    push();
    texture(map);
    sphere(radius);
    pop();

    for (const impact of impacts) {
        push();
        translate(impact.location);
        fill(impact.colour)
        sphere(impact.size);
        pop();
    }
    if (rangeChanged()) reloadIndicators();
}

function reloadIndicators(){
    storedMinYear = minYear;
    storedMaxYear = maxYear;
    impacts = [];
    let location;
    let magnitude;
    let impactColor;
    for (let i = 0; i < data.length; i++) {
        if (data[i].Year < minYear || data[i].Year >= maxYear) continue;
        location = convertToXYZ(parseFloat(data[i].Latitude), 
                                    parseFloat(data[i].Longitude));
        magnitude = getAppropriateSize(parseFloat(data[i].Dis_Mag_Value));
        impactColor = getAppropriateColor(data[i].Disaster_Subtype.toLowerCase());
        impacts.push(new ImpactIndicator(location.x, location.y, location.z, magnitude, impactColor));
    }
}

function convertToXYZ(lat, lon) {
    let v = createVector(-parseInt(radius * sin(radians(lon)) * cos(radians(lat))),
        -parseInt(radius * sin(radians(lat))),
        -parseInt(radius * cos(radians(lon)) * cos(radians(lat))));
    return v;
}

function mouseDragged() {
    if (!mouseInCanvas()) { return; }
    
    if (firstDrag) {
        clickLocation = createVector(mouseX, mouseY);
        firstDrag = false;
    }
    rotX = mouseX-clickLocation.x;
    rotY = mouseY-clickLocation.y;

    rotX = rotX * TWO_PI / width;
    rotY = -(rotY * PI / height);
}

function mouseReleased() {
    if (!mouseInCanvas()) { return; }

    saveRotX += rotX;
    saveRotY += rotY;

    rotX = 0;
    rotY = 0;

    firstDrag = true;
}

function mouseInCanvas(){
    return mouseX > 0 && mouseX < width && mouseY > 0 && mouseY < height;
}

function getAppropriateSize(mag){
    if (disasterType == "earthquake")   return pow(10, mag/9);
    if (disasterType == "tsunami")      return pow(10, mag/9);
    if (disasterType == "flood")        return mapRange(mag,30,3000000,5,22)
    if (disasterType == "storm")        return Math.log(mag);
}

function getAppropriateColor(subtype){
    if (subtype == 'flash flood')           return color(200,50,100);
    if (subtype == 'riverine flood')        return color(50,100,200);
    if (subtype == 'unknown')               return color(100,200,50);
    if (subtype == 'tropical cyclone')      return color(200,200,0);
    if (subtype == 'convective storm')      return color(125,75,200);
    if (subtype == 'extra-tropical storm')  return color(200,100,50);
    if (subtype == 'coastal flood')         return color(100,50,200); 
    return color(200,0,0);
}

function rangeChanged(){
    return storedMinYear != minYear || storedMaxYear != maxYear;
}

function mapRange (value, a, b, c, d) {
    value = (value - a) / (b - a);
    return c + value * (d - c);
}
