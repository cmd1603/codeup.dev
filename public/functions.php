<?php
//---------inputHas key returns true or false based on if the key is available----------//
function inputHas($key)
{
    return isset($_REQUEST[$key]);
}

//--------inputGet key returns value indicated by the key, and null if key is not set---------//

function inputGet($key)
{
    return $_REQUEST[$key];
}

//--------escape returns the input as a safely escaped string---------//

function escape($input)
{
   return htmlspecialchars(strip_tags($input));
}

