$(document).ready(function() {
		 var conUrl = $("#industry").attr("url");
    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                    ,
                     remote: {
                        type: 'GET',
                        url: conUrl+'/check_userNameUnique',
                        message: 'This Username is already registered.',
                        delay: 2000
                    }
                }
            },
            
             first_name: {
                validators: {
                    notEmpty: {
                        message: 'The First Name is required and can\'t be empty'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'The City Name is required and can\'t be empty'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'The State Name is required and can\'t be empty'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'The Country Name is required and can\'t be empty'
                    }
                }
            },
            pincode: {
                validators: {
                    notEmpty: {
                        message: 'The Pincode is required and can\'t be empty'
                    }, stringLength: {
                        min: 6,
                        max:8,
                        message: 'The Pincode must be 6  digits'
                    },regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Pincode can only consist of number'
                    }
                }
            },
            mobile: {
                validators: {
                    notEmpty: {
                        message: 'The Mobile Number is required and can\'t be empty'
                    },
                     stringLength: {
                        min: 10,
                        max:12,
                        message: 'The Mobile Number must be 10 to 12 digits'
                    },regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Mobile Number can only consist of number'
                    },
                     remote: {
                        type: 'GET',
                        url: conUrl+'/check_mobileUnique',
                        message: 'This Mobile Number is already registered.',
                        delay: 2000
                    }
                }
            },
            industry_id: {
                validators: {	 
                    notEmpty: {
                        message: 'Please Select Industry Type'
                    }
                }
            },business_id: {
                validators: {	 
                    notEmpty: {
                        message: 'Please Select Business Type'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
                    remote: {
                        type: 'GET',
                        url: conUrl+'/check_emailUnique',
                        message: 'This email is already registered,Please login your account',
                        delay: 2000
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The Password field is required and can\'t be empty'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
            
        }
    });
$('#industry').on('change',function(){
		var industry_id=$( "#industry option:selected").val();
		 var url = $("#industry").attr("url");
		 var url1 = url+'/business_type';	
			var url = url1;
			$.ajax({
				 type: "GET",
				 url:url,
				 data: ({industry_id: industry_id}),
				 success: function(data){
						$('#business_id').html(data);
				 }
			});
		
	
});
$('#state').on('change',function(){
		var state=$( "#state option:selected").val();
		 var url = $("#industry").attr("url");
		 var url1 = url+'/cityList';	
			var url = url1;
			$.ajax({
				 type: "GET",
				 url:url,
				 data: ({state: state}),
				 success: function(data){
						$('#city').html(data);
				 }
			});
		
	
});

});
