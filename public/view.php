<?php

// View

function formatNumber($number) {
    if (strlen($number) == 7) {
        return substr($number, 0, 3) . '-' . substr($number, 3);
    }
    if (strlen($number) == 10) {
        return substr($number, 0, 3) . '-' . substr($number, 3, 3) . '-' . substr($number, 6);
    }
    return $number;
}
function formatContacts($contacts)
{
    $nameLength = longestNameLength($contacts);
    $phoneLength = longestPhoneNumber($contacts);
    array_unshift($contacts, ['name' => 'Name', 'number' => 'Phone']);
    $table = '';
    foreach ($contacts as $contact) {
        $table .= '| '
            . str_pad($contact['name'], $nameLength) . ' | '
            . str_pad(formatNumber($contact['number']), $phoneLength) . " |\n";
    }
    return $table;
}