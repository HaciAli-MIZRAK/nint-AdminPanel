<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * _nint Hepler
 * @author Hacı Ali MIZRAK
 */

function _nint( $message )
{
    if($message)
    {
        return gettext( $message );
    }
}