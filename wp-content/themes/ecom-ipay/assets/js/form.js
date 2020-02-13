var inputmask = {"mask":"+380 (99) 999 99 99"};

$("input[name=phone]").inputmask(inputmask);

function validateInput(e) {

    $('#masterpass-form-message').css('display','none');

    var input = $('input[name=' + e + ']');

    var value = $(input).val();

    var re = $(input).attr('pattern');

    re = new RegExp(re);

    if(re.test(value)){
        $(input).css('border-color','#ced4da');
        return true;
    }else{
        $(input).css('border-color','red');
    }

    return false;
}

window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

function gtag_report_conversion(url) {
    var callback = function () {
        if (typeof(url) != 'undefined') {
            //window.location = url;
        }
    };
    gtag('event', 'conversion', {'send_to': 'AW-1009088302/cZ1mCPXK5JgBEK7uleED', 'event_callback': callback});
    return false;
}


function checkRecaptcha() {
    var res = $('#g-recaptcha-response').val();

    if (res == "" || res == undefined || res.length == 0){
        $('.recaptcha-error').css('display','block');
        return false;
    } else {
        $('.recaptcha-error').css('display','none');
        return true;
    }

}
$('#masterpass-form').click(function (e) {

    e.preventDefault();

    var testName = validateInput('name');
    var testPnone = validateInput('phone');
    var testEmail = validateInput('email');

    if(!checkRecaptcha()) {
        return false;
    }

    if(testName && testPnone && testEmail){

        var form = $(this).parents('form');

        var url = $(form).attr('action');

        var xhr = new XMLHttpRequest();

        var params = $(form).serialize();

        xhr.open('POST', url, true);

        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader("X-Requested-With","XMLHttpRequest");

        xhr.onreadystatechange = function() {

            if (xhr.readyState != 4){
                return;
            }

            $('#masterpass-form-message').css('display','');

            $('#masterpass-form').attr('disabled','disabled');

        };

        xhr.send(params);

    } else {
        $('#masterpass-form-message').css('display','none');
    }


    gtag('js', new Date());
    gtag('config', 'AW-1009088302');
    gtag_report_conversion(window.location.href);

});

$('input[name=name]').keyup(function () {
    validateInput($(this).attr('name'));
}).change(function () {
    validateInput($(this).attr('name'));
});
$('input[name=phone]').keyup(function () {
    validateInput($(this).attr('name'));
}).change(function () {
    validateInput($(this).attr('name'));
});
$('input[name=email]').keyup(function () {
    validateInput($(this).attr('name'));
}).change(function () {
    validateInput($(this).attr('name'));
});

var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'https://www.googletagmanager.com/gtag/js?id=AW-1009088302';
document.getElementsByTagName('head')[0].appendChild(script);


script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'https://www.google.com/recaptcha/api.js';
var url = window.location.href;
if(url.indexOf('/ua/') != -1){
    script.src += '?hl=uk';
}
document.getElementsByTagName('head')[0].appendChild(script);
