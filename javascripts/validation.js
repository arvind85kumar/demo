$(document).ready(function(e){
jQuery("#frmAdd").validate({   
            rules: {
                first_name: {
                    required: true                                                    
                },
                last_name: {
                    required: true                                 
                },
                address1: {
                    required: true                                 
                },
                cell_phone: {
                    required: true,                               
                    cellPhoneError: true                                  
                },
                city: {
                    required: true                                 
                },
                state: {
                    required: true                                 
                },
                zipcode: {
                    required: true                                 
                },
                dob: {
                    required: true                                 
                },
                submission_date: {
                    required: true                                 
                },
                event_type: {
                    required: true,                                
                    eventType: true                                 
                },
                age_group: {
                    required: true ,                               
                    ageGroup: true                                 
                }
                          
            },           
            messages: {              
                first_name: {
                    required: "Please enter first name."
                },
                last_name: {
                    required: "Please enter last name."
                },
               address1: {
                    required: "Please enter address1."
                },
                cell_phone: {
                    required: "Please enter cell phone.",
                    cellPhoneError: "This player already exists in our record."
                },
                city: {
                    required: "Please enter city."
                },
                state: {
                    required: "Please enter state."
                },
                zipcode: {
                    required: "Please enter zip code."
                },
                dob: {
                    required: "Please enter junior birth day."
                },
                submission_date: {
                    required: "Please enter submission date."
                },
                event_type: {
                    required: "Please select event type.",
                    eventType: "Please enter partner phone."
                },
                age_group: {
                    required: "Please select age group.",
                    ageGroup: "Please select above age group."
                }
                           
            },
            submitHandler: function (form) {      
               
                form.submit();
               
            }           
        });

});
