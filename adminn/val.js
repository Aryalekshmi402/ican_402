jQuery.validator.addMethod("noSpace", function(value, element) {
    return value == '' || value.trim().length != 0;
}, "No space please and don't leave it empty");
jQuery.validator.addMethod("customEmail", function(value, element) {
    return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value );
}, "Please enter valid email address!");



jQuery.validator.addMethod("CheckDOB", function (value, element) {
    var  minDate = Date.parse("01/01/1950");
    var today=new Date();
    var DOB = Date.parse(value);
    if((DOB <= today && DOB >= minDate)) {
        return true;
    }
    return false;
}, "NotValid");
jQuery.validator.addMethod("accept", function(value, element, param) {
    return value.match(new RegExp("." + param + "$"));
});




jQuery.validator.addMethod("passstrength", function(value, element) {
    return this.optional(element) || /([0-9])/ && /([a-zA-Z])/ && /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/.test(value);});


jQuery.validator.addMethod("alphabetsnspace", function(value, element) {
    return this.optional(element) || /^[a-zA-Z ]*$/.test(value);},"invalid!");


$.validator.addMethod( "alphanumeric", function( value, element ) {
    return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please" );
var $registrationForm = $('#form1');
if($registrationForm.length){
    $registrationForm.validate({
        rules:{
            //username is the name of the textbox

            audience:{
                required: true,
            },
            message:{
                required: true,
                minlength:4
            },

        },
        messages:{

            audience:{
                required: 'Select Audience!'
            },
            message:{
                required: 'Please Enter Notification!',
                minlength:'too short!'
            },

        },

    });
}
