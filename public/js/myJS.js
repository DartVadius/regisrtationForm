function getXmlHttpRequest(){
    if (window.XMLHttpRequest) {
        try {
            return new XMLHttpRequest();
        } catch (e) {

        }
    } else if (window.ActiveXObject) {
        try {
            return new ActiveXObject('Msxml12.XMLHTTP');
        } catch (e) {

        }
        try {
            return new ActiveXObject('Microsoft.XMLHTTP');
        } catch (e) {

        }
    }
    return null;
}
var req;
function showReqest(url, id) {    
    req = getXmlHttpRequest();
    req.onreadystatechange = reqCompl(id);
    req.open('GET', url, true);
    req.send(null);
}

function reqCompl(id) {
    if (req.readyState == 4) {
        var result = document.getElementById(id);
        result.firstChild.nodeValue = req.responseText;
    }
}