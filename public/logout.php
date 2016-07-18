<?php

function clearSession()
{
    //clear out the session array
    session_unset();
    //  delete the session data on the server and send the client a new cookie
    session_regenerate_id(true);
}

session_start();

clearSession();

header('Location: login.php');