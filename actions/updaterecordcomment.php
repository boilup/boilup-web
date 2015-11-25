<?php
/**
 * Created by PhpStorm.
 * User: whiteco
 * Date: 9/15/2015
 * Time: 8:37 PM
 */
include_once('../php/record.php');
$connection=new record();
$recordList=$connection->getAlbums();
echo json_encode($recordList);
