
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>boilup.xyz</title>
        <?php
        include('../includes/bstop.inc');
        include('../php/record.php');

        session_start();
        ?>


    </head>

    <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">boilup.ca</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php include('../includes/menu.inc');?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
        <div class="starter-template">
            <a name='Projects'><h2>Records you say?</h2></a>
            <p>Another application to just track my records. currently i have around 50 or so, mainly from the 70's/80's for obvious reasons. I'm no audiophile by any stretch but with records you tap your feet and
                with CDs/digital you don't ;)</p>
            <?php
            //insert php data here, will need a form to add
            // and probably authenticate at some point.\

            echo '<div class="panel panel-primary">';
            echo '<div class="panel-heading">Ye olde Record colletion</div>';

            echo '</div>';
?>
            <table id="recordtable" class="table panel table-striped table-bordered table-hover">
            <thead>
            <tr>
            <th>First Name</th><th>Last Name</th><th>Comments</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
            <th>First Name</th><th>Last Name</th><th>Comments</th>
            </tr>
            </tfoot>
            </table>



            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                Add a record!
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add a record</h4>
                        </div>
                        <div class="modal-body" >
                            <form action="" id="recordadd" >
                                    <label for="artistName">Artist Name: </label>
                                    <input type="select" name="artistName" id="artistName" value="" >
                                    <label for="recordName">Record Name: </label>
                                    <input  type="text" name="recordName" id="recordName" value="">
                                    <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--delete a record modal-->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myDeleteModal">
                Delete a record!
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Delete a record</h4>
                        </div>
                        <div class="modal-body" >
                            <form  id="recordlist" >
                                <!-- this is where the records will get listed -->

                                <button type="submit" class="btn btn-default">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="progress">
            <div class="progress-bar active progress-bar-info"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">

            </div>
        </div>

        <div id="result"></div>

        </div>
    </body>

    <?php
    include('../includes/incbottom.inc');
    ?>
    <script src="../js/records.js" type="application/javascript"></script>
</html>
