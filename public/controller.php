<?php

require_once 'view.php';

// Controllers
function viewContacts($contacts)
{
    $contactsTable = formatContacts($contacts);
    alert($contactsTable);
}
function newContact(&$contacts)
{
    $name = inputName('Enter a new contact name:');
    $number = inputNumber('Enter phone number');
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
$name = inputName('Enter the name to search:');
$matches = searchContact($contacts, $name);
alert(formatContacts($matches));
}
function deleteContact(&$contacts)
{
$name = prompt('Enter the name of the contact to delete:');
deleteContacts($contacts, $name);
alert('Contacts deleted successfully!');
}
// Front controller
function contactsManager()
{
$menu = <<<MENU
    1. View contacts.
    2. Add a new contact.
    3. Search a contact by name.
    4. Delete an existing contact.
    5. Exit.
    Enter an option (1, 2, 3, 4 or 5):
    MENU;
    do {
    $contacts = loadContacts();
    $option = prompt($menu);
    switch ($option) {
    case 1:
    viewContacts($contacts);
    break;
    case 2:
    newContact($contacts);
    break;
    case 3:
    findContact($contacts);
    break;
    case 4:
    deleteContact($contacts);
    break;
    default:
    alert('See you!');
}
saveContacts($contacts);
} while ($option != 5);
}
contactsManager();