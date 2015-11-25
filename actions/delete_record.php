<?php
/**
 * Created by PhpStorm.
 * User: whiteco
 * Date: 9/10/2015
 * Time: 8:02 PM
 */
include('../php/record.php');

$newRec=new record();
$idlist=array();
foreach($_POST as $recordid => $value) {
    error_log($recordid);
    $newRec->deleteRecord($recordid);
    //var_dump($idlist);
}

?>