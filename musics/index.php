<!DOCTYPE htm
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


      <?php
      $GetInstruments='select * from instruments where type= :TYPE';
      $GetInstrumentsHandler=$dbh->prepare($GetInstruments, array(PDO::FETCH_OBJ));
      $GetInstrumentsHandler->execute(array(':TYPE'=>"Guitar"));
      while($Guitar=$GetInstrumentsHandler->fetch(PDO::FETCH_OBJ)) {
          //echo "<pre>";
          echo "My " . $Guitar->make . " " . $Guitar->model . " Was acquired on " . $Guitar->acquired . "<br>";
          //echo "<pre>";
      }
      ?>

      <div>
          <p><hr>This here's a instrument input form<hr></p>
          <form class="form-inline" role="form" id="NewInstrument">
              <div class="form-group">
                  <label for="Make">Make</label>
                  <input type="text" class="form-control" id="Make">
              </div>
              <div class="form-group">
                  <label for="Model">Model</label>
                  <input type="text" class="form-control" id="Model">
              </div>
              <div class="form-group">
                  <label for="Type">Type</label>
                  <input type="text" class="form-control" id="Type">
              </div>
              <div class="form-group">
                  <label for="Purchased">Purchased</label>
                  <input type="date" class="form-control" id="Purchased">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
          </form>
      </div>
      </div>
    </div>

    <?php
    include("../includes/incbottom.inc");
    ?>

  </body>
</html>
