<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * Recordscp Kayıt Class
 * @author Hacı Ali MIZRAK
 */

class Recordscp extends Admin_Controller
{
    /* Sabit değişkenler */
    public $data = array();
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Recordscp_Model');
    } // end __construct()
    
    /**
     * 
     */
    public function index()
    {
    } // end index()
    
################################################################################
######################### PAGES SETTINGS OPTIONS ###############################
################################################################################
    /**
     * Yeni Sayfa Eklediğiniz Function
     */
    public function NewPagesAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            if($_FILES['__postsphoto']['size'] > 0):
                if($this->Uploads( './assets/nintweb/pagesphoto/', $this->input->post( 'postitle' ), '__postsphoto' )):
                    $this->ImagesCrops( $this->upload->data( 'full_path' ), $this->upload->data( 'full_path' ), $width, 205 );
                    $PagesAdds = $this->Recordscp_Model->setNewPagesAddsR_Model( $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                    if($PagesAdds):
                        $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                    else:
                        $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                    endif;
                    redirect($this->agent->referrer()); 
                endif;
            else:
                $PagesAdds = $this->Recordscp_Model->setNewPagesAddsR_Model( $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                if($PagesAdds):
                    $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                else:
                    $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                endif;
                redirect($this->agent->referrer());
            endif;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Yeni Sayfa Eklendi' ));
        endif; 
    } // end NewPagesAddsRecordsCP()
    
    /**
     * Mevcut Sayfamızı Düzenlediğiniz Function
     */
    public function EditPagesAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            if($_FILES['__postsphoto']['size'] > 0):
                if($this->Uploads( './assets/nintweb/pagesphoto/', $this->input->post( 'postitle' ), '__postsphoto' )):
                    $this->ImagesCrops( $this->upload->data( 'full_path' ), $this->upload->data( 'full_path' ), $width, 205 );
                    @unlink($this->input->post( '__postphotofullpath' ));
                    $PagesAdds = $this->Recordscp_Model->setEditPagesAddsR_Model( $this->uri->segment(3,0), $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                    if($PagesAdds):
                        $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                    else:
                        $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                    endif;
                    redirect($this->agent->referrer()); 
                endif;
            else:
                $PagesAdds = $this->Recordscp_Model->setEditPagesAddsR_Model( $this->uri->segment(3,0), $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                if($PagesAdds):
                    $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                else:
                    $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                endif;
                redirect($this->agent->referrer()); 
            endif;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Sayfa Düzenledi' ));
        endif; 
    } // end EditPagesAddsRecordsCP()
    
    /**
     * Sayfayı Siliniyoruz Tamamen değil sadece listede silik görünecek.
     */
    public function ClearPagesRecordsCP()
    {
        if($this->uri->segment(3,0)):
            $data = $this->Recordscp_Model->setClearPagesAddsR_Model( $this->uri->segment(3,0) );
            redirect($this->agent->referrer());
        else:
            redirect($this->agent->referrer()); 
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Sayfayı Sildi' ));
    } // end ClearPagesRecordsCP()
    
    /**
     * Sayfayı Siliniyoruz Tamamen değil sadece listede silik görünecek.
     */
    public function ReplyPagesRecordsCP()
    {
        if($this->uri->segment(3,0)):
            $data = $this->Recordscp_Model->setReplyPagesAddsR_Model( $this->uri->segment(3,0) );
            redirect($this->agent->referrer());
        else:
            redirect($this->agent->referrer()); 
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Sayfayı Geri Aldı' ));
    } // end ClearPagesRecordsCP()
    
    /**
     * Bu kısım Pages Lists de bulunan Bootstrap Switch ile sayfa yayınla yayınlama
     * alanımızı kontrol ediyoruz.
     */
    public function NewPagesStatusRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewPagesStatusR_Model( $this->input->post() );
            echo $data;
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Sayfayı Aktif/Pasif Ediyor' ));
    } // end NewPagesStatusRecordsCP()

################################################################################
######################### BLOGS SETTINGS OPTIONS ###############################
################################################################################
    /**
     * Yeni Blog Eklediğiniz Function
     */
    public function NewBlogsAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            if($_FILES['__postsphoto']['size'] > 0):
                if($this->Uploads( './assets/nintweb/blogsphoto/', $this->input->post( 'postitle' ), '__postsphoto' )):
                    $this->ImagesCrops( $this->upload->data( 'full_path' ), $this->upload->data( 'full_path' ), 1920, $height );
                    $BlogsAdds = $this->Recordscp_Model->setNewBlogsAddsR_Model( $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                    if($BlogsAdds):
                        $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                    else:
                        $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                    endif;
                    redirect($this->agent->referrer()); 
                endif;
            else:
                $BlogsAdds = $this->Recordscp_Model->setNewBlogsAddsR_Model( $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                if($BlogsAdds):
                    $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                else:
                    $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                endif;
                redirect($this->agent->referrer());
            endif;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Yeni Blog Eklendi' ));
        endif; 
    } // end NewBlogsAddsRecordsCP()
    
    /**
     * Mevcut Blogu Düzenlediğiniz Function
     */
    public function EditBlogsAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            if($_FILES['__postsphoto']['size'] > 0):
                if($this->Uploads( './assets/nintweb/blogsphoto/', $this->input->post( 'postitle' ), '__postsphoto' )):
                    $this->ImagesCrops( $this->upload->data( 'full_path' ), $this->upload->data( 'full_path' ), 1920, $height );
                    @unlink($this->input->post( '__postphotofullpath' ));
                    $PagesAdds = $this->Recordscp_Model->setEditBlogsAddsR_Model( $this->uri->segment(3,0), $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                    if($PagesAdds):
                        $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                    else:
                        $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                    endif;
                    redirect($this->agent->referrer()); 
                endif;
            else:
                $PagesAdds = $this->Recordscp_Model->setEditBlogsAddsR_Model( $this->uri->segment(3,0), $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                if($PagesAdds):
                    $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                else:
                    $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                endif;
                redirect($this->agent->referrer()); 
            endif;
        endif; 
    } // end EditBlogsAddsRecordsCP()
    
    /**
     * Sayfayı Siliniyoruz Tamamen değil sadece listede silik görünecek.
     */
//    public function ClearPagesRecordsCP()
//    {
//        if($this->uri->segment(3,0)):
//            $data = $this->Recordscp_Model->setClearPagesAddsR_Model( $this->uri->segment(3,0) );
//            redirect($this->agent->referrer());
//        else:
//            redirect($this->agent->referrer()); 
//        endif; 
//    } // end ClearPagesRecordsCP()
    
    /**
     * Sayfayı Siliniyoruz Tamamen değil sadece listede silik görünecek.
     */
//    public function ReplyPagesRecordsCP()
//    {
//        if($this->uri->segment(3,0)):
//            $data = $this->Recordscp_Model->setReplyPagesAddsR_Model( $this->uri->segment(3,0) );
//            redirect($this->agent->referrer());
//        else:
//            redirect($this->agent->referrer()); 
//        endif; 
//    } // end ClearPagesRecordsCP()
    
    /**
     * Bu kısım Blogs Lists de bulunan Bootstrap Switch ile sayfa yayınla yayınlama
     * alanımızı kontrol ediyoruz.
     */
    public function NewBlogsStatusRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewBlogsStatusR_Model( $this->input->post() );
            echo $data;
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Sayfayı Aktif/Pasif Ediyor' ));
    } // end NewBlogsStatusRecordsCP()


################################################################################
######################### SLIDERS SETTINGS OPTIONS #############################
################################################################################
    
    /**
     * Yeni Slider Eklediğiniz Function
     */
    public function NewSlidersAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            if($_FILES['__postsphoto']['size'] > 0):
                if($this->Uploads( './assets/nintweb/slidersphoto/', $this->input->post( 'postitle' ), '__postsphoto' )):
                    $this->ImagesCrops( $this->upload->data( 'full_path' ), $this->upload->data( 'full_path' ), 1920, 743, 'Crops' );
                    $SlidersAdds = $this->Recordscp_Model->setNewSlidersAddsR_Model( $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                    if($SlidersAdds):
                        $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                    else:
                        $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                    endif;
                    redirect($this->agent->referrer()); 
                endif;
            else:
                $SlidersAdds = $this->Recordscp_Model->setNewSlidersAddsR_Model( $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                if($SlidersAdds):
                    $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                else:
                    $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                endif;
                redirect($this->agent->referrer());
            endif;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Slider Ekledi' ));
        endif; 
    } // end NewSlidersAddsRecordsCP()
    
    /**
     * Mevcut Slideri Düzenlediğiniz Function
     */
    public function EditSlidersAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            if($_FILES['__postsphoto']['size'] > 0):
                if($this->Uploads( './assets/nintweb/slidersphoto/', $this->input->post( 'postitle' ), '__postsphoto' )):
                    $this->ImagesCrops( $this->upload->data( 'full_path' ), $this->upload->data( 'full_path' ), 1920, 743, 'Crops' );
                    @unlink($this->input->post( '__postphotofullpath' ));
                    $SlidersAdds = $this->Recordscp_Model->setEditSlidersAddsR_Model( $this->uri->segment(3,0), $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                    if($SlidersAdds):
                        $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                    else:
                        $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                    endif;
                    redirect($this->agent->referrer()); 
                endif;
            else:
                $SlidersAdds = $this->Recordscp_Model->setEditSlidersAddsR_Model( $this->uri->segment(3,0), $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                if($SlidersAdds):
                    $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                else:
                    $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                endif;
                redirect($this->agent->referrer()); 
            endif;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Slider Düzenledi' ));
        endif; 
    } // end EditSlidersAddsRecordsCP()
    
    /**
     * Sayfayı Siliniyoruz Tamamen değil sadece listede silik görünecek.
     */
    public function ClearSlidersRecordsCP()
    {
        if($this->uri->segment(3,0)):
            $data = $this->Recordscp_Model->setClearSlidersAddsR_Model( $this->uri->segment(3,0) );
            redirect($this->agent->referrer());
        else:
            redirect($this->agent->referrer()); 
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Slider Sildi' ));
    } // end ClearPagesRecordsCP()
    
    /**
     * Sayfayı Siliniyoruz Tamamen değil sadece listede silik görünecek.
     */
    public function ReplySlidersRecordsCP()
    {
        if($this->uri->segment(3,0)):
            $data = $this->Recordscp_Model->setReplySlidersAddsR_Model( $this->uri->segment(3,0) );
            redirect($this->agent->referrer());
        else:
            redirect($this->agent->referrer()); 
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Slider Geri Aldı' ));
    } // end ClearPagesRecordsCP()
    
    /**
     * Bu kısım Sliders Lists de bulunan Bootstrap Switch ile Slider yayınla yayınlama
     * alanımızı kontrol ediyoruz.
     */
    public function NewSlidersStatusRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewSlidersStatusR_Model( $this->input->post() );
            echo $data;
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Slider Aktif/Pasif Ediyor' ));
        endif; 
    } // end NewPagesStatusRecordsCP()

################################################################################
######################### CATEGORYS SETTINGS OPTIONS ###########################
################################################################################
    /**
     * Yeni Kategori Eklediğiniz Function
     */
    public function NewCategorysAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            if(!empty($this->input->post('categorytitle'))):
                if($_FILES['categoryphoto']['size'] > 0):
                    if($this->Uploads( './assets/nintweb/categorysphoto/', $this->input->post( 'categorytitle' ), 'categoryphoto' )):
                        $CategorysAdds = $this->Recordscp_Model->setNewCategorysAddsR_Model( $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                        if($CategorysAdds):
                            $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                        else:
                            $this->session->set_flashdata('Danger', _nint( 'Bu Kategori Adı var Farklı Bir Kategori Adı Girin' ));
                        endif;
                        redirect($this->agent->referrer()); 
                    endif;
                else:
                    $CategorysAdds = $this->Recordscp_Model->setNewCategorysAddsR_Model( $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                    if($CategorysAdds):
                        $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                    else:
                        $this->session->set_flashdata('Danger', _nint( 'Bu Kategori Adı var Farklı Bir Kategori Adı Girin' ));
                    endif;
                    redirect($this->agent->referrer());
                endif;
            else:
                $this->session->set_flashdata('Danger', _nint( 'Boş Alan Bıraktınız' ));
                redirect($this->agent->referrer());
            endif;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Kategori Ekledi' ));
        endif; 
    } // end NewPagesAddsRecordsCP()
    
    /**
     * Mevcut Kategori Düzenlediğiniz Function
     */
    public function EditCategorysAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            if($_FILES['categoryphoto']['size'] > 0):
                if($this->Uploads( './assets/nintweb/categorysphoto/', $this->input->post( 'categorytitle' ), 'categoryphoto' )):
                    @unlink($this->input->post( '__postphotofullpath' ));
                    $CategorysAdds = $this->Recordscp_Model->setEditCategorysAddsR_Model( $this->uri->segment(3,0), $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                    if($CategorysAdds):
                        $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                    else:
                        $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                    endif;
                    redirect($this->agent->referrer()); 
                endif;
            else:
                $CategorysAdds = $this->Recordscp_Model->setEditCategorysAddsR_Model( $this->uri->segment(3,0), $this->input->post(), $this->upload->data(), $this->session->userdata('userid') );
                if($CategorysAdds):
                    $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                else:
                    $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
                endif;
                redirect($this->agent->referrer()); 
            endif;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Kategori Düzenledi' ));
        endif; 
    } // end EditCategorysAddsRecordsCP()
    
    /**
     * Kategoriyi Siliniyoruz Tamamen değil sadece listede silik görünecek.
     */
    public function ClearCategorysRecordsCP()
    {
        if($this->uri->segment(3,0)):
            $data = $this->Recordscp_Model->setClearCategorysAddsR_Model( $this->uri->segment(3,0) );
            redirect($this->agent->referrer());
        else:
            redirect($this->agent->referrer()); 
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Kategoriyi Sildi' ));
    } // end ClearCategorysRecordsCP()
    
    /**
     * Kategori Siliniyoruz Tamamen değil sadece listede silik görünecek.
     */
    public function ReplyCategorysRecordsCP()
    {
        if($this->uri->segment(3,0)):
            $data = $this->Recordscp_Model->setReplyCategorysAddsR_Model( $this->uri->segment(3,0) );
            redirect($this->agent->referrer());
        else:
            redirect($this->agent->referrer()); 
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Kategoriyi Geri Aldı' ));
    } // end ReplyCategorysRecordsCP()
    
################################################################################
######################### USERS SETTINGS OPTIONS ###############################
################################################################################
    
    /**
     * Yeni Kullanıcı Eklediğiniz Function
     */
    public function NewUsersAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            $UsersAdds = $this->Recordscp_Model->setNewUsersAddsR_Model( $this->input->post() );
            if($UsersAdds):
                $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                redirect($this->agent->referrer());
            else:
                $this->session->set_flashdata('Danger', _nint( 'Bu Kullanıcı Mevcut.' ));
                redirect($this->agent->referrer());
            endif;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Kullanıcı Ekledi' ));
        endif; 
    } // end NewSlidersAddsRecordsCP()
    
    /**
     * Mevcut kullanıcıyı Düzenlediğiniz Function
     */
    public function EditUsersAddsRecordsCP()
    {
        if($this->input->post() == TRUE):
            $userEdit = $this->Recordscp_Model->setEditUsersAddsR_Model( $this->input->post(), $this->uri->segment(3,0) );
            if($userEdit):
                $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
                redirect($this->agent->referrer());
            else:
                $this->session->set_flashdata('Danger', _nint( 'Bu Kullanıcı Mevcut.' ));
                redirect($this->agent->referrer());
            endif;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Kullanıcı Düzenledi' ));
        endif; 
    } // end EditUsersAddsRecordsCP()
    
    /**
     * Kullanıcıyı Siliyoruz Tamamen değil sadece listede silik görünecek.
     */
    public function ClearUsersRecordsCP()
    {
        if($this->uri->segment(3,0)):
            $data = $this->Recordscp_Model->setClearUsersAddsR_Model( $this->uri->segment(3,0) );
            if($data == FALSE):
                $this->session->set_flashdata('Danger', _nint( 'Bu Kullanıcı Silinemez..' ));
                redirect($this->agent->referrer());
            else:
                redirect($this->agent->referrer());
            endif;
        else:
            redirect($this->agent->referrer()); 
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Kullanıcıyı Sildi' ));
    } // end ClearUsersRecordsCP()
    
    /**
     * Kullanıcıyı Geri Getiriyoruz.
     */
    public function ReplyUsersRecordsCP()
    {
        if($this->uri->segment(3,0)):
            $data = $this->Recordscp_Model->setReplyUsersAddsR_Model( $this->uri->segment(3,0) );
            redirect($this->agent->referrer());
        else:
            redirect($this->agent->referrer()); 
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Kullanıcıyı Geri Aldı' ));
    } // end ReplyUsersRecordsCP()
    
    /**
     * Bu kısım Kullanıcı Lists de bulunan Bootstrap Switch ile Kullanıcı aktif pasif
     * alanımızı kontrol ediyoruz.
     */
    public function NewUsersStatusRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewUsersStatusR_Model( $this->input->post() );
            echo $data;
        endif; 
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'Kullanıcıyı Aktif/Pasif Ediyor.' ));
    } // end NewUsersStatusRecordsCP()
    
/******************************************************************************/
/*********************** Users Roles Setting **********************************/
/******************************************************************************/
    /**
     * Kullanıcıya Admin Menüsü için Yetkilendirme Yaptığımız function
     */
    public function NewUsersRolesMenuRecordsCP()
    {
        //if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewUsersRolesMenuR_Model( $this->input->post(), 1 );
            //redirect($this->agent->referrer());
        //endif;
    } // end NewUsersRolesMenuRecordsCP()
    
    /**
     * Kullanıcıya Sayfalar için Yetkilendirme Yaptığımız function
     */
    public function NewUsersRolesPagesRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewUsersRolesPagesR_Model( $this->input->post(), $this->uri->segment(3,0) );
            redirect($this->agent->referrer());
        endif;
    } // end NewUsersRolesPagesRecordsCP()

################################################################################
######################### MESSAGES SETTINGS OPTIONS ############################
################################################################################

    public function newMailBoxSettingsRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewMailBoxSettingsR_Model( $this->input->post() );
            if($data):
                $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
            else:
                $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
            endif;
            redirect($this->agent->referrer());
        endif;
        /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
        $this->session->set_userdata('pages', _nint( 'eMail Ayarlarını Yapıyor' ));
    } // end newMailBoxSettings()
    
################################################################################
######################### WEBSİTE GENERAL SETTINGS OPTIONS #####################
################################################################################    
    /**
     * 
     */
    public function GeneralSettingsRecordsCP()
    {
        if($this->input->post() == TRUE):
            $GeneralSettings = $this->Recordscp_Model->setGeneralSettingsR_Model( $this->input->post() );
            if($GeneralSettings):
                $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
            else:
                $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
            endif;
            redirect($this->agent->referrer());
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Genel Ayarları Düzenledi' ));
        endif;        
    } //  end GeneralSettingsRecordsCP()
    
################################################################################
######################### SOSIAL MEDIA SETTINGS OPTIONS ########################
################################################################################    
    /**
     * 
     */
    public function SosialMediaLinksRecordsCP()
    {
        if($this->input->post() == TRUE):
            $SosialMediaLinksSettings = $this->Recordscp_Model->setSosialMediaLinksR_Model( $this->input->post() );
            if($SosialMediaLinksSettings):
                $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
            else:
                $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
            endif;
            redirect($this->agent->referrer());
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Sosyal Medya Linki Ekliyor' ));
        endif;        
    } //  end SosialMediaLinksRecordsCP()
    
    /**
     * 
     */
    public function FacebookSettingsRecordsCP()
    {
        if($this->input->post() == TRUE):
            $FacebookSettings = $this->Recordscp_Model->setFacebookSettingsR_Model( $this->input->post() );
            if($FacebookSettings):
                $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
            else:
                $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
            endif;
            redirect($this->agent->referrer());
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Facebook Ayarlarını Yapıyor' ));
        endif;        
    } //  end FacebookSettingsRecordsCP()

################################################################################
######################### ADMIN MENUS SETTINGS OPTIONS #########################
################################################################################    
    /**
     * 
     */
    public function NewAdminOrderByListsRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewAdminOrderByListsR_Model( $this->input->post() );
            echo $data;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Menü Sıralamasını Değiştiriyor' ));
        endif; 
    } // end NewAdminOrderByListsRecordsCP()
    
    /**
     * 
     */
    public function NewAdminIconNameRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewAdminIconNameR_Model( $this->input->post() );
            echo $data;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Menu ikonunu Değiştiriyor' ));
        endif;
    } // end NewAdminIconNameRecordsCP()
    
    /**
     * 
     */
    public function NewAdminMenuOpenRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewAdminMenuOpenR_Model( $this->input->post() );
            echo $data;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Menu Listesini On/Off Ediyor' ));
        endif;
    } // end NewAdminMenuOpenRecordsCP()
    
    /**
     * 
     */
    public function NewAdminMenuStatusRecordsCP()
    {
        if($this->input->post() == TRUE):
            $data = $this->Recordscp_Model->setNewAdminMenuStatusR_Model( $this->input->post() );
            echo $data;
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Menüyü Aktif/Pasif Ediyor' ));
        endif;
    } // end NewAdminMenuStatusRecordsCP()
    
    public function NewAdminsMenusRecordsCP()
    {
        if($this->input->post() == TRUE):
            $AdminsMenus = $this->Recordscp_Model->setNewAdminsMenusR_Model( $this->input->post() );
            if($AdminsMenus):
                $this->session->set_flashdata('Success', _nint( 'Kayıt işlemi Başarılı' ));
            else:
                $this->session->set_flashdata('Danger', _nint( 'Kayıt işlemi Başarısız' ));
            endif;
            redirect($this->agent->referrer());
            /* Log Sisteminde Kullanıcının nerede olduğunu takip ediyoruz */
            $this->session->set_userdata('pages', _nint( 'Yeni Menu Ekledi' ));
        endif;
    } // end NewAdminsMenusRecordsCP()
   
} // end class Recordscp extends Admin_Controller
