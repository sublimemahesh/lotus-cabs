

//--------------------------------------------------check one by one on blur--------------------------------------------------
jQuery(document).ready(function () {

    jQuery("#txt_name").blur(function () {
        validateEmpty("txt_name", "spanName");
    });

    jQuery("#txtEmail").blur(function () {
        ValidateEmail("txtEmail", "spanEmail");
    });

    jQuery("#txt_startfrom").blur(function () {
        validateEmpty("txt_startfrom", "spanPickupPlace");
    });

    jQuery("#txt_drop").blur(function () {
        validateEmpty("txt_drop", "spanDropPlace");
    });

    jQuery("#txt_pickup").blur(function () {
        validateEmpty("txt_pickup", "spanDatePickup");
    });

    jQuery("#txt_passengers").blur(function () {
        validateEmpty("txt_passengers", "spanNumberOfPassengers");
    });

    jQuery("#btnSubmit").bind('click', function () {

        if (!validate()) {
            return;
        }

        jQuery("#checking").show();
        sendForm();
    });

    jQuery('.input-validater').keypress(function (e) {
        if (e.keyCode === 13) {

            if (!validate()) {
                return;
            }
            jQuery("#checking").show();
            sendForm();
        }
    });

});


//--------------------------------------------------function to check button click --------------------------------------------------

function validate() {
    if (
            validateEmpty("txt_name", "spanName") &
            ValidateEmail("txtEmail", "spanEmail") &
            validateEmpty("txt_startfrom", "spanPickupPlace") &
            validateEmpty("txt_drop", "spanDropPlace") &
            validateEmpty("txt_pickup", "spanDatePickup") &
            validateEmpty("txt_passengers", "spanNumberOfPassengers") &
            validateEmpty("captchacode", "capspan")
            )
    {
        return true;
    } else {
        return false;
    }
}



//--------------------------------------------------Ajax call --------------------------------------------------


function sendForm() {

    jQuery.ajax({
        url: "booking-form/send-email.php",
        cache: false,
        dataType: "json",
        type: "POST",
        data: {
            captchacode: jQuery('#captchacode').val(),
            visitor_name: jQuery('#txt_name').val(),
            visitor_email: jQuery('#txtEmail').val(),
            start_from: jQuery('#txt_startfrom').val(),
            drop_to: jQuery('#txt_drop').val(),
            pick_up: jQuery('#txt_pickup').val(),
            passengers: jQuery('#txt_passengers').val()

        },
        success: function (html) {
            var status = html.status;
            var msg = html.msg;

            if (status == "incorrect") {

                jQuery("#capspan").addClass("notvalidated");
                jQuery("#capspan").html(msg);
                jQuery("#capspan").show();
                jQuery("#checking").fadeOut(2000);

            } else if (status == "correct") {
                jQuery("#checking").hide();
                jQuery("#dismessage").html(msg).delay(1000).show(1000);

                jQuery('#captchacode').val("");
                jQuery('#txt_name').val("");
                jQuery('#txtEmail').val("");
                jQuery('#txt_startfrom').val("");
                jQuery('#txt_drop').val("");
                jQuery('#txt_pickup').val("");
                jQuery('#txt_passengers').val("");
            }
        }
    });
}

//-----------------   function to check empty -------------------------------------------------------

function validateEmpty(field, validatorspan)
{

    if (jQuery('#' + field).val().length != 0)
    {
        jQuery('#' + validatorspan).addClass("validated");
        jQuery('#' + validatorspan).removeClass("notvalidated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("");

        return true;
    } else
    {
        jQuery('#' + validatorspan).addClass("notvalidated");
        jQuery('#' + validatorspan).removeClass("validated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("This field can not be empty");

        return false;
    }
}

//--------------------------------------------------function to check email--------------------------------------------------

function ValidateEmail(field, validatordiv)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (jQuery('#' + field).val().match(mailformat))
    {
        jQuery('#' + validatordiv).addClass("validated");
        jQuery('#' + validatordiv).removeClass("notvalidated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("");
        return true;
    } else
    {
        jQuery('#' + validatordiv).addClass("notvalidated");
        jQuery('#' + validatordiv).removeClass("validated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");

        return false;
    }
}


//--------------------------------------------------check one by one on blur--------------------------------------------------
jQuery(document).ready(function () {

    jQuery("#txt_name").blur(function () {
        validateEmpty("txt_name", "spanName");
    });

    jQuery("#txtEmail").blur(function () {
        ValidateEmail("txtEmail", "spanEmail");
    });

    jQuery("#txt_startfrom").blur(function () {
        validateEmpty("txt_startfrom", "spanPickupPlace");
    });

    jQuery("#txt_drop").blur(function () {
        validateEmpty("txt_drop", "spanDropPlace");
    });

    jQuery("#txt_pickup").blur(function () {
        validateEmpty("txt_pickup", "spanDatePickup");
    });

    jQuery("#txt_passengers").blur(function () {
        validateEmpty("txt_passengers", "spanNumberOfPassengers");
    });

    jQuery("#btnSubmit").bind('click', function () {

        if (!validate()) {
            return;
        }

        jQuery("#checking").show();
        sendForm();
    });

    jQuery('.input-validater').keypress(function (e) {
        if (e.keyCode === 13) {

            if (!validate()) {
                return;
            }
            jQuery("#checking").show();
            sendForm();
        }
    });

});


//--------------------------------------------------function to check button click --------------------------------------------------

function validate() {
    if (
            validateEmpty("txt_name", "spanName") &
            ValidateEmail("txtEmail", "spanEmail") &
            validateEmpty("txt_startfrom", "spanPickupPlace") &
            validateEmpty("txt_drop", "spanDropPlace") &
            validateEmpty("txt_pickup", "spanDatePickup") &
            validateEmpty("txt_passengers", "spanNumberOfPassengers") &
            validateEmpty("captchacode", "capspan")
            )
    {
        return true;
    } else {
        return false;
    }
}



//--------------------------------------------------Ajax call --------------------------------------------------


function sendForm() {

    jQuery.ajax({
        url: "booking-form/send-email.php",
        cache: false,
        dataType: "json",
        type: "POST",
        data: {
            captchacode: jQuery('#captchacode').val(),
            visitor_name: jQuery('#txt_name').val(),
            visitor_email: jQuery('#txtEmail').val(),
            start_from: jQuery('#txt_startfrom').val(),
            drop_to: jQuery('#txt_drop').val(),
            pick_up: jQuery('#txt_pickup').val(),
            passengers: jQuery('#txt_passengers').val()

        },
        success: function (html) {
            var status = html.status;
            var msg = html.msg;

            if (status == "incorrect") {

                jQuery("#capspan").addClass("notvalidated");
                jQuery("#capspan").html(msg);
                jQuery("#capspan").show();
                jQuery("#checking").fadeOut(2000);

            } else if (status == "correct") {
                jQuery("#checking").hide();
                jQuery("#dismessage").html(msg).delay(1000).show(1000);

                jQuery('#captchacode').val("");
                jQuery('#txt_name').val("");
                jQuery('#txtEmail').val("");
                jQuery('#txt_startfrom').val("");
                jQuery('#txt_drop').val("");
                jQuery('#txt_pickup').val("");
                jQuery('#txt_passengers').val("");
            }
        }
    });
}

//-----------------   function to check empty -------------------------------------------------------

function validateEmpty(field, validatorspan)
{

    if (jQuery('#' + field).val().length != 0)
    {
        jQuery('#' + validatorspan).addClass("validated");
        jQuery('#' + validatorspan).removeClass("notvalidated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("");

        return true;
    } else
    {
        jQuery('#' + validatorspan).addClass("notvalidated");
        jQuery('#' + validatorspan).removeClass("validated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("This field can not be empty");

        return false;
    }
}

//--------------------------------------------------function to check email--------------------------------------------------

function ValidateEmail(field, validatordiv)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (jQuery('#' + field).val().match(mailformat))
    {
        jQuery('#' + validatordiv).addClass("validated");
        jQuery('#' + validatordiv).removeClass("notvalidated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("");
        return true;
    } else
    {
        jQuery('#' + validatordiv).addClass("notvalidated");
        jQuery('#' + validatordiv).removeClass("validated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");

        return false;
    }
}
>>>>>>> #54 Create send booking form
