jQuery.validator.addMethod("noSpace", function(value, element) {
    return value == '' || value.trim().length != 0;
}, "No space please and don't leave it empty");

jQuery.validator.addMethod("alphabetsnspace", function(value, element) {
    return this.optional(element) || /^[a-zA-Z ]*$/.test(value);},"invalid!");

$.validator.addMethod( "alphanumeric", function( value, element ) {
    return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please" );
var $registrationForm = $('#myform');
if($registrationForm.length)
{
    $registrationForm.validate({
        rules:{
            text-input: {
                required: true,
                //alphanumeric is the custom method, we defined in the above
                alphanumeric: true,
                noSpace: true
                     },
               },
    messages:{
        subname: {
            //error message for the required field
            required: 'Please enter subject!'
        },
        }
    }







