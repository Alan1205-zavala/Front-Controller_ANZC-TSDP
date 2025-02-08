<?php

function render()
{
    $about = getAbout();
    include_once("views/about.php");
}

function getAbout()
{
    $about = "<a href='?page=home' class='btn btn-primary'>Inicio</a>
              <a href='?page=contact' class='btn btn-success'>Contacto</a>";
    return $about;
}
