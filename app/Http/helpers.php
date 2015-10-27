<?php

function genreCssString($genres)
{
    $classString = '';

    foreach($genres as $genre)
    {
        $classString .= ' ' . $genre->name;
    }

    return $classString;
}