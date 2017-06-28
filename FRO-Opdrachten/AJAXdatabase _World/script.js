function showUser(str, type, id) {
    //type=list type=detail
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        if(type == "list") {
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "getuser.php?q=" + str + "&type=list", true);
            xmlhttp.send();
        } else if(type == "detail") {
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "getuser.php?q=" + id + "&type=detail", true);
            xmlhttp.send();
        }
    }
}

function showTable(table) {
    window.alert(table);
    var table = document.getElementById(table);
    table.style.display = null;
}