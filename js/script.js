/**
 * Created by nkosi on 4/23/16.
 */

var output = document.getElementById('output');

window.onload = jsondata();

function submitData(data){

    var xhttp = new XMLHttpRequest();
    
    xhttp.onload = function () {
        console.log(xhttp.responseText)
        jsondata()
    }

    xhttp.open(data.method, data.action, true)
    xhttp.send(new FormData(data))


    return false;

}

function jsondata(){

    var ajaxhttp = new XMLHttpRequest();
    var url = "php/json.php";

    output.innerHTML = "";

    ajaxhttp.open("GET", url, true);
    ajaxhttp.setRequestHeader("content-type", "application/json");

    ajaxhttp.onreadystatechange = function(){
        if (ajaxhttp.readyState == 4 && ajaxhttp.status == 200){
            var jsconent = JSON.parse(ajaxhttp.responseText);
            for(var objects in jsconent){
                output.innerHTML += '<div>' + jsconent[objects].firstname + ' ' + jsconent[objects].lastname + ' ' + jsconent[objects].age + '</div>';
            }
            console.log(jsconent)
        }
    }

    ajaxhttp.send();

}

