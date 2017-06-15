var g = 0;
var l = 0;
function checkgewicht(gewicht) {
    if (isNumber(gewicht.value)) {
        g = gewicht.value;
        console.log(g);
        if (g != 0 && l != 0) {
            ajax(g, l);
        }
    } else {
        g = 0;
    }
}
function checklengte(lengte) {
    if (isNumber(lengte.value)) {
        l = lengte.value;
        console.log(l);
        if (g != 0 && l != 0) {
            ajax(g, l);
        }
    } else {
        l = 0;
    }
}
function ajax(gewicht, lengte) {
    var debug = true;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var controlScript = "BMI.php";
    var httpString = controlScript + "?gewicht=" + gewicht + "&lengte=" + lengte;
    var httpResponse = "";
    if (debug) console.log(httpString);
    xmlhttp.open("GET", httpString, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (debug) console.log("http response = " + xmlhttp.responseText);
            httpResponse = xmlhttp.responseText;
            document.getElementById('resultaat').innerHTML = httpResponse;
        }
    }
}
function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}