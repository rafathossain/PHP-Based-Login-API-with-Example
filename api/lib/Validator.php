<?php

function isEmailValid($email){
    $value = strip_tags(trim($email));
    $value = htmlentities(trim($email), ENT_NOQUOTES);
    if(preg_match('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/', $value)){
        if($email == $value){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function isPasswordValid($password){
    $modified = strip_tags(trim($password));
    $modified = htmlentities(trim($password), ENT_NOQUOTES);
    if($modified == $password){
        return true;
    } else{
        return false;
    }
}

?>