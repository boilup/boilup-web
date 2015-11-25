/**
 * Created by whiteco on 3/24/2015.
 */
$(document).ready(function(){

    $('form').submit(function(event) {
        event.preventDefault();

        //take form data and dump it into the database.
        var data=$(this).serializeArray();
        //console.log(data);
        $.post("insert.php",data,function(result) {

            var output=JSON.parse(result);
            //var outstring="My " + output.make + " " + output.model + " was purchased on " + output.purchased + "<br>";
            var outstring="<tr><td>My " + output.make + " " + output.model + " Was acquired on " + output.purchased + "</td></tr>";
            $("table#guitartable").append(outstring );
            $("#jsonout").html(output.type);

        });



        //$("#result").load("super.txt");

        //console.log( $(this).serializeArray());

    });

});