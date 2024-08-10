// document.getElementById("row").style.border = "1px solid red";

let total_visits;
total_visits = document.getElementById("total_visits").innerHTML;
// alert(document.getElementsByClassName("no-of-vs").innerHTML);

let percentages = new Array();

for(row of document.getElementsByClassName("no-of-vs")){
    percentages.push(((parseInt(row.innerHTML)/parseInt(total_visits)) * 100).toFixed(1));
}

// document.getElementById("test").innerHTML = percentages[0]/parseInt(total_visits);
// document.getElementById("test").innerHTML = percentages;

let total_height;
total_height = document.getElementById("bar-graph").offsetHeight;
// alert(total_height);

// alert(percentages[0]/100 * parseInt(total_height) + "px");

let i = 0;
for(bar of document.getElementsByClassName("prog")){
    // bar.style.height = "10px";
    bar.style.height = percentages[i]/100 * parseInt(total_height) + 100 + "px";
    i++;
}