/**
 * Created by whiteco on 3/24/2015.
 */
$(document).ready(function(){
   $("form").submit(function(){
       alert("hello there");


   });
    $( "#NewInstrument" ).submit(function( event ) {
        alert( "Handler for .submit() called." );
        event.preventDefault();
        $("#form").id(function(){

        });
    });

});