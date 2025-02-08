<?php

function render()
{
    $contact = getContact();
    include_once("views/contact.php");
}

function getContact()
{
    $contact = "<a href='?page=home' class='btn btn-primary'>Inicio</a>
                <a href='?page=about' class='btn btn-info'>Acerca de</a>";
    return $contact;
}
