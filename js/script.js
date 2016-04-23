/**
 * Created by nkosi on 4/23/16.
 */

var output = document.getElementById('output');
output.innerHTML = "";

//Ajax request

var ajaxhttp = new XMLHttpRequest();
var url = "js/json.json";


ajaxhttp.open("GET", url, true);
ajaxhttp.setRequestHeader("content-type", "application/json");

ajaxhttp.onreadystatechange = function(){
    if (ajaxhttp.readyState == 4 && ajaxhttp.status == 200){
        var jsconent = JSON.parse(ajaxhttp.responseText);
        for(var objects in jsconent){
            output.innerHTML += '<div>' + jsconent[objects].firstName + ' ' + jsconent[objects].lastName + ' ' + jsconent[objects].age + '</div>';
        }
        console.log(jsconent)
    }
}


ajaxhttp.send();




console.log(ajaxhttp);