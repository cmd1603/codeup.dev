<?php

require_once '../Auth.php';
require_once '../Input.php';

function clearSession()
{
    //clear out the session array
//    session_unset();
    Auth::logout();
    //  delete the session data on the server and send the client a new cookie
//    session_regenerate_id(true);


}

session_start();

clearSession();

header('Location: login.php');