$(document).ready(function () {

    //add/remove value in preview
    $("form#ecardformID :input").on("change",function(e){
        // console.log(e.target.name);
        var inputName = e.target.name;
        var inputVal = e.target.value;
        if(e.target.value.length > 0){
            $("#" + inputName).show().empty().append(inputVal);
            $("." + inputName).show();
            $('.'+inputName+'-icon').show();
            $("." + inputName).attr("href",'');
            $("." + inputName).attr("href", inputVal)
        } else {
            $("#" + inputName).hide();
            $("." + inputName).hide();
            $('.'+inputName+'-icon').hide();
        }
    });
    // defoult hide

    //on change file input call
    $('input[type="file"]').change(function(e) {
        readURL(this,e);
    });
    //live image preview
    function readURL(input,e) {
        if (input.files && input.files[0]) {
            var fileName = e.target.name;
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.'+fileName).attr('src', e.target.result);
                $('.'+fileName).css({'background-image':'url(' + e.target.result + ')','background-size':'100% 100%'});
            }
            reader.readAsDataURL(input.files[0]);
        }

    }

//jquery validator
    jQuery.validator.setDefaults({
        success: "valid"
    });
    $('[data-toggle="tooltip"]').tooltip();
    $('#ecardformID').validate({ // initialize the plugin
        rules: {
            name: { required: true, maxlength :30 , minlength :2 },
            designation: { required: true, maxlength :30 , minlength :2 },
            organisation: { maxlength :30 , minlength :2 },
            phone: { required: true, maxlength :20 , minlength :10},
            fax: { maxlength :20 , minlength :5 },
            skype_name: { maxlength :30 , minlength :2 },
            website: { maxlength :50 , minlength :2 },
            street: { maxlength :30 , minlength :2 },
            city: { required: true, maxlength :30 , minlength :2 },
            state: { required: true, maxlength :30 , minlength :2 },
            country: { required: true, maxlength :30 , minlength :2 },
            zipcode: { required: true, maxlength :10 , minlength :4 },
            whatsapp: { maxlength :255 , minlength :2 },
            linkedin : { maxlength :255 , minlength :2 },
            instagram : { maxlength :255 , minlength :2 },
            snapchat : { maxlength :255 , minlength :2 },
            facebook : { maxlength :255 , minlength :2 },
            google : { maxlength :255 , minlength :2 },
            twitter : { maxlength :255 , minlength :2 },
            foursquare : { maxlength :255 , minlength :2 },
            youtube : { maxlength :255 , minlength :2 },
            blog : { maxlength :255 , minlength :2 },
            meetup : { maxlength :255 , minlength :2 },
            pinterest : { maxlength :255 , minlength :2 },
        }
    });

});
$('.social,.email-icon,.website-icon,.skype_name-icon,.phone-icon,.about-icon,.organisation-icon,.designation-icon,.zipcode-icon').hide();
