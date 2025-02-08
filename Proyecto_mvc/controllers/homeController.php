<?php

function render()
{
    $home = getHome();
    include_once("views/home.php");
}

function getHome()
{
    $home = "<a href='?page=about' class='btn btn-info'>Acerca de</a>
             <a href='?page=contact' class='btn btn-success'>Contacto</a>";
    return $home;
}
