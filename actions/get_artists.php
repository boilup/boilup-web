<?php
/**
 * Created by PhpStorm.
 * User: whiteco
 * Date: 9/10/2015
 * Time: 8:02 PM
 */
include('../php/record.php');
$newDAO=new record();
$artists=$newDAO->getArtists();
echo json_encode($artists);


