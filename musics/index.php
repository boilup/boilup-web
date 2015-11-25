
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>boilup.ca</title>
    <?php
    include('../includes/bstop.inc');
    include('../pdo/pdomusicdb.php');

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
        <a name='Music'>
        <h2>Music</h2></a>

        <p>I believe it all started when as just a kid, driving up over Montana Dr in Stephenville, I heard some Allman Brothers song (rambling man) playing on the radio. Long before the days of car seats and seat belt requirements. Nevermind the Allmans brothers, my father would often have a radio on in each room in the house, didnt like the silence I suppose. From then on I've developed a ecclectic taste in music; mainly revolving around my sisters record collection and heavily influenced by my Newfoundland & Labrador roots.  Here is a little information about what I listen to, what I play and what I'll hopefully play at some point in the future. </p>
        <h3>Guitar</h3>
        <p>Been playing (acoustic) guitar since about 1998 I would guess. Just started my second stint in college, and had a couple of classmates who played.  My mother had an old Fender F-15 sitting in the closet for years; a <strike>fucking</strike> fender as Gregg White once said! Either way, I had gotten it shipped out one winter day from her place, and once re-strung and hit my first solid G note I was pretty much hooked.  Just a campfire/house party player, which is all i really wanted to get out of it.  </p><hr>
        <h3>Violin</h3>
        <p>This is a instrument which I just started playing probably since fall 2014. Lovely difference from a guitar and more voice like, if you follow me. Always wanted to play and received one for Christmas to learn on. Currently only have a few tunes under my belt but the interest is still there!</p>
        <div id="guitartable">
      <?php

      $GetInstruments='select * from instruments where type= :TYPE';
      $GetInstrumentsHandler=$dbh->prepare($GetInstruments, array(PDO::FETCH_OBJ));
      $GetInstrumentsHandler->execute(array(':TYPE'=>"Guitar"));
        echo "<table id='guitartable' class='table table-striped'>";
        echo"<tr><thead>";
        echo "<th>entry</th>";
        echo "</tr></thead>";

        echo "<tbody>";
        while($Guitar=$GetInstrumentsHandler->fetch(PDO::FETCH_OBJ)) {
            //echo "<pre>";
            echo "<tr><td>My " . $Guitar->make . " " . $Guitar->model . " Was acquired on " . $Guitar->acquired . "</td></tr>";
            //echo "<pre>";
        }
        echo "</tbody>";
        echo "</table>";
      ?>
      </div>
      <hr>


      <div id="buttons">
        <button data-target='#myModal' type="button" id="addInstrument" data-target="#newGuitar" data-toggle="modal" data-loading-text="Please wait..." class="btn btn-primary" >
            Add instrument
        </button>

      </div>


          <!-- // make, model, type and purchased are used here. need to re-do the modal form. -->


      <div class="modal fade" id="myModal" role="dialog" >
          <div class="modal-dialog" role="document">

              <div class="modal-content">

                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Add Instrument</h4>
                  </div>

                  <div class="modal-body">
                      <form>
                      <div class="form-group" id="addGuitar">

                          <input name="make" type="text" class="form-control" id="make" placeholder="Make">
                          <input name="model" type="text" class="form-control" id="model" placeholder="Model">
                          <input name="type" type="text" class="form-control" id="type" placeholder="Type">
                          <input name="purchased" type="date" class="form-control" id="Purchased" placeholder="Purchased On">

                      </div>

                          <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" >Cancel</button>
                          <input type="submit" id="newGuitarSubmit" class="btn btn-primary">
                          </div>

                      </form>

                  </div>



              </div>

          </div>

      </div>


      </div>

    </div>
    <?php
    include("../includes/incbottom.inc");
    ?>
    <script src="../js/music.js"></script>
  </body>
</html>
