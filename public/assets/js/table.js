window.onload = function(){
    slideOne();
    slideTwo();
    reloadTable();
}

function minYearChanged(){
    slideOne(); 
    reloadTable();
}

function maxYearChanged(){
    slideTwo();
    reloadTable();
}

function reloadTable(){

    let table = "<table class='table table-dark table-striped table-hover'>" +
                "<thead class='table-light'><tr>" +

        "<th class='text-dark'>Disaster Number</th>" +
        "<th class='text-dark'>Year</th>" +
        "<th class='text-dark'>SubType</th>" +
        "<th class='text-dark'>Country</th>" +
        "<th class='text-dark'>Magnitude</th>" +
        "<th class='text-dark'>Injured</th>" +
        "<th class='text-dark'>Deaths</th>" +

        "</tr></thead><tbody>";

    for (let i = 0; i < data.length; i++) {
        if (data[i].Year < minYear || data[i].Year >= maxYear) continue;
        else{

            table +="<tr>" +

                    "<th>" + data[i].Dis_No + "</th>" +
                    "<td>" + data[i].Year + "</td>" +
                    "<td>" + data[i].Disaster_Subtype + "</td>" +
                    "<td>" + data[i].Country + "</td>" +
                    "<td>" + data[i].Dis_Mag_Value + " " + data[i].Dis_Mag_Scale + "</td>" +
                    "<td>" + data[i].No_Injured + "</td>" +
                    "<td>" + data[i].Total_Deaths + "</td>" +
                    
                    "</tr>";
        }
    }
    table += "</tbody></table>";
    document.getElementById('table').innerHTML = table;
}