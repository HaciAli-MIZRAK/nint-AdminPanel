<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * Nint default Class
 * @author Hacı Ali MIZRAK
 */

class Nint extends Public_Controller
{
    
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
        $this->data = $this->session->userdata;
        $this->load->model('MenuGlobal_Model');
        $this->load->model('Loadercp_Model');
        $this->data['MainMenu']         = $this->MenuGlobal_Model->MainMenus_Model();
        $this->data['webSiteOptions']   = $this->Loadercp_Model->getGeneralSettingsL_Model();
        $this->data['pageShow']         = $this->Loadercp_Model->getPagesShowL_Model( $this->uri->segment(1,0) );
        $this->data['urlTitle']         = $this->MenuGlobal_Model->mainContentHeader_Model( $this->uri->segment(1,0) );
        $this->data['sliderShow']       = $this->Loadercp_Model->getSlidersShowL_Model();
        $this->data['blogLists']        = $this->BlogsLists();
        /* Site Yönetici Tarafından Kapatılmış ise Bu kısım görünmeyecek */
        if(getOptionsParser( $this->data['webSiteOptions'], '_sitestatus' ) == 'on'):
            $this->load->view('nintweb/' . getOptionsParser( $this->data['webSiteOptions'], '_websitetheme' ) . '/header', $this->data);
            $this->load->view('nintweb/' . getOptionsParser( $this->data['webSiteOptions'], '_websitetheme' ) . '/header-top');
        endif;
        /* Kullanıcı giriş yapmamış ise username değeri Ziyaretçi olarak atanacak. */
        if($this->session->userdata('login') == FALSE):
            if($this->agent->is_robot()):
                $this->session->set_userdata('username', $this->agent->robot());
            else:
                $this->session->set_userdata('username', 'Ziyaretçi');
            endif;
        endif;
    } // end __construct()
    
    public function index()
    {
        if(getOptionsParser( $this->data['webSiteOptions'], '_sitestatus' ) == 'on'):
            if(empty($this->uri->segment(1,0))):
                $this->load->view('nintweb/' . getOptionsParser( $this->data['webSiteOptions'], '_websitetheme' ) . '/index', $this->data);
                /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
                $this->session->set_userdata('pages', _nint( 'AnaSayfa' ));
                /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
                $this->session->set_userdata('platform', $this->agent->platform());
                /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
                $this->session->set_userdata('browser', $this->agent->browser());
            else:  
                if(getMetaParser( $this->data['pageShow']->PMT, 1 ) == 'default'):
                    $this->load->view('nintweb/' . getOptionsParser( $this->data['webSiteOptions'], '_websitetheme' ) . '/pages', $this->data);
                    /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
                    $this->session->set_userdata('pages', $this->data['pageShow']->postitle);
                    /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
                    $this->session->set_userdata('platform', $this->agent->platform());
                    /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
                    $this->session->set_userdata('browser', $this->agent->browser());
                else:
                    $this->load->view('template/' . getMetaParser( $this->data['pageShow']->PMT, 1 ), $this->data);
                    /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
                    $this->session->set_userdata('pages', $this->data['pageShow']->postitle);
                    /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
                    $this->session->set_userdata('platform', $this->agent->platform());
                    /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
                    $this->session->set_userdata('browser', $this->agent->browser());
                endif;
            endif;
            $this->load->view('nintweb/' . getOptionsParser( $this->data['webSiteOptions'], '_websitetheme' ) . '/footer-top');
            $this->load->view('nintweb/' . getOptionsParser( $this->data['webSiteOptions'], '_websitetheme' ) . '/footer');
        else:
            redirect(site_url('login/login'));
        endif;
    } // end index()
    
    /**
     * Blog Sayfası için ilk lists panel
     * @return type
     */
    public function BlogsLists()
    {
        /* Sayfalama Alanı */
        $this->data['Pagination'] = $this->Loadercp_Model->getPaginationL_Model( 'posts', 'blogs' );
        $PaginaTion = array(
            'base_url'      => base_url($this->uri->segment(1,0)),
            'per_page'      => 15,
            'total_rows'    => $this->data['Pagination'],
            'first_link'    => '',
            'last_link'     => ''
        );
        
        $BlogsTemp = array(
            'NextText'      => _nint( 'Sonraki' ),
            'aClassNext'    => ' class="next-button kopa-additional-button clearfix"',
            'aClassBack'    => ' class="back-button kopa-additional-button clearfix"',
        );
        $this->pagination->initialize($PaginaTion);
        $this->data['blogsLink'] = $this->pagination->create_links();
        $this->data['blogsLists'] = $this->Loadercp_Model->getBlogsShowL_Model( $PaginaTion['per_page'], $this->uri->segment(2,0) ); 
        return $this->data;
    } // end BlogsLists()
    
    /**
     * Blog sayfası için alt sayfalar
     */
    public function Blog()
    {
        /* Sayfalama Alanı */
        $this->data['Pagination'] = $this->Loadercp_Model->getPaginationL_Model( 'posts', 'blogs' );
        $PaginaTion = array(
            'base_url'      => base_url($this->uri->segment(1,0)),
            'per_page'      => 2,
            'total_rows'    => $this->data['Pagination'],
            'first_link'    => '',
            'last_link'     => ''
        );
        
        $BlogsTemp = array(
            'NextText'      => _nint( 'Sonraki' ),
            'aClassNext'    => ' class="next-button kopa-additional-button clearfix"',
            'aClassBack'    => ' class="back-button kopa-additional-button clearfix"',
        );
        $this->pagination->initialize($PaginaTion);
        $this->data['blogsLink'] = $this->pagination->create_links();
        $this->data['blogsLists'] = $this->Loadercp_Model->getBlogsShowL_Model( $PaginaTion['per_page'], $this->uri->segment(2,0) ); 
        $this->load->view('nintweb/' . getOptionsParser( $this->data['webSiteOptions'], '_websitetheme' ) . '/blog', $this->data);
        $this->load->view('nintweb/' . getOptionsParser( $this->data['webSiteOptions'], '_websitetheme' ) . '/footer-top');
        $this->load->view('nintweb/' . getOptionsParser( $this->data['webSiteOptions'], '_websitetheme' ) . '/footer');
    } // end Blog()

} // end class Nint extends Public_Controller
