<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mailerClass
 *
 * @author whiteco
 */
class mailerClass {
    //put your code here
    public function sendEmail($to,$subject,$message) {
        if (!mail($to, $subject, $message)) {
            return('there was a problem sending the email');
        }
        else {
            return('the message was successfully sent'); 
        }
        //bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )
    }
            
            

            
            
            
}
