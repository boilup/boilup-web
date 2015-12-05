<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('../classes/mailerClass.php'); 



if(isset($_POST["imabot"])) {
    //this was filled out by an imposter, bail out
    $retVal='invalid form values'; 
    echo(json_encode($retVal));
}

else {
    //we can get down to the mailing...
    $mailInstance=new mailerClass(); 
    //to, subject, message...
    $to='marcel.white@gmail.com'; 
    $subject='boilup form inquiry'; 
    //error_log($subject); 
    $message=$_POST['name'] . " at phone " . $_POST['phone'] . ' and email ' . $_POST['email'] . " contacted you. here is the message: " . $_POST['contact']; 
    //error_log($message);
    $mailSend=$mailInstance->sendEmail($to, $subject, $message);
    echo(json_encode($mailSend)); 
}

