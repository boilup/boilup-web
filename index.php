<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>boilup.xyz</title>
    <?php include('includes/bstop.inc');?>
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
          <a class="navbar-brand" href="#">boilup.ca</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php include('includes/menu.inc');?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
 
    <div class="container">

      <div class="starter-template" class="center-block">
        <h1>Hey, how about a cup of tea and a cut of pie?</h1><hr>
        <img src="https://i.imgur.com/RhPQufT.jpg" title="source: imgur.com" class="img-responsive"/>
        <hr>
        <p class="lead">Tastes great, less filling... Welcome to boilup.ca, where lack of punctuation makes a statement.<br></p>
        <p >This is just a page about things I'm into, an hopefully not a starting place for my identitfy theft. Working in IT but dabbling in lots of things, including the family, bikes, guitars and yep tech. Have a look around, as this might not be here forever OOOOooooo....<br></p>
        <a name='About'><h2>About</h2></a>
	So far it's been a complete loop from newfoundland to ontario and back again (sorta). Originally from Kippens, Newfoundland and Labrador and curently living in St John's. Great city, I hear the lowest rates of skin cancer here on account of all the fog ;). 
        <a name='contact'>
        <h2>Contact Info</h2></a>
        <p>Please feel free to contact me via linkedin or instagram. </p> 
	<a href="https://ca.linkedin.com/pub/marcel-white/3/a72/0"><img src="/media/Logo-2C-14px.png" alt="linkedin"></a>
        <a href="https://instagram.com/marcelwhite74?ref=badge" class="ig-b- ig-b-v-24"><img src="https://badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram"></a>

<a href="https://imgur.com/NBwEZDz"><br><br><img src="https://i.imgur.com/NBwEZDz.gif" title="source: imgur.com" /></a>
        <br/><br/><br/>
        <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myContact">Email me!</button></p>
</div>



        <!-- Modal -->
        <div class="modal fade" id="myContact" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Send me a message</h4>
              </div>
              <div class="modal-body">
                <form role="form" action="php/email.php" >
                  <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" name='email' class="form-control" id="email" placeholder="enter email">

                    <label for="message">message:</label>
                    <input type="text" name='message' class="form-control" id="message" placeholder="enter message">
                    <br/>
                    <button type="submit" class="btn btn-default" >Submit</button>

                  </div>

                </form>
              </div>
              <div class="modal-footer">

              </div>
            </div>


          </div>
      </div>



    </div>
    <?php
    include("includes/incbottom.inc");
    ?>

  </body>


</html>
