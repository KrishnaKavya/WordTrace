$(document).ready(function() {
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
});