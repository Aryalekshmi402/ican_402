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
var $registrationForm = $('#myform');
if($registrationForm.length){
  $registrationForm.validate({
      rules:{
          //username is the name of the textbox
          subname: {
              required: true,
              //alphanumeric is the custom method, we defined in the above
              alphanumeric: true,
              noSpace: true
          },
          doj:{
              required: true,
             

          },
          email: {
              required: true,
              customEmail: true
          },
          mobile:{
              required:true,
              number:true,
              maxlength:10,
              minlength:10
          },
          pwd: {
              required: true,
              passstrength: true,
              minlength:8
          },
          cpwd: {
              required: true,
              equalTo: '#pwd'
          },
          fname: {
              required: true,
              noSpace: true,
              alphabetsnspace: true


          },
          gname: {
              required: true,
              noSpace: true,
              alphabetsnspace: true

          },
          
         file: { 
		 
		  accept: "(jpeg?|jpg|pdf)" 
          
          },
          area: {
              required: true,
              noSpace: true,
              //alphanumeric is the custom method, we defined in the above
              alphabetsnspace: true
          },
          city: {
              required: true,
              noSpace: true,
              //alphanumeric is the custom method, we defined in the above
              alphabetsnspace: true
          },
          gender: {
              required: true
          },
          dob:{
              required: true,
              CheckDOB: true
          },
          pin: {
              required: true,
              number: true,
              minlength:6,
              maxlength:6
          },
          State:{
              required: true
          },

          District: {
              required: true
          },

      },
      messages:{
          subname: {
              //error message for the required field
              required: 'Please enter subject!'
          },
          dob:{
            required: 'please enter Date of birth!'
          },
          gender:{
            required: 'Select Gender!'
          },
          pin:{
            required: 'enter Pincode!',
            number: 'invalid!',
            minlength: 'invalid!',
            maxlength: 'invalid!'
          },
          State:{
            required:'Please select State!'
          },
          file: {
              //error message for the required field
              required: 'please upload the certificate with extension jpg/jpeg/pdf'
          },
          area: {
              //error message for the required field
              required: 'Please enter Area!'
          },
          city: {
              //error message for the required field
              required: 'Please enter City!'
          },
          email: {
              required: 'Please enter email!',
              //error message for the email field
              email: 'Please enter valid email!'
          },
          mobile:{
              required:'mobile number required!',
              number:'invalid format!',
              minlength:'invalid!',
              maxlength:'invalid!'
          },
            doj:{
                required:'please enter date of join!',
                
            },
          pwd: {
              required: 'Please enter password!',
              passstrength: 'weak password!',
              minlength:'too short!'
          },
          cpwd: {
              required: 're-enter password!',
              passstrength: 'weak password!',
              minlength:'too short!',
              equalTo: 'Same password please!'
          },
          fname: {
              required: 'Please enter full name!',
              alphabetsnspace:'invalid format!'
          },
          gname: {
              required: 'Please enter your guardian name!',
              alphabetsnspace:'invalid format!'
          },
          District: {
              required: 'Please select district!'
          },

      },

  });
}
