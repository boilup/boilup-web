<?php
/**
 * Created by PhpStorm.
 * User: whiteco
 * Date: 5/27/2015
 * Time: 11:15 PM
 */
echo '<head>';
include '../includes/bstop.inc';
echo '</head>';
echo "<body>";

class song {
    /*var $id;
    var $name;
    var $artist;
    var $genre;
    var $skill;
    var $instrument_id; */
}


//--here's where we try to fucking get the stupid replacement shit to work.

try {
    $dbh = new PDO('mysql:host=localhost;dbname=music', "music", "tunes",array(PDO::ATTR_PERSISTENT => true));

}catch(PDOException $e){
    echo $e->getMessage();
}
$SongsSelect= "Select * from songs";

$SongsOut = $dbh->prepare($SongsSelect);
$SongsOut->execute();

foreach($SongsOut->fetchAll(PDO::FETCH_CLASS, 'song') as $S) {
    echo "<p>" . $S->name . " Beep </p>";
}




echo "</body>";
?>