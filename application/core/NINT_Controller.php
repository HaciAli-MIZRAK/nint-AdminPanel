<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * NINT_Controller Class
 * @author Hacı Ali MIZRAK
 */

/**
 * NINT_Controller bizim kendimize göre yapılandıracağımız bir Class ımız
 * Bu Class ile biz sistem Controller ına ilaveler yapacaz.
 */
class NINT_Controller extends CI_Controller
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
} // end class NINT_Controller extends CI_Controller

/**
 * Bu Class ile NINT_Controller Classını Ziyaretçilerin
 * ulaşacağı şekle getiriyoruz.
 */
class Public_Controller extends NINT_Controller
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
    
} // end class Public_Controller extends NINT_Controller

/**
 * Bu Class ile NINT_Controller Classını Kayıtlı Kullanıcıların
 * ulaşacağı şekle getiriyoruz.
 */
class Admin_Controller extends NINT_Controller
{
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
        $this->LoginControl();
    } // end __construct()
    
    public function index()
    {
        
    } // end index()
    
    /**
     * 
     */
    public function LoginControl()
    {
        if($this->session->userdata('login') == FALSE):
            redirect(site_url('login/login'));
            //redirect(base_url());
        endif;
    } // end LoginControl()

################################################################################
######################### SPECIALS FUNCTIONS ###################################
################################################################################
    
    /**
     * 
     * @param type $First
     * @param type $Last
     */
    protected function TimeDifference( $First, $Last )
    {
        $Difference = ($First - $Last);
        $Minute = $Difference / 60;
        $SecondDifference = floor($Difference - (floor($Minute) * 60));
        $Hour = $Minute / 60;
        $MinuteDifference = floor($Minute - (floor($Hour) * 60));
        $Day = $Hour / 24;
        $HourDifference = floor($Hour - (floor($Day) * 24));
        $Year = floor($Day/365);
        $DayDifference = floor($Day - (floor($Year) * 365));
        
        if($Year):
            $array['Yeras'] = $Year . _nint( ' Yıl ' );  
        endif;
        if($DayDifference):
            $array['Days'] = $DayDifference . _nint( ' Gün ' );
        endif;
        if($HourDifference):
           $array['Hours'] = $HourDifference . _nint( ' Saat ' ); 
        endif;
        if($MinuteDifference):
            $array['Minutes'] = $MinuteDifference . _nint( ' Dakika ' );
        endif;
        //if($SecondDifference):
            $array['Seconds'] = $SecondDifference . _nint( ' Saniye' );
        //endif;
        return $array;
    } // end TimeDifference( $First, $Last )
    
    /**
     * 
     * @param type $parametre
     * @return type
     */
    protected function LastActivityTimes( $parametre )
    {
        if($parametre):
            $Part1 = explode('|', $parametre);
            for($i = 0;$i < count($Part1);$i++):
                $Part2 = explode(';', $Part1[1]);
                preg_match_all('/[0-9]/', $Part2[0], $Results);
            endfor;
            $LastActivityTime = implode('', $Results[0]); // Üyenin İlk Giriş Tarih ve Saattini Alıyoruz.
            return $LastActivityTime;
        endif;       
    } // end LastActivityTimes( $parametre )
    
    /**
     * 
     * @param type $parametre
     * @return type
     */
    protected function ActualActivityTimes( $parametre )
    {
        if($parametre):
            return date('H:i:s', $parametre);
        endif;
    } // end ActualActivityTimes( $parametre )
    
    /**
     * 
     * @param type $parametre
     * @return type
     */
    protected function OnlineUsername( $parametre )
    {
        if($parametre):
            $userControl = explode(';', $parametre);
            for($i = 0;$i < count($userControl);$i++):
                if(strstr($userControl[$i], 'username')):
                    $Part1 = explode('"', $userControl[$i]);
                    return $Part1[1];
                endif;
            endfor;            
        endif;
    } // end OnlineUsername( $parametre )
    
    /**
     * 
     * @param type $parametre
     * @return type
     */
    protected function OnlineUserType( $parametre )
    {
        if($parametre):
            $userControl = explode(';', $parametre);
            for($i = 0;$i < count($userControl);$i++):
                if(strstr($userControl[$i], 'fb_userid')):
                    $Part1 = explode('"', $userControl[$i]);
                    return $Part1[1];
                endif;
            endfor;            
        endif;
    } // end OnlineUsername( $parametre )
    
    /**
     * 
     * @param type $parametre
     * @return type
     */
    protected function OnlinePages( $parametre )
    {
        if($parametre):
            $userControl = explode(';', $parametre);
            for($i = 0;$i < count($userControl);$i++):
                if(strstr($userControl[$i], 'pages')):
                    $Part1 = explode('"', $userControl[$i]);
                    return $Part1[1];
                endif;
            endfor;            
        endif;
    } // end OnlineUsername( $parametre )
    
################################################################################
######################### PHOTO FUNCTIONS ######################################
################################################################################
    
    /**
     * 
     * @param type $newTitle
     * @param type $newKey
     * @return boolean
     */
    protected function Uploads( $Folders, $newTitle, $newKey )
    {
        $config['upload_path']      = $Folders; //'./assets/lamraipek/slidersbox/';
        $config['allowed_types']    = 'jpg|jpeg|png';
        $config['file_name']        = SeoLink( $newTitle ) . '_' . rand();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload($newKey))
        {
            $this->session->set_flashdata('Success', _nint( 'Fotoğraf Yüklendi' ));
            return TRUE;
        } else {
            $this->upload->display_errors();
            $this->session->set_flashdata('Danger', $this->upload->display_errors());
            return FALSE;
        }
    } // end MultiUploads( $parametre )
    
    /**
     * 
     * @param type $OldFilePath
     * @param type $newFilePath
     * @param type $width
     * @param type $height
     * @return strıng
     */
    public function ImagesCrops( $OldFilePath, $newFilePath, $width, $height, $MaintainRatio = FALSE )
    {
        /* Fotoğrafı Kırp */
        $config['image_library']    = 'gd2';
        $config['source_image']     = $OldFilePath; //'./assets/lamraipek/slidersbox/hasancik22647.png';
        $config['new_image']        = $newFilePath; //'./assets/lamraipek/slidersresize/new_image.jpg';
        $config['maintain_ratio']   = $MaintainRatio == 'Crops' ? TRUE : FALSE;
        $config['width']            = $width; //600;
        $config['height']           = $height; //100;
        if($MaintainRatio == FALSE):
            $config['x_axis']           = 0;
            $config['y_axis']           = 300;  
        endif;        
        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->crop();
            if (!$this->image_lib->resize())
            {
                return $this->image_lib->display_errors();
            } else {
                return _nint( 'işlem başarılı' );
            }
        $this->image_lib->clear();
    } // end ImagesCrops( $OldFilePath, $newFilePath, $width, $height )
    
################################################################################
######################### FOLDER AND FILES FUNCTIONS ###########################
################################################################################
    /**
     * Sitemizde Blog, sayfa ve paylaşımlar için  Hazırlayacağımız özel Template
     * listesi için bu function kullanılıyor.
     * @return type
     */
    protected function TemplatesLists()
    {
        $TemplateLists = get_filenames(APPPATH . 'views/template/');
        for($i = 0;$i < count($TemplateLists);$i++):
            $Teplate[] = substr($TemplateLists[$i], 0, -4); 
        endfor;
        return $Teplate;
    } // end TemplatesLists()
    
    /**
     * Sitemiz için Yeni Oluşturduğumuz tasarımları buradan seçiyoruz.
     */
    protected function WebSiteTemplate()
    {
        $TemplateText = directory_map(APPPATH . 'views/nintweb/', 1);
        for($i = 0;$i < count($TemplateText);$i++):
            $Template[] = substr($TemplateText[$i], 0, -1); 
        endfor;
        return $Template;
    } // end WebSiteTemplate()
    
    /**
     * Language/locale/ klasörü içindeki *.po dosyalarını dinamik algılıyoruz.
     * @return type
     */
    protected function LanguageLists()
    {
        $LanguageLists = get_filenames(APPPATH . 'language/locale/');
        for($i = 0;$i < count($LanguageLists);$i++):
            if(substr($LanguageLists[$i], -3) == '.po'):
                $Language[] = substr($LanguageLists[$i], 0, -3); 
            endif;             
        endfor;
        if(isset($Language)):
            return $Language;
        else:
            return $Language = _nint( 'Henüz Dil Dosyası Eklenmemiş..' );
        endif;
        
    } // end LanguageLists()
    
} // end class Admin_Controller extends NINT_Controller

/* End of file NINT_Controller.php */
/* Location: ./application/core/NINT_Controller.php */
