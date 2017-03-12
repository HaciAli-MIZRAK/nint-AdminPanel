<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * Nintcp_Model default Class
 * @author Hacı Ali MIZRAK
 */

class Nintcp_Model extends CI_Model
{
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
    } // end __construct()
    
    public function index()
    {
        
    } // end index()
    
    public function NintcpSubPages_Model()
    {
        $NintcpSubPages = $this->db->select('*')
                                   ->from('adminmenu')
                                   ->get()
                                   ->result();
        if($NintcpSubPages):
            return $NintcpSubPages;
        endif;
    }
    
} // end class Nint_Model extends CI_Model
