<?php
/**
 * Created by PhpStorm.
 * User: whiteco
 * Date: 9/10/2015
 * Time: 8:02 PM
 */
include('../php/record.php');

$newRec=new record();
$postArt=$_POST["artistName"];
$postRec=$_POST["recordName"];

$result=$newRec->save_new($postArt,$postRec);
echo "<pre>". $result . "</pre>";



?>