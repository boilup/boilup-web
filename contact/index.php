<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>boilup.ca ~~ Contact</title>
    <?php include('../includes/bstop.inc');?>
    <script src="/js/music.js"></script>

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
          <div class="alert-dismissable"><p>Hey now, don't go running away just yet! Please feel free to get in contact regarding price quotes, requests, etc..</p></div>
          <form>
              <div class="form-group">
                  <label for="contactEmail">Email address</label>
                  <input type="email" class="form-control" id="contactEmail" placeholder="Enter email">
              </div>
              <div class="form-group">
                  <label for="contactName">Name</label>
                  <input type="text" class="form-control" id="contactName" placeholder="Name">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
          </form>
      </div>
    </div>

  <?php include '../includes/incbottom.inc';?>

</body>
</html>
