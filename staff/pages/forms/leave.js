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
var $registrationForm = $('#fm');
if($registrationForm.length){
    $registrationForm.validate({
        rules:{
            //username is the name of the textbox
            ldate:{
                required: true,
            },
            sess: {
                required: true,
            },
            res: {
                required: true,
                minlength:6,
                maxlength:20
            },


        },
        messages:{

            ldate:{
                required: 'please choose date!'
            },
            sess:{
                required: 'Select session!'
            },
            res: {
                required: 'Please enter reason!',
                minlength:'too short!'

            },


        },

    });
}
