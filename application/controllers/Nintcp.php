<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * Nintcp Administrator Class
 * @author Hacı Ali MIZRAK
 */

class Nintcp extends Admin_Controller
{
    /* Sabit değişkenler */
    public $data = array();
    
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
        $this->data = $this->session->userdata;
        $this->load->model('MenuGlobal_Model');
        $this->load->model('Loadercp_Model');
        $this->data['AdminMenu']        = $this->MenuGlobal_Model->AdminMenus_Model();
        $this->data['webSiteOptions']   = $this->Loadercp_Model->getGeneralSettingsL_Model();
        $this->data['urlTitle']         = $this->MenuGlobal_Model->ContentHeader_Model( $this->uri->segment(2,0) );
        $this->load->view('admincp/header', $this->data);
        $this->load->view('admincp/header-top');
        $this->load->view('admincp/sidebar');
    } // end __construct()
    
    /**
     * Yönetim paneli için index sayfası
     */
    public function index()
    {
        $this->load->view('admincp/index');
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Admin Panel');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end index()
    
################################################################################
######################### SLIDERS OPTIONS ######################################
################################################################################
    
    /**
     * Slider Listesini Çekiyoruz.
     */
    public function AllSliders()
    {
        /* Sayfalama Alanı */
        $this->data['Pagination'] = $this->Loadercp_Model->getPaginationL_Model( 'posts', 'sliders' );
        $PaginaTion = array(
            'base_url'      => base_url($this->uri->segment(1,0) . '/' . $this->uri->segment(2,0)),
            'per_page'      => 15,
            'total_rows'    => $this->data['Pagination'],
            'first_link'    => '',
            'last_link'     => ''
        );
        $this->pagination->initialize($PaginaTion);
        $this->data['slidersLink'] = $this->pagination->create_links();
        $this->data['slidersLists'] = $this->Loadercp_Model->getSlidersListsL_Model( $PaginaTion['per_page'], $this->uri->segment(3,0) );        
        $this->load->view('admincp/includes/sliders/sliders-alls', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Tüm Sliderler');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end AllSliders()
    
    /**
     * Yeni Slider Ekliyoruz
     */
    public function AddSliders()
    {
        $this->data['Success']       = $this->session->flashdata('Success');
        $this->data['Danger']        = $this->session->flashdata('Danger');
        $this->data['LanguageLists'] = $this->Loadercp_Model->getLanguageListsL_Model( $this->LanguageLists() );
        $this->load->view('admincp/includes/sliders/sliders-adds', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Yeni Slider Ekle');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end AllSliders()
    
    /**
     * mevcut Slideri Düzenliyoruz.
     */
    public function EditSliders()
    {
        if($this->uri->segment(3,0)):
            $this->data['Success']       = $this->session->flashdata('Success');
            $this->data['Danger']        = $this->session->flashdata('Danger');
            $this->data['LanguageLists'] = $this->Loadercp_Model->getLanguageListsL_Model( $this->LanguageLists() );
            $this->data['EditSlidersLists'] = $this->Loadercp_Model->EditSlidersListsL_Model( $this->uri->segment(3,0) );
            $this->load->view('admincp/includes/sliders/sliders-edits', $this->data);
            $this->load->view('admincp/footer-top');
            $this->load->view('admincp/footer');
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', 'Slider Düzenle');
            /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
            $this->session->set_userdata('platform', $this->agent->platform());
            /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
            $this->session->set_userdata('browser', $this->agent->browser());
        else:
            redirect($this->agent->referrer());
        endif;
    } // end EditSliders()
    
################################################################################
######################### PAGES OPTIONS ########################################
################################################################################
    
    /**
     * Sayfalar Listesini Çekiyoruz.
     */
    public function AllPages()
    {
        /* Sayfalama Alanı */
        $this->data['Pagination'] = $this->Loadercp_Model->getPaginationL_Model( 'posts', 'pages' );
        $PaginaTion = array(
            'base_url'      => base_url($this->uri->segment(1,0) . '/' . $this->uri->segment(2,0)),
            'per_page'      => 15,
            'total_rows'    => $this->data['Pagination'],
            'first_link'    => '',
            'last_link'     => ''
        );
        $this->pagination->initialize($PaginaTion);
        $this->data['pagesLink'] = $this->pagination->create_links();
        $this->data['pagesLists'] = $this->Loadercp_Model->getPagesListsL_Model( $PaginaTion['per_page'], $this->uri->segment(3,0) );        
        $this->load->view('admincp/includes/pages/pages-alls', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Tüm Sayfalar');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end AllPages()
    
    /**
     * Yeni Sayfa Ekliyoruz
     */
    public function AddPages()
    {
        $this->data['Success']       = $this->session->flashdata('Success');
        $this->data['Danger']        = $this->session->flashdata('Danger');
        $this->data['TemplateLists'] = $this->TemplatesLists();
        $this->data['LanguageLists'] = $this->Loadercp_Model->getLanguageListsL_Model( $this->LanguageLists() );
        $this->load->view('admincp/includes/pages/pages-adds', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Yeni Sayfa Ekle');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end AddPages()
    
    /**
     * mevcut Sayfalar Düzenliyoruz.
     */
    public function EditPages()
    {
        if($this->uri->segment(3,0)):
            $this->data['Success']       = $this->session->flashdata('Success');
            $this->data['Danger']        = $this->session->flashdata('Danger');
            $this->data['TemplateLists'] = $this->TemplatesLists();
            $this->data['LanguageLists'] = $this->Loadercp_Model->getLanguageListsL_Model( $this->LanguageLists() );
            $this->data['EditPagesLists'] = $this->Loadercp_Model->EditPagesListsL_Model( $this->uri->segment(3,0) );
            $this->load->view('admincp/includes/pages/pages-edits', $this->data);
            $this->load->view('admincp/footer-top');
            $this->load->view('admincp/footer');
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', 'Sayfayı Düzenle');
            /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
            $this->session->set_userdata('platform', $this->agent->platform());
            /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
            $this->session->set_userdata('browser', $this->agent->browser());
        else:
            redirect($this->agent->referrer());
        endif;
    } // end EditPages()
    
################################################################################
######################### BLOGS OPTIONS ########################################
################################################################################
    
    /**
     * Bloglar Listesini Çekiyoruz.
     */
    public function AllBlogs()
    {
        /* Sayfalama Alanı */
        $this->data['Pagination'] = $this->Loadercp_Model->getPaginationL_Model( 'posts', 'blogs' );
        $PaginaTion = array(
            'base_url'      => base_url($this->uri->segment(1,0) . '/' . $this->uri->segment(2,0)),
            'per_page'      => 15,
            'total_rows'    => $this->data['Pagination'],
            'first_link'    => '',
            'last_link'     => ''
        );
        $this->pagination->initialize($PaginaTion);
        $this->data['blogsLink'] = $this->pagination->create_links();
        $this->data['blogsLists'] = $this->Loadercp_Model->getBlogsListsL_Model( $PaginaTion['per_page'], $this->uri->segment(3,0) );        
        $this->load->view('admincp/includes/blogs/blogs-alls', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Tüm Bloglar');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end AllBlogs()
    
    /**
     * Yeni Blog Ekliyoruz
     */
    public function AddBlogs()
    {
        $this->data['Success']       = $this->session->flashdata('Success');
        $this->data['Danger']        = $this->session->flashdata('Danger');
        $this->data['LanguageLists'] = $this->Loadercp_Model->getLanguageListsL_Model( $this->LanguageLists() );
        $this->load->view('admincp/includes/blogs/blogs-adds', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Yeni Blog Ekle');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end AddBlogs()
    
    /**
     * mevcut Sayfalar Düzenliyoruz.
     */
    public function EditBlogs()
    {
        if($this->uri->segment(3,0)):
            $this->data['Success']       = $this->session->flashdata('Success');
            $this->data['Danger']        = $this->session->flashdata('Danger');
            $this->data['LanguageLists'] = $this->Loadercp_Model->getLanguageListsL_Model( $this->LanguageLists() );
            $this->data['EditBlogsLists'] = $this->Loadercp_Model->EditBlogsListsL_Model( $this->uri->segment(3,0) );
            $this->load->view('admincp/includes/blogs/blogs-edits', $this->data);
            $this->load->view('admincp/footer-top');
            $this->load->view('admincp/footer');
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', 'Blogu Düzenle');
            /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
            $this->session->set_userdata('platform', $this->agent->platform());
            /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
            $this->session->set_userdata('browser', $this->agent->browser());
        else:
            redirect($this->agent->referrer());
        endif;
    } // end EditBlogs()

################################################################################
######################### CAGEORYS OPTIONS #####################################
################################################################################
    
    /**
     * Category Listesini Çekiyoruz.
     */
    public function Categorys()
    {
        $this->data['CategorySelectShow']   = $this->Loadercp_Model->getCategorySelectShowL_Model();
        $this->data['CategoryTableShow']    = $this->Loadercp_Model->getCategoryTableShowL_Model();
        $this->data['Success']              = $this->session->flashdata('Success');
        $this->data['Danger']               = $this->session->flashdata('Danger');
        $this->load->view('admincp/includes/categorys/categorys', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Categoryler');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end Categorys()
    
    /**
     * mevcut Categorys Düzenliyoruz.
     */
    public function EditCategorys()
    {
        if($this->uri->segment(3,0)):
            $this->data['Success']              = $this->session->flashdata('Success');
            $this->data['Danger']               = $this->session->flashdata('Danger');
            $this->data['EditCategorysLists']   = $this->Loadercp_Model->EditCategorysListsL_Model( $this->uri->segment(3,0) );
            $this->load->view('admincp/includes/categorys/categorys-edits', $this->data);
            $this->load->view('admincp/footer-top');
            $this->load->view('admincp/footer');
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', 'Kategori Düzenle');
            /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
            $this->session->set_userdata('platform', $this->agent->platform());
            /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
            $this->session->set_userdata('browser', $this->agent->browser());
        else:
            redirect($this->agent->referrer());
        endif;
    } // end EditCategorys()

    
################################################################################
######################### MESSAGES SETTINGS OPTIONS ############################
################################################################################

/******************************************************************************/
/*********************** MailBox Setting **************************************/
/******************************************************************************/
    
    /**
     * php imap bağlantı function
     */
    public function eMailConnect()
    {
        try {
            /* Dinamik Bağlantı ayaralarını helper yardımı ile options tablosundan çekiyoruz. */
            if (function_exists('imap_open')): // imap_open function mevcut mu kontrol ediyoruz.
                $webSiteOptions = $this->Loadercp_Model->getGeneralSettingsL_Model();
                $config = array(
                    'host'     => getOptionsParser( $webSiteOptions, '_mailboxaddress' ),
                    'encrypto' => getOptionsParser( $webSiteOptions, '_mailboxencrypto' ),
                    'user'     => getOptionsParser( $webSiteOptions, '_mailboxusers' ),
                    'pass'     => getOptionsParser( $webSiteOptions, '_mailboxpassword' )
                );
                if($this->imap->imap_connect($config)):
                    return TRUE;
                else:
                    return FALSE;
                endif;
            endif;
        } catch (Exception $ex) {
            
        }
    } // end eMailConnect()
    
    /**
     * imap emailbox function
     */
    public function eMailBox()
    {
        if($this->eMailConnect()):
            if($this->imap->get_folders()):
                $mailBoxFoldersReverse = array_reverse($this->imap->get_folders());
                for($i = 0;$i < count($mailBoxFoldersReverse);$i++):
                    $Part1[$i] = explode('.', $mailBoxFoldersReverse[$i]);
                endfor;
                $this->data['mailBoxfoldersLists']  = $Part1;
                $this->data['mailBoxFoldersURI']    = $mailBoxFoldersReverse;
                $this->data['mailBoxCounts']        = $this->eMailCounts( $mailBoxFoldersReverse );
                $this->data['mailBoxunReadCount']   = $this->eMailunReadCount( $mailBoxFoldersReverse );
                $this->data['mailBoxTotalCount']    = $this->eMailTotalCount();
                $this->data['mailBoxMessages']      = $this->eMailGetMessages( $this->uri->segment(3,0) );
                $this->data['mailBoxMenu']          = $this->load->view('admincp/includes/mailbox/mail-menu', $this->data, TRUE);
                if($this->uri->segment(4,0) === 'mail-read'):
                    $this->eMailReadMessage();
                else:
                    $this->load->view('admincp/includes/mailbox/mail-box', $this->data);  
                endif;
            else:
                $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                $this->data['Danger']       = $this->session->flashdata('Danger');
                $this->data['getOptions']   = $this->Loadercp_Model->getGeneralSettingsL_Model();
                $this->load->view('admincp/includes/mailbox/mailbox-settings', $this->data);
            endif;
        else:
            $this->load->view('admincp/includes/mailbox/mailbox-settings');
        endif;
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
    } // end eMailBox()
    
    /**
     * imap messages okuma paneli
     */
    public function eMailReadMessage()
    {
        $this->imap->select_folder($this->uri->segment(3,0));
        $this->data['getMessageRead'] = $this->imap->get_message( $this->uri->segment(5,0), TRUE);
        
        $this->load->view('admincp/includes/mailbox/mail-read', $this->data);
    } // end eMailReadMessage()

/*============================================================================*/
/*=========================== Assistant function =============================*/
/*============================================================================*/
    
    /**
     * imap klasöre göre mesaj sayısı
     * @param type $parametre
     * @return type
     */
    private function eMailCounts( $parametre )
    {
        for($i = 0;$i < count($parametre);$i++):
            $this->imap->select_folder($parametre[$i]);
            $Count[] = $this->imap->count_messages();  
        endfor;
        return $Count;
    } // end eMailCounts( $parametre )
    
    /**
     * imap okunmamış message sayısı
     * @param type $parametre
     * @return type
     */
    private function eMailunReadCount( $parametre )
    {
        for($i = 0;$i < count($parametre);$i++):
            $this->imap->select_folder($parametre[$i]);
            $Count[] = $this->imap->count_unread_messages();  
        endfor;
        return $Count;
    } // end eMailunReadCount( $parametre )
    
    /**
     * imap toplam messages sayısı
     * @return type
     */
    private function eMailTotalCount()
    {
        for($i = 0;$i < count($this->imap->get_folders());$i++):
            $this->imap->select_folder($this->imap->get_folders()[$i]);
            $Total[] = $this->imap->count_messages();
        endfor;
        return array_sum( $Total );
    } // end eMailTotalCount()
    
    /**
     * imap ile mesaj hariç diğer detaylar
     * @param type $parametre
     * @return type
     */
    private function eMailGetMessages( $parametre )
    {
        $this->imap->select_folder( $parametre );
        return array_reverse( $this->imap->get_messages( $this->imap->count_messages() ) );
    } // end eMailGetMessages( $parametre )
    
################################################################################
######################### USERS SETTINGS OPTIONS ###############################
################################################################################
    
    /**
     * Kullanıcıların Listesini çekiyoruz.
     */
    public function AllUsers()
    {
        /* Sayfalama Alanı */
        $this->data['Pagination'] = $this->Loadercp_Model->getUserPaginationL_Model( 'users' );
        $PaginaTion = array(
            'base_url'      => base_url($this->uri->segment(1,0) . '/' . $this->uri->segment(2,0)),
            'per_page'      => 15,
            'total_rows'    => $this->data['Pagination'],
            'first_link'    => '',
            'last_link'     => ''
        );
        $this->pagination->initialize($PaginaTion);
        $this->data['usersLink']        = $this->pagination->create_links();
        $this->data['usersLists']       = $this->Loadercp_Model->getUsersListsL_Model( $PaginaTion['per_page'], $this->uri->segment(3,0) );  
        $this->data['Danger']           = $this->session->flashdata('Danger');
        $this->load->view('admincp/includes/users/users-alls', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Tüm Kullanıcılar');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end AllUsers()
    
    /**
     * yeni Kullanıcı ekliyoruz.
     */
    public function AddUsers()
    {
        $this->data['Success']       = $this->session->flashdata('Success');
        $this->data['Danger']        = $this->session->flashdata('Danger');
        $this->data['userShowLists'] = $this->Loadercp_Model->getUsersShowListsL_Model();
        $this->load->view('admincp/includes/users/users-adds', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Yeni Kullanıcı Ekle');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end AddUsers()
    
    /**
     * Mevcut kullanıcıyı düzenliyor.
     */
    public function EditUsers()
    {
        if($this->uri->segment(3,0)):
            $this->data['Success']       = $this->session->flashdata('Success');
            $this->data['Danger']        = $this->session->flashdata('Danger');
            $this->data['userShowLists'] = $this->Loadercp_Model->getUsersShowListsL_Model();
            $this->data['Edituser']      = $this->Loadercp_Model->EditUsersListsL_Model( $this->uri->segment(3,0) );
            $this->load->view('admincp/includes/users/users-edits', $this->data);
            $this->load->view('admincp/footer-top');
            $this->load->view('admincp/footer');
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', 'Kullanıcıyı Düzenle');
            /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
            $this->session->set_userdata('platform', $this->agent->platform());
            /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
            $this->session->set_userdata('browser', $this->agent->browser());
        else:
            redirect($this->agent->referrer());
        endif;
    } // end EditUsers()
    
/******************************************************************************/
/*********************** Users Roles Setting **********************************/
/******************************************************************************/
    
    /**
     * kullanıcı için özel roles paneli
     */
    public function useRolesPages()
    {
        if($this->uri->segment(3,0)):
            $this->data['getUserInfo']           = $this->Loadercp_Model->getuserShowLists_Model( $this->uri->segment(3,0) );
            $this->data['AdminMenuLists']        = $this->Loadercp_Model->getRolesAdminMenuListsL_Model( $this->uri->segment(3,0) );
            $this->data['userRolesPagesShow']    = $this->Loadercp_Model->getuserRolesPagesShowL_Model( $this->uri->segment(3,0) );
            $this->load->view('admincp/includes/users/users-roles', $this->data);
            $this->load->view('admincp/footer-top');
            $this->load->view('admincp/footer');
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', 'Kullanıcı Yetkisi Düzenle');
            /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
            $this->session->set_userdata('platform', $this->agent->platform());
            /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
            $this->session->set_userdata('browser', $this->agent->browser());
        endif;
    } // end useRolesPages()

################################################################################
######################### GENERAL SETTINGS OPTIONS #############################
################################################################################    
    /**
     * Site Genel Ayarları için yapılandırılacak olan alan.
     * Bu alanın html dosyasıda yeniden düzenlenmeli.
     */
    public function GeneralSettings()
    {
        $this->data['getOptions']       = $this->Loadercp_Model->getGeneralSettingsL_Model();
        $this->data['getWebSiteTheme']  = $this->WebSiteTemplate();
        $this->load->view('admincp/includes/generals/general-settings', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Genel Ayarlar');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end GeneralSettings()
    
    /**
     * Admin Menu Listesini Düzenleme Sıralama ve Yenisini ekleme paneli
     */
    public function AdminsMenus()
    {
        $this->data['AdminMenuLists'] = $this->Loadercp_Model->getAdminMenuListsL_Model();
        $this->data['AMenuIconLists'] = $this->Loadercp_Model->getAdminMenuIconListsL_Model();
        $this->load->view('admincp/includes/generals/admins-menus', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Admin Menü Ayarları');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end AdminsMenus()
    
    /**
     * Site Sosyal Medya linkleri eklemek için yapılandırılacak olan alan.
     */
    public function SosialMediaLinks()
    {
        $this->data['getOptions']       = $this->Loadercp_Model->getGeneralSettingsL_Model();
        $this->data['AMenuIconLists']   = $this->Loadercp_Model->getAdminMenuIconListsL_Model();
        $this->load->view('admincp/includes/generals/sosialmedia-links', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Sosyal Medya Linkleri');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end SosialMediaLinks()
    
    public function FacebookSettings()
    {
        $this->data['getOptions']       = $this->Loadercp_Model->getGeneralSettingsL_Model();
        $this->load->view('admincp/includes/generals/facebook-settings', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'Facebook Ayarları');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    }
    
    /**
     * Site Sosyal Medya linkleri eklemek için yapılandırılacak olan alan.
     */
    public function MailBoxSettings()
    {
        $this->data['getOptions']       = $this->Loadercp_Model->getGeneralSettingsL_Model();
        $this->load->view('admincp/includes/mailbox/mailbox-settings', $this->data);
        $this->load->view('admincp/footer-top');
        $this->load->view('admincp/footer');
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', 'MailBox Ayarları');
        /* Log Sisteminde Kullanıcının platformunu takip ediyoruz */
        $this->session->set_userdata('platform', $this->agent->platform());
        /* Log Sisteminde Kullanıcının browserini takip ediyoruz */
        $this->session->set_userdata('browser', $this->agent->browser());
    } // end SosialMediaLinks()  

} // end class Nintcp extends Admin_Controller
