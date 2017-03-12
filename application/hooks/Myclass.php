<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MyClass 
{
    private $CI;
    private static $token_name = 'li_token';
    private static $token;
    
    public function __construct()
    {
        $this->CI =& get_instance();
    }
    
    public function Myfunction()
    {
        //self::$token = bin2hex(openssl_random_pseudo_bytes(16));
        
        $output = $this->CI->output->get_output();
    
        // Inject into form
        $output = preg_replace('/(<(form|FORM)[^>]*(method|METHOD)="(post|POST)"[^>]*>)/',
                           '$0<input type="hidden" name="' . self::$token_name . '" value="' . self::$token . '">', 
                           $output);
    
        // Inject into <head>
        $output = preg_replace('/(<\/head>)/',
                           '<meta name="csrf-name" content="' . self::$token_name . '">' . "\n" . '<meta name="csrf-token" content="' . self::$token . '">' . "\n" . '$0', 
                           $output);
    
        $this->CI->output->_display($output);
    }
}