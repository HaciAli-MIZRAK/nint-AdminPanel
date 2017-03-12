<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * Login Session Class
 * @author Hacı Ali MIZRAK
 */

class Login extends Public_Controller
{
    /* Sabit Değişkenler */
    public $data;
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->model('Loadercp_Model');
        $this->data['webSiteOptions'] = $this->Loadercp_Model->getGeneralSettingsL_Model();
    } // end __construct()
    
    /**
     * 
     */
    public function index()
    {
    } // end index()
    
    /**
     * Kullanıcı Giriş paneli
     */
    public function Login()
    {
        if($this->session->userdata('login') == TRUE):
            redirect(site_url('nintcp/index'));
            //redirect(base_url());
        else:
            $this->data['Danger'] = $this->session->flashdata('Danger');
            $this->data['LoginURL'] = $this->FacebookLogin();
            $this->load->view('login/login-header', $this->data);
            $this->load->view('login/login');
            $this->load->view('login/login-footer');  
        endif;
        
    } // end Login()
    
    /**
     * Kullanıcı Kontrol function 
     */
    public function ControLogin()
    {
        $this->data['userInfo'] = $this->Login_Model->ControLogin_Model( $this->input->post() );
        if($this->db->affected_rows()):
            $SessionCreate = array(
                'login'         => TRUE,
                'admin'         => in_array($this->data['userInfo']->USERID, $this->config->item('admin_id')) ? -1 : 0,
                'userid'        => $this->data['userInfo']->USERID,
                'username'      => $this->data['userInfo']->username,
                'userstatus'    => $this->data['userInfo']->userstatus,
            );
            $this->session->set_userdata( $SessionCreate );
            redirect($this->agent->referrer());
        else:
            $this->session->set_flashdata('Danger', _nint( 'Bu Kullanıcı Adı Yok' ));
            redirect($this->agent->referrer());
        endif;
    } // end ControLogin()
    
    /**
     * Kullanıcının Facebook hesabı ile giriş yapmasını sağlıyoruz.
     */
    public function FacebookLogin()
    {
        $config = array(
            'appId'         => getOptionsParser( $this->data['webSiteOptions'], '_facebookappid' ),
            'secret'        => getOptionsParser( $this->data['webSiteOptions'], '_facebookappsecret' ),
            'access_token'  => getOptionsParser( $this->data['webSiteOptions'], '_facebooktoken' ),
            'cookie'        => true
        );
        
        $this->load->library('facebook/Facebook', $config);
        
        $FBuser = $this->facebook->getUser();
        if ($FBuser):
            $userProfile = $this->facebook->api('/me?fields=name,email', 'GET');
            $FBRegister = $this->Login_Model->FacebookLogin_Model( $userProfile );
            if($this->db->affected_rows()):
                $SessionCreate = array(
                    'login'         => true,
                    'userid'        => $FBRegister->userid,
                    'fb_userid'     => $userProfile['id'],
                    'username'      => $userProfile['name'],
                    'userstatus'    => 0,
                );
                $this->session->set_userdata( $SessionCreate );
                redirect(base_url());
            endif;
        else:
            $this->data['LoginURL'] = $this->facebook->getLoginUrl(array(
                'scope' => 'email, publish_actions, manage_pages, publish_pages', // kullanıcı mail, kullanıcı yerine paylaşım, kullanıcı hakkında
                'redirect_uri' => base_url('login/facebooklogin')
            ));
            return $this->data['LoginURL'];
        endif;
    } // end FacebookLogin()
    
    /**
     * 
     */
//    public function GooglePlusLogin()
//    {
//        $config = array(
//            'appId'         => '1268633536504214',
//            'secret'        => '372444832091299d15906bc58f232b60',
//            'access_token'  => 'EAASB0MNLIZAYBAFvCKOEEOBcJc1iiLG9z883Q9gDSxCu2vMpSvNpUl1avjKPjYusRgprZAz48ZBwRrd7w3MZA7PDPCCItQMnpIfiOAjFdILcwJqv4lygF4cJTW0Cka1aFvCJjvS9BmhquZC7aL03QYsDWVQ7WFSHUZBSA3HW4gZAAZDZD',
//            'cookie'        => true
//        );
//        
//        $this->load->library('facebook/Facebook', $config);
//        $paylasim = array( // facebook sayfada paylaşım yapabilmek için token burada olmalı ve sayfa id lazım.
//            //'access_token'  => 'EAASB0MNLIZAYBAFvCKOEEOBcJc1iiLG9z883Q9gDSxCu2vMpSvNpUl1avjKPjYusRgprZAz48ZBwRrd7w3MZA7PDPCCItQMnpIfiOAjFdILcwJqv4lygF4cJTW0Cka1aFvCJjvS9BmhquZC7aL03QYsDWVQ7WFSHUZBSA3HW4gZAAZDZD',
//            'picture'=> 'https://domainsorgulamanet-webimhosting.netdna-ssl.com/images/domain-uzantilari/io-domain-uzantisi.png', 
//            'message' => "Nint.io Konu içeriği", 
//            'link' => 'http://localhost/nintio/', 
//            'name' => 'Nint.io Protokol Bağımsız Endüstri 4.0 Platformu', 
//            'caption' => 'Nint.io Konu Başlığı', 
//            'description' => 'Nint.io Konu Açıklaması' 
//	); 
//        $_FBUSERSID = $this->facebook->getUser();
//        if ($_FBUSERSID) {
//            try {
//                $this->facebook->api('/320275774970889/feed/', 'POST', $paylasim);
//            } catch ( FacebookApiException $e ) {
//                print $e->getMessage();
//                $_FBUSERSID = null;
//            }
//        } // birinci if sonu
//    } // end GooglePlusLogin()
    
    /**
     * 
     */
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());        
    } // end logout()
} // end class Control extends Public_Controller
