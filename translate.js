const settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://google-translate1.p.rapidapi.com/language/translate/v2",
    "method": "POST",
    "headers": {
        "content-type": "application/x-www-form-urlencoded",
        // "Accept-Encoding": "application/gzip",
        "X-RapidAPI-Host": "google-translate1.p.rapidapi.com",
        "X-RapidAPI-Key": "951e9a5b5bmsh8d866b69572fe9ap18803ejsn2765a1113a7b"
    },
};

function translate(text) {
    // set the data to be sent to the translate function
    settings.data = {
        "q": text,
        "target": "en",
    };

    // send the data to the translate function
    $.ajax(settings).done(function(response) {
        // display the translated text in #text-area-2
        $("#text-area-2").val(response.data.translations[0].translatedText);
    });
}
var typingTimer;
//wait until the user stops typing for 500ms
$("#text-area-1").keyup(function() {
    clearTimeout(typingTimer);
    if ($("#text-area-1").val) {
        typingTimer = setTimeout(function() {
            translate($("#text-area-1").val());
        }, 500);
    }
});