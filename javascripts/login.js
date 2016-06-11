jQuery(document).ready(function(){
	var allValidator = jQuery('#login').validate({
		 errorElement: "div",
	 rules: {
		username: {required: true
		
		}, 
		password: {
			required: true
		}
	 },
	 messages: {
		username:{
		required:"Please enter Username."
		
			},
		password: {
			required: "Please enter Password."
			
		}           		 
	 },submitHandler: function(e){
		  e.preventDefault();
		return false; // avoid to execute the actual submit of the form.                  
	}
	
  });
});
