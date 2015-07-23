<?php
/**
 * Created by PhpStorm.
 * User: whiteco
 * Date: 4/26/2015
 * Time: 8:19 PM
 */

include('../pdo/pdomusicdb.php');


$AddInstruments='insert into instruments (type, make, model,acquired) VALUES (:formType, :formmake, :formmodel, :formaquired)';
$AddInstrumentsHandler=$dbh->prepare($AddInstruments);
if($AddInstrumentsHandler->execute(array(':formType'=>$_POST["type"], ':formmake'=>$_POST["make"],':formmodel'=>$_POST["model"],':formaquired'=>$_POST["purchased"]))) {
    echo json_encode($_POST);

}
else {
    echo json_encode("failed");

}
//todo blah blah blah

?>