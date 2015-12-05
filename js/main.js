/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    
   $("form").submit( function(e) {
      e.preventDefault();   
      formData=$(this).serialize(); 
      //
      //console.log(formData);
      $.post('ajax/ajaxMailer.php', formData, function(response, status, xhr)  {
        
          //console.log(formData); 
          
           if ( status === "error" ) {
               var msg = "Sorry but there was an error running the ajax call";
               alert(status);
               $("#sendResult").html('sorry it did not send');
           }
            else { //status is success
                $("#sendResult").html(response); 
                $(".modal").modal('hide');
                $("#contactForm")[0].reset();
                alert('The message was successfully sent'); 
                
            }
          
      });
      
   }); 
   
});