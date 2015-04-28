/**
 * Created by whiteco on 3/24/2015.
 */
$(document).ready(function(){
   $( "form" ).submit(function( event ) {
     $.post( "insert.php", $("#newGuitar").serialize(), function(data, status){
         document.getElementById("result").innerHTML=(status);
     });

     clearInput();

     return false;

   });

   function clearInput() {
     $("#newGuitar :input").each( function() {
     $(this).val('');
     });
   }
});