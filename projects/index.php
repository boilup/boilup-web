<!DOCTYPE htm
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>boilup.ca</title>

    <!-- Bootstrap -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/starter-template.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <?php include('../menu.inc');?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container">

<h3>This page just gives a few examples on my work with PHP, etc...</h3>
<p>First up is a quick mileage page for my motorbike. Basically just processes some raw info that I pass in via email and inserts into a DB, then calculates my gas mileage, etc... All in all, it just shows that my 30+ year old vintage Yamaha is currenly a pig on gas!</p>
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
echo "<h2>This is just a page to track mileage on my vehicles.</h2>";
echo "All done automated via email submittion + php + mysql"; 
echo "<br><br>"; 
echo '<div class="panel panel-primary">';
echo "<table class='table'>\n";
echo "<div class='panel-heading'>1981 XJ750RL fill up tracking (beta).</div>";
echo "<tr><td>Date</td><td>Litres</td><td>Distance in Km</td><td>Cost</td><td>Litres Per 100K</td><td>MPG</td></tr>";
echo "</div>";
while ($line = mysql_fetch_array($RESULT, MYSQL_ASSOC)) {
    echo "\t<tr bgcolor='$BGCOLOR' >\n";
    foreach ($line as $col_value) {
        
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
    switch ($BGCOLOR) {
	case 'D8BFD8':
		$BGCOLOR='DEB887';
		break;
        case 'DEB887':
		$BGCOLOR='D8BFD8';
		break;
    }
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

