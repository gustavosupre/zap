var input = document.querySelector("#phone");
var inputCel = $('input[name="cel"]');
window.intlTelInput(input, {
    autoHideDialCode: false,
    separateDialCode: true,
    preferredCountries: [ "br", "us", "gb" ],
    excludeCountries: ["ba", "io"],
    geoIpLookup: function(success, failure) {
        $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country) ? resp.country : "us";
          success(countryCode);
        });
    },
});


$(function(){
    
    placeholderToMask(inputCel.attr('placeholder'));

});

input.addEventListener("countrychange", function(event) {
    placeholderToMask(inputCel.attr('placeholder'));
});


$('form[name="enviar-zap"]').submit(function(event){
    event.preventDefault();
    var code = $('.iti__selected-dial-code').text();
    var cel = replaceAll(code+inputCel.val(), ' ', '');
    if (inputCel.val() != ""){
        location.href = 'https://wa.me/'+cel;
    }
});

function placeholderToMask(placeholder){
    var inputCel = $('input[name="cel"]');
    var str = placeholder;
    var mask="";
    for (var i=0; i<str.length; i++){
        var arr = [" ", "-"];
        var char = str.charAt(i);
        if ($.inArray(char, arr) != -1) {
            mask += " ";
        } else {
            mask += "9";
        }
    }
    console.log(mask);
    inputCel.mask(mask);

}

function replaceAll(str, find, replace) {
    return str.replace(new RegExp(find, 'g'), replace);
  }