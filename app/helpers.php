<?php


// user roles constants
const ROLE_USER = '3';
const ROLE_ARTIST = '2';
const ROLE_ADMIN = '1';

function randomString(int $lenth = 6, string $type = NULL)
{

    switch ($type) {
        case 'numeric':
            
            $characters = '0123456789';
            break;
        case 'alpha':
            
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        default:
            
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
    }

    $randstring = '';

    for ($i = 0; $i < $lenth; $i++) {
        
        $randstring = $characters[rand(0, strlen($characters) - 1)];
    }

    return $randstring;
}
