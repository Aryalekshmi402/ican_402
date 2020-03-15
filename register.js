jQuery.validator.addMethod("noSpace", function(value, element) {
    return value == '' || value.trim().length != 0;
}, "No space please and don't leave it empty");
jQuerCheckDOBy.validator.addMethod("customEmail", function(value, element) {
  return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value );
}, "Please enter valid email address!");



jQuery.validator.addMethod("", function (value, element) {
       var  minDate = Date.parse("01/01/1950");
        var today=new Date();
        var DOB = Date.parse(value);
        if((DOB <= today && DOB >= minDate)) {
            return true;
        }
        return false;
    }, "NotValid");





jQuery.validator.addMethod("passstrength", function(value, element) {
    return this.optional(element) || /([0-9])/ && /([a-zA-Z])/ && /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/.test(value);});


jQuery.validator.addMethod("alphabetsnspace", function(value, element) {
    return this.optional(element) || /^[a-zA-Z ]*$/.test(value);},"invalid!");


$.validator.addMethod( "alphanumeric", function( value, element ) {
return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please" );
var $registrationForm = $('#myreg');
if($registrationForm.length){
  $registrationForm.validate({
      rules:{
          //username is the name of the textbox
		  textnames: {
              required: true,
              noSpace: true,
              alphabetsnspace: true


          },
          txtnames: {
              required: true,
              noSpace: true,
              alphabetsnspace: true

          },
		  dob:{
              required: true,
              CheckDOB: true
          },
		  doj:{
              required: true,
              CheckDOB: true
          },
		  subname: {
              required: true,
              noSpace: true,
              alphabetsnspace: true

          },
		  sex: {
              required: true
          },
		   State: {
              required: true
          },
		   District: {
              required: true
          },
		   City: {
              required: true,
              //alphanumeric is the custom method, we defined in the above
              alphabetsnspace: true
          },
		   pincode: {
              required: true,
              number: true,
              minlength:6,
              maxlength:6
          },
		   emailid: {
              required: true,
              customEmail: true
          },
		   mobileno:{
              required:true,
              number:true,
              maxlength:10,
              minlength:10
          },
		  uname: {
              required: true,
              noSpace: true,
              alphabetsnspace: true

          },
		   passw: {
              required: true,
              passstrength: true,
              minlength:8
          },
          cf: {
              required: true,
              equalTo: '#passw'
          },
          
          
          street: {
              required: true,
              //alphanumeric is the custom method, we defined in the above
              alphabetsnspace: true
          },
          area: {
              required: true,
              //alphanumeric is the custom method, we defined in the above
              alphabetsnspace: true
          },
         
         file: {
              required: true
          },
   },
      messages:{
          textnames: {
              //error message for the required field
              required: 'Please enter first name!'
          },
		  txtnames: {
              //error message for the required field
              required: 'Please enter last name!'
          },
          dob:{
            required: 'please enter Date of birth!'
          },
		  doj:{
            required: 'please enter Date of join!'
          },
		  subname: {
              //error message for the required field
              required: 'Please enter subject name!'
          },
          sex:{
            required: 'Select Gender!'
          },
		   State: {
              required: 'Please select state!'
          },
		   District: {
              required: 'Please select district!'
          },
		  City: {
              //error message for the required field
              required: 'Please enter City!'
          },
          pincode:{
            required: 'enter Pincode!',
            number: 'invalid!',
            minlength: 'invalid!',
            maxlength: 'invalid!'
          },
		   emailid: {
              required: 'Please enter email!',
              //error message for the email field
              email: 'Please enter valid email!'
          },
		   mobileno:{
              required:'mobile number required!',
              number:'invalid format!',
              minlength:'invalid!',
              maxlength:'invalid!'
          },
		  uname: {
              //error message for the required field
              required: 'Please enter first name!'
          },
		   passw: {
              required: 'Please enter password!',
              passstrength: 'weak password!',
              minlength:'too short!'
          },
		  cf: {
              required: 're-enter password!',
              passstrength: 'weak password!',
              minlength:'too short!',
              equalTo: 'Same password please!'
          },
          file:{
            required:'Please upload file!'
          },
      },

  });
}
