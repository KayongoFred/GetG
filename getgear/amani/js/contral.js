
$(document).ready(function () {
    var adform = new FormData();
    adform.append("action", "add_request");
    adform.append("request", get("client"));
    $.ajax({
        url: "console/ajax.php",
        type: "GET",
        cache: false,
        contentType: false,
        processData: false,
        data: adform,
        success: function (response) {
            console.log(response);
        }
    });
});

function get(name) {
    if (name = (new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(location.search))
        return decodeURIComponent(name[1]);
}