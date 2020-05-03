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
jQuery.validator.addMethod("phonenum", function(value, element) {
    return this.optional( element ) || /^([7-9_\.\-])+(([0-9]))+$/.test( value );
}, "Please enter valid phone number!");
$.validator.addMethod("alphabetsnspace", function(value, element) {
    return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
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
            nm: {
                required: true,
                noSpace: true,
                alphabetsnspace: true

            },
            em: {
                required: true,
                customEmail: true
            },

            gen: {
                required: true,
            },
            desig: {
                required: true,
                noSpace: true,
                alphabetsnspace: true
            },
            sub: {
                required: true,

            },
            phone:{
                required:true,
                number:true,
                maxlength:10,
                phonenum: true,
                minlength:10
            },
            pi:{
                required: true,
                CheckDOB: true
            },
        },
        messages:{
            nm: {
                required: 'Please enter full name!',
                alphabetsnspace:'invalid format!'
            },
            em: {
                required: 'Please enter email!',
                email: 'Please enter valid email!'
            },
            gen:{
                required: 'Select Gender!'
            },
            desig: {
                required: 'Please enter designation!',
                alphabetsnspace:'invalid format!'
            },
            sub: {
                required: 'Select subject name!'
            },
            phone:{
                required:'mobile number required!',
                number:'invalid format!',
                minlength:'invalid!',
                phonenum: 'The number must start with 7/8/9',
                maxlength:'invalid!'
            },
            pi:{
                required: 'please enter Date of birth!'
            },
        },

    });
}
