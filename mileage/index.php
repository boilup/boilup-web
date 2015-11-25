
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
      <a name='Projects'><h2>Seca Gas mileage tracker</h2></a>


<h3>How are old bikes on fuel, really?.</h3>
<p>Quick application to keep track of fuel mmileage on the bike. It's an american bike so there were a few calculations done on the back end to make this work properly</p>
        <p>How this currently works is as follows:</p>
<div class="row">
<div class="col-md-6 col-md-offset-3">
        <ul class="list-group">
            <li class="list-group-item">go to gas station</li>
            <li class="list-group-item">make not of miles on bike (american xj)</li>
            <li class="list-group-item">fill bike</li>
            <li class="list-group-item">record how many litres it takes to fill</li>
            <li class="list-group-item">send email with info (miles, litres, price to super secret email, with wicked password)</li>
            <li class="list-group-item">enjoy the ride</li>
        </ul>
</div>
    </div>
        <div class="row">
<div class="col-md-6 col-md-offset-3">

        <p>Will be working on a modal form in the near future, but for the time being it was an awesome way to keep track of how my tuning is doing (to improve fuel economy.
        Carbeurated vehicles are a dark art, unlike fuel injected. Pretty much like comparing records to CDs.</p>
</div>
    </div>

<?php
$KILO="1.609344";
$DB="remote_updates";
$DBUSER="entries";
$DBPASS="letmein";
$DBHOST="localhost";
$BGCOLOR="D8BFD8";
$link=mysql_connect("$DBHOST","$DBUSER","$DBPASS") or die('Wahhh cannot currently connect to Database');
mysql_select_db ("$DB") or die("cannot select db $DB");
$output = fopen("/tmp/test.txt", 'a');
$QUERY="select date, litres, distance, cost, per100, mpg from mileages order by date desc";
$RESULT= mysql_query($QUERY) or die('query failed');
echo '<div class="panel panel-primary">';
echo "<table class='table table-striped table-hover table-bordered'>\n";
echo "<div class='panel-heading'>1981 XJ750RL fill up tracking (beta).</div>";
echo "<tr><td>Date</td><td>Litres</td><td>Distance in Km</td><td>Cost</td><td>Litres Per 100K</td><td>MPG</td></tr>";
echo "</div>";
while ($line = mysql_fetch_array($RESULT, MYSQL_ASSOC)) {
    echo "\t<tr  >\n";
    foreach ($line as $col_value) {

        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";

#    print_r ($line);
}
echo "</table>\n";
echo '</div>';

fclose($output);
?>

</div class="container">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../dist/js/bootstrap.min.js"></script>
</body>
</html>

