<?php

//---------------- Controllers ----------------//

function viewContacts($contacts)
{
    $contactsTable = formatContacts($contacts);
    alert($contactsTable);
}
function newContact(&$contacts)
{
//    var_dump('new contact',$contacts);
    $name = inputGet('name');
    $number = inputGet('number');
    $matches = searchContact($contacts, $name);
    if (count($matches) > 0) {
        $message = "There's already a contact named $name. Do you want to overwrite it? (y/n)";
        if (confirm($message)) {
            deleteContacts($contacts, $name);
        } else {
            newContact($contacts);
        }
    }
    addContact($contacts, $name, $number);
    alert('Contact saved successfully!');
}
function findContact($contacts)
{
    $name = inputGet('search-name');
    $matches = searchContact($contacts, $name);
    return $matches;
}
function deleteContact(&$contacts)
{
    $name = inputGet('name');
    deleteContacts($contacts, $name);
}