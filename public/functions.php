<?php
//---------inputHas key returns true or false based on if the key is present----------//
function inputHas($key)
{
    if (isset($_REQUEST[$key])) {
        return true;
    } else {
        return false;
    }

//--------inputGet key returns value indicated by the key, and null if key is not set---------//
}

function inputGet($key)
{
    if (isset($_REQUEST[$key])) {
        return $_REQUEST[$key];
    } else {
        return null;
    }
}

//--------escape returns the input as an escaped string---------//

function escape($input)
{
   return htmlspecialchars(strip_tags($input));
}