function loadModal(id, topic, about, photographer, place, date, url) {
    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                document.getElementById('viewModal').innerHTML = res;
            }
        }

        obj.open("POST", "popup.php", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        obj.send("id=" + id + "&topic=" + topic + "&about=" + about + "&photographer=" + photographer + "&place=" + place + "&date=" + date + "&url=" + url);
    }
}