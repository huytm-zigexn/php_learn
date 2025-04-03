<?php

function checked($needle, $haystack) 
{
    if($haystack)
    {
        return in_array($needle, $haystack) ? 'checked' : '';
    }

    return '';
}

function selected($needle, $haystack) 
{
    if($haystack)
    {
        return in_array($needle, $haystack) ? 'selected' : '';
    }

    return '';
}