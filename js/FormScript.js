/*
The form script implements
	- linking and loading of the free dictionary website.
	- Adding and removing the input fields in the form.

*/
$(document).ready(function() {
		/*
			fetch - The word clicked is asaving in the java script variable using a val function.
			The url of the free dictionary is appended with the word taken from the tag from form page. 
			The function html() loads the url to the html tag with id site loader. 
		*/
        $(function(){
            var fetch=$('#word').val();
            $('#siteloader').html("<object id='webloader' data='http://www.thefreedictionary.com/"+fetch+"'/>");
        });

     /*
		Each field in the form can have at the max of 5 input fields.( user can enter 5 words associated with each field.)
		The maximum fields constant is defined.  
		Each field is appended with the name associated to that field for taking the input. 
		example: Origin : When the user clicks on add button the input field is appended to the existing input fields and the name 
		of the field is given as origin[] array. The array variable keeps track of all the input fields of origin. 
     */

    //Input Fields Start
     var max_fields      = 5; //maximum input boxes allowed for a field
    
    //Origins
    var origins_count = 1; //initlal text box count
    $('#Add_Origins').click(function(e){ //on add input button click  
         e.preventDefault();
        if(origins_count < max_fields){ //max input box allowed
            origins_count++; //text box increment
             //add input box with name as origin and remove field associated to the input field. 
            $('#origins_wrap').append('<div><input type="text" name="origins[]" class="input"/><a href="#" class="remove_field">Remove</a></div>');
        }
    });
    // on click of remove. The input field is deleted from the array and the maximum count of fields is reduced. 
    $('#origins_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); origins_count--;
    });
    
    //Past
    var past_count=1;
     $('#Add_Past').click(function(e){ 
         e.preventDefault();
        if(past_count < max_fields){ //max input box allowed
            past_count++; //text box increment
            //add input box with name as past and remove field associated to the input field. 
            $('#Past_wrap').append('<div><input type="text" name="past[]" class="input"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }

     });

      // on click of remove. The input field is deleted from the array and the maximum count of fields is reduced. 
      $('#Past_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); past_count--;
    });


    //Present
    var Present_count=1;
     $('#Add_Present').click(function(e){ 
         e.preventDefault();
        if(Present_count < max_fields){ //max input box allowed
            Present_count++; //text box increment
             //add input box with name as present and remove field associated to the input field. 
            $('#Present_wrap').append('<div><input type="text" name="present[]" class="input"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }

     });

 		// on click of remove. The input field is deleted from the array and the maximum count of fields is reduced. 
      $('#Present_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); Present_count--;
    });


    //Associations
    var Associations_count=1;
         $('#Add_Associations').click(function(e){ 
         e.preventDefault();
        if(Associations_count < max_fields){ //max input box allowed
            Associations_count++; //text box increment
             //add input box with name as associations and remove field associated to the input field. 
            $('#Associations_wrap').append('<div><input type="text" name="associations[]" class="input"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }

     });

          // on click of remove. The input field is deleted from the array and the maximum count of fields is reduced. 
      $('#Associations_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); Associations_count--;
    });


    //Connections
    var Connections_count=1;
         $('#Add_Connections').click(function(e){ 
         e.preventDefault();
        if(Connections_count < max_fields){ //max input box allowed
            Connections_count++; //text box increment
              //add input box with name as connections and remove field associated to the input field. 
            $('#Connections_wrap').append('<div><input type="text" name="connections[]" class="input"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }

     });
          // on click of remove. The input field is deleted from the array and the maximum count of fields is reduced. 
      $('#Connections_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); Connections_count--;
    });

    //Input fields end.

    

});