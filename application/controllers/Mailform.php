<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * eMailfrom Class
 * @author Hacı Ali MIZRAK
 */


class Mailform extends Public_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    } // end __construct()
    
    public function index()
    {
        
    } // end index()
    
    public function webSiteContactForm()
    {
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'eMail Gönderdi' ));
        if($this->input->post() == TRUE):
            echo    '<div class="kp-alert-box kp-success">
                        <header>
                            <i class="icon-ok icon-2x"></i>
                            <label>Success</label>
                        </header>
                        <p>' . _nint( 'Mesajınız tarafımıza ulaşmıştır en kısa sürede size dönüş yapılacaktır.' ) . '</p>
                    </div><!--kp-success-->';
        endif;
    } // end webSiteContactForm()
}
