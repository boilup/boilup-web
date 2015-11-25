/**
 * Created by whiteco on 8/26/2015.
 */

$(document).ready(function(){

    //load some ajax to handle the form
    $("#recordadd").submit(function(event) {
        event.preventDefault();
        //console.log($(this).serialize());
        //$("#result").text($("form").serialize());
        $(".progress-bar").css('width','20%').attr('aria-valuenow',40);
        //todo : run some ajax now with the variables (send to the insert record script to create a new thign or two)
        $.post('../actions/add_record.php', $(this).serialize(), function () {
            table.ajax.reload();
        });

    });

    //the delete record one here.
    $("#recordlist").submit(function(event) {
        event.preventDefault();
        //alert('hey');
        console.log($(this).serialize());
        //$("#result").text($(this).serialize());
        $(".progress-bar").css('width','20%').attr('aria-valuenow',20);
        //todo : run some ajax now with the variables (send to the insert record script to create a new thign or two)
        $.post('../actions/delete_record.php', $(this).serialize(), function() {
            table.ajax.reload();
        });
    });


    var editor = new $.fn.dataTable.Editor( {
        ajax: "../actions/updaterecordcomment.php",
        table: "#recordtable",
        fields: [

            { label: 'Comments', name: 'Comments' }
        ]
    } );




    //this does the populating of the datatables records (via ajax)
    var table=$("#recordtable").DataTable( {
        "ajax" : {
            "url" : '../actions/getrecordarray.php',
            "dataSrc": ""
            },
        dom:  'Bfrtip',
        table: "recordtable",
        select: true,
        "columns":[
            { "data": "artistName"},
            { "data": "recordName"},
            { "data": "Comments"}
        ],
        buttons: [
            { extend: "edit",   editor: editor }
        ],
        tableTools: {
            sRowSelect: 'single',
            aButtons: [

                { sExtends: 'editor_edit',   editor: editor }

            ]
        }
    });


    setInterval( function () {
        table.ajax.reload();
    }, 30000 );

    $.getJSON('../actions/get_records.php', function(data){
        //console.log(data);
        var reclist=[];
        $.each(data, function (key, val) {
            $("#recordlist").prepend("<div class='checkbox' ><label><input name='" + val.id + "' id='" + val.id + "' type='checkbox'>" + val.recordName + "</label></div");

        });

    });

    function getList() {
        var list=[];
        var test=$.getJSON("../actions/get_artists.php",function(data) {
            $.each(data, function(index, element) {
                list.push(element.artistName);
            });
        });
        return(list);
    }

    //populate the autoform options
    var availableArtists=getList();


    var subStringMatcher = function(strs){
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                    matches.push(str);
                }
            });

            cb(matches);
        };

    };

    $( "#artistName" ).typeahead(
        {
            hint: true,
            highlight: true,
            minLength: 1
        },
        {
            name: 'availableArtists',
            source: subStringMatcher(availableArtists)

        });



});