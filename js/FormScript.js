$(document).ready(function() {


    //$( "#siteloader" ).load( "testing.html", function() {
      //  });

        $(function(){
          //  $('#siteloader').html('<object id="webloader" data="http://www.thefreedictionary.com/black"/>');
        });

    //Input Fields Start
     var max_fields      = 5; //maximum input boxes allowed
    
    //Origins
    var origins_count = 1; //initlal text box count
    $('#Add_Origins').click(function(e){ //on add input button click  
         e.preventDefault();
        if(origins_count < max_fields){ //max input box allowed
            origins_count++; //text box increment
            $('#origins_wrap').append('<div><input type="text" name="origins[]" class="input"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $('#origins_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); origins_count--;
    });
    
    //Past
    var past_count=1;
     $('#Add_Past').click(function(e){ 
         e.preventDefault();
        if(past_count < max_fields){ //max input box allowed
            past_count++; //text box increment
            $('#Past_wrap').append('<div><input type="text" name="past[]" class="input"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }

     });

      $('#Past_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); past_count--;
    });


    //Present
    var Present_count=1;
     $('#Add_Present').click(function(e){ 
         e.preventDefault();
        if(Present_count < max_fields){ //max input box allowed
            Present_count++; //text box increment
            $('#Present_wrap').append('<div><input type="text" name="present[]" class="input"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }

     });

      $('#Present_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); Present_count--;
    });


    //Associations
    var Associations_count=1;
         $('#Add_Associations').click(function(e){ 
         e.preventDefault();
        if(Associations_count < max_fields){ //max input box allowed
            Associations_count++; //text box increment
            $('#Associations_wrap').append('<div><input type="text" name="associations[]" class="input"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }

     });

      $('#Associations_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); Associations_count--;
    });


    //Connections
    var Connections_count=1;
         $('#Add_Connections').click(function(e){ 
         e.preventDefault();
        if(Connections_count < max_fields){ //max input box allowed
            Connections_count++; //text box increment
            $('#Connections_wrap').append('<div><input type="text" name="connections[]" class="input"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }

     });

      $('#Connections_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); Connections_count--;
    });

    //Input fields end.

    

});