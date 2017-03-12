<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * Loadercp_Model veri Çekmek için Model Class
 * @author Hacı Ali MIZRAK
 */

class Loadercp_Model extends CI_Model
{
    /* Sabit Değişkenler */
    public $data;
    
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
    } // end __construct()
    
    /**
     * 
     */
    public function index()
    {
    } // end index()

################################################################################
######################### GENERAL USE FUNCTION OPTIONS #########################
################################################################################
    
    public function getPaginationL_Model( $dbTable, $PosType )
    {
        $getPagination = $this->db->from($dbTable)
                                  ->where(array('postype' => $PosType))
                                  ->count_all_results();
        if($getPagination):
            return $getPagination;  
        endif;        
    } // end getPaginationL_Model( $dbTable, $Type )
    
    public function getUserPaginationL_Model( $dbTable )
    {
        $getUserPagination = $this->db->from($dbTable)
                                  ->count_all_results();
        if($getUserPagination):
            return $getUserPagination;  
        endif;        
    } // end getUserPaginationL_Model( $dbTable )
    
    public function getCategorysPaginationL_Model( $dbTable )
    {
        $getUserPagination = $this->db->from($dbTable)
                                  ->count_all_results();
        if($getUserPagination):
            return $getUserPagination;  
        endif;        
    } // end getCategorysPaginationL_Model( $dbTable )

################################################################################
######################### LANGUAGE SETTINGS OPTIONS ############################
################################################################################
    /**
     * geçici test alanı
     */
    public function getLanguageListsL_Model( $parametre )
    {
        for($i = 0;$i < count($parametre);$i++):
            $getLanguageLists[] = $this->db->select('*')
                                       ->from('languagecode')
                                       ->where('isocode', $parametre[$i])
                                       ->get()
                                       ->result();
        endfor;    
        if($getLanguageLists):
            return $getLanguageLists;
        endif;
    } // end getLanguageListsL_Model()  
    
################################################################################
######################### SESSION SETTINGS OPTIONS #############################
################################################################################
    
    /**
     * geçici test alanı
     */
    public function getSessionListsL_Model()
    {
        $getSessionLists = $this->db->select('*')
                                       ->from('ci_sessions')
                                       ->get()
                                       ->result();
        if($getSessionLists):
            return $getSessionLists;
        endif;
    } // end getSessionListsL_Model()

################################################################################
######################### PAGES SETTINGS OPTIONS ###############################
################################################################################     
    
    /**
     * Pages Lists için veri çektiğimiz function
     * @return type
     */
    public function getPagesListsL_Model( $PerPage, $Segment )
    {
        $getPagesLists = $this->db->select('*')
                                  ->from('posts P')
                                  ->join('languagecode LANG', 'LANG.isocode = P.langselect')
                                  ->join('postmeta PM', 'PM.postid = P.postid')
                                  ->join('users U', 'U.userid = P.postauthor')
                                  ->where(array('P.postype' => 'pages'))
                                  ->group_by('P.postid')
                                  ->limit($PerPage, $Segment)
                                  ->get()
                                  ->result();
        if($getPagesLists):
            return $getPagesLists;
        endif;
    } // end getGeneralSettingsL_Model()
    
    /**
     * Pages Edit için veri çektiğimiz function
     * @return type
     */
    public function EditPagesListsL_Model( $parametre )
    {
        $getPagesLists = $this->db->select('*, GROUP_CONCAT(PM.metavalue SEPARATOR "|") AS PMT, P.postid AS PagesId')
                                  ->from('posts P')
                                  ->join('languagecode LANG', 'LANG.isocode = P.langselect')
                                  ->join('postmeta PM', 'PM.postid = P.postid')
                                  ->where(array('P.postid' => $parametre, 'P.postype' => 'pages'))
                                  ->get()
                                  ->result();
        if($getPagesLists):
            return $getPagesLists[0];
        endif;
    } // end getGeneralSettingsL_Model()
    
    /**
     * Main Sayfada görsterilecek sayfalarımızı çekiyoruz.
     * @param type $pageId
     * @return type
     */
    public function getPagesShowL_Model( $pageId )
    {
        $pageShow = $this->db->select('*, GROUP_CONCAT(PM.metavalue SEPARATOR "|") AS PMT')
                             ->from('posts P')
                             ->join('postmeta PM', 'PM.postid = P.postid')
                             ->join('users U', 'U.userid = P.postauthor')
                             ->where('P.postseoname', $pageId)
                             ->get()
                             ->result();
        if($pageShow):
            return $pageShow[0];   
        endif;        
    } // end getPagesShowL_Model( $pageShow )
    
################################################################################
######################### BLOGS SETTINGS OPTIONS ###############################
################################################################################     
    
    /**
     * Blog Lists için veri çektiğimiz function
     * @return type
     */
    public function getBlogsListsL_Model( $PerPage, $Segment )
    {
        $getPagesLists = $this->db->select('*')
                                  ->from('posts P')
                                  ->join('languagecode LANG', 'LANG.isocode = P.langselect')
                                  ->join('postmeta PM', 'PM.postid = P.postid')
                                  ->join('users U', 'U.userid = P.postauthor')
                                  ->where(array('P.postype' => 'blogs'))
                                  ->group_by('P.postid')
                                  ->limit($PerPage, $Segment)
                                  ->get()
                                  ->result();
        if($getPagesLists):
            return $getPagesLists;
        endif;
    } // end getBlogsListsL_Model( $PerPage, $Segment )
    
    /**
     * Blog Edit için veri çektiğimiz function
     * @return type
     */
    public function EditBlogsListsL_Model( $parametre )
    {
        $getBlogsLists = $this->db->select('*, GROUP_CONCAT(PM.metavalue SEPARATOR "|") AS PMT, P.postid AS PagesId')
                                  ->from('posts P')
                                  ->join('languagecode LANG', 'LANG.isocode = P.langselect')
                                  ->join('postmeta PM', 'PM.postid = P.postid')
                                  ->where(array('P.postid' => $parametre, 'P.postype' => 'blogs'))
                                  ->get()
                                  ->result();
        if($getBlogsLists):
            return $getBlogsLists[0];
        endif;
    } // end EditBlogsListsL_Model( $parametre )
    
    /**
     * Main Sitede görsterilecek Bloglar çekiyoruz.
     * @param type $pageId
     * @return type
     * , GROUP_CONCAT(PM.metavalue SEPARATOR "|") AS PMT
     */
    public function getBlogsShowL_Model($PerPage, $Segment)
    {
        $pageShow = $this->db->select('*')
                             ->from('posts P')
                             ->join('postmeta PM', 'PM.postid = P.postid')
                             ->join('users U', 'U.userid = P.postauthor')
                             ->where('P.postype', 'blogs')
                             ->group_by('P.postitle')
                             ->limit($PerPage, $Segment)
                             ->get()
                             ->result();
        if($pageShow):
            return $pageShow;   
        endif;        
    } // end getPagesShowL_Model( $pageShow )

################################################################################
######################### SLIDERS SETTINGS OPTIONS ###############################
################################################################################     
    /**
     * Sliders Lists için veri çektiğimiz function
     * @return type
     */
    public function getSlidersListsL_Model( $PerPage, $Segment )
    {
        $getPagesLists = $this->db->select('*')
                                  ->from('posts P')
                                  ->join('languagecode LANG', 'LANG.isocode = P.langselect')
                                  ->join('postmeta PM', 'PM.postid = P.postid')
                                  ->join('users U', 'U.userid = P.postauthor')
                                  ->where(array('P.postype' => 'sliders'))
                                  ->group_by('P.postid')
                                  ->limit($PerPage, $Segment)
                                  ->get()
                                  ->result();
        if($getPagesLists):
            return $getPagesLists;
        endif;
    } // end getGeneralSettingsL_Model()
    
    /**
     * Sliders Edit için veri çektiğimiz function
     * @return type
     */
    public function EditSlidersListsL_Model( $parametre )
    {
        $getPagesLists = $this->db->select('*, GROUP_CONCAT(PM.metavalue SEPARATOR "|") AS PMT, P.postid AS SlidersId')
                                  ->from('posts P')
                                  ->join('languagecode LANG', 'LANG.isocode = P.langselect')
                                  ->join('postmeta PM', 'PM.postid = P.postid')
                                  ->where(array('P.postid' => $parametre, 'P.postype' => 'sliders'))
                                  ->get()
                                  ->result();
        if($getPagesLists):
            return $getPagesLists[0];
        endif;
    } // end getGeneralSettingsL_Model()
    
    /**
     * Main Sliderda görsterilecek sliderlerimizi çekiyoruz.
     * @param type $pageId
     * @return type
     * ,GROUP_CONCAT(PM.metavalue SEPARATOR "|") AS PMT
     */
    public function getSlidersShowL_Model()
    {
        $sliderShow = $this->db->select('*')
                             ->from('posts P')
                             ->join('postmeta PM', 'PM.postid = P.postid')
                             ->join('users U', 'U.userid = P.postauthor')
                             ->where('P.postype', 'sliders')
                             ->get()
                             ->result();
        if($sliderShow):
            return $sliderShow;   
        endif;        
    } // end getSlidersShowL_Model()

################################################################################
######################### CATEGORYS SETTINGS OPTIONS ###########################
################################################################################     
    
    /**
     * Kategori Edit için veri çektiğimiz function
     * @return type
     */
    public function EditCategorysListsL_Model( $parametre )
    {
        $getCategorysLists = $this->db->select('*')
                                      ->from('categorys')
                                      ->where(array('categoryid' => $parametre))
                                      ->get()
                                      ->result();
        if($getCategorysLists):
            return $getCategorysLists[0];
        endif;
    } // end EditCategorysListsL_Model( $parametre )
    
    /**
     * Üst Kategori Seçimi yapılacak Select içinde görsterilecek
     * Kategori Listesini Çekiyoruz.
     * @param type $pageId
     * @return type
     */
    public function getCategorySelectShowL_Model( $parentid = 0, $String = 0 )
    {
        $Options = '';
        $CategorySelectLists = $this->db->select('*')
                                        ->from('categorys')
                                        ->where('categoryparentid', $parentid)
                                        ->get()
                                        ->result();
        if($this->db->affected_rows()):
            foreach($CategorySelectLists AS $CategorySelect):
                $Options .= '<option value="' . $CategorySelect->categoryid . '">' . str_repeat('- ', $String) . $CategorySelect->categorytitle . '</option>' . "\n";
                $Options .= $this->getCategorySelectShowL_Model( $CategorySelect->categoryid, ($String + 2) );
            endforeach;
            return $Options;
        else:
            return FALSE;
        endif;
    } // end getCategorySelectShowL_Model( $parentid = 0, $String = 0 )
    
    /**
     * Kategori Tablosu içinde görsterilecek
     * Kategori Listesini Çekiyoruz.
     * @param type $pageId
     * @return type
     */
    public function getCategoryTableShowL_Model( $parentid = 0, $String = 0 )
    {
        $Options = '';
        $deger = 5;
        $CategorySelectLists = $this->db->select('*')
                                        ->from('categorys')
                                        ->where('categoryparentid', $parentid)
                                        ->get()
                                        ->result();
        if($this->db->affected_rows()):
            foreach($CategorySelectLists AS $CategorySelect):
                $Options .= $CategorySelect->categorystatus == 'deleted' ? '<tr style="color: #ffffff; background: #f56954;">' : '<tr>' . "\n";
                $Options .= '<td class="border-right">' . str_repeat('- ', $String) . $CategorySelect->categorytitle . '</td>' . "\n";
                $Options .= '<td class="border-right">' . $CategorySelect->categorydesc . '</td>' . "\n";
                $Options .= '<td class="border-right">' . $CategorySelect->categoryseoname . '</td>' . "\n";
                $Options .= '<td class="border-right pull-right">' . $CategorySelect->categorycount . '</td>' . "\n";
                if($CategorySelect->categorystatus == 'deleted'):
                $Options .= '<td>' . "\n";
                $Options .= '    <a data-toggle="tooltip" title="' . _nint( 'Silinen Kategori için Fotoğraf ön izlemesi yapılamaz.' ) . '">' . "\n";
                $Options .= '        <i class="fa fa-image fa-white fa-lg" title=""></i>' . "\n";
                $Options .= '    </a>' . "\n";
                $Options .= '</td>' . "\n";
                $Options .= '<td>' . "\n";
                $Options .= '    <a data-toggle="tooltip" title="' . _nint( 'Silinen Kategori için düzenleme yapılamaz.' ) . '">' . "\n";
                $Options .= '        <i class="fa fa-edit fa-white fa-lg"></i>' . "\n";
                $Options .= '    </a>' . "\n";
                $Options .= '</td>' . "\n";
                $Options .= '<td>' . "\n";
                $Options .= '    <a href="' . base_url( 'recordscp/replycategorysrecordscp/' . $CategorySelect->categoryid ) . '" onclick="return confirmReply()">' . "\n";
                $Options .= '        <i class="fa fa-reply-all fa-white fa-lg" title=""></i>' . "\n";
                $Options .= '    </a>' . "\n";
                $Options .= '</td>' . "\n";  
                else:
                $Options .= '<td>' . "\n";
                $Options .=     '<a data-toggle="tooltip" title="<img src=' . base_url('assets/nintweb/categorysphoto/' . getCategoryPhotoParser( $CategorySelect->categoryphoto )) . ' class=toolTipStyle />">' . "\n";
                $Options .=         '<i class="fa fa-image fa-lg" title="' . $CategorySelect->categorytitle . '"></i>' . "\n";
                $Options .=     '</a>' . "\n";
                $Options .= '</td>' . "\n";
                $Options .= '<td><a href="' . base_url( 'nintcp/editcategorys/' . $CategorySelect->categoryid ) . '"><i class="fa fa-edit fa-lg" title="' . _nint( 'Sayfayı Düzenle' ). '"></i></a></td>' . "\n";
                $Options .= '<td>' . "\n";
                $Options .=     '<a href="' . base_url( 'recordscp/clearcategorysrecordscp/' . $CategorySelect->categoryid ) . '" onclick="return confirmDel()">' . "\n";
                $Options .=         '<i class="fa fa-trash fa-lg" title="' . _nint( 'Sayfayı Sil' ) . '"></i>' . "\n";
                $Options .=     '</a>' . "\n";
                $Options .= '</td>' . "\n";
                endif;
                $Options .= $this->getCategoryTableShowL_Model( $CategorySelect->categoryid, ($String + 2) );
                $Options .= '</tr>' . "\n";
            endforeach;
            return $Options;
        else:
            return FALSE;
        endif;
    } // end getCategoryTableShowL_Model( $parentid = 0, $String = 0 )
    
################################################################################
######################### USERS SETTINGS OPTIONS ###############################
################################################################################
    /**
     * 
     */
    public function getLastUserRegisterListsL_Model()
    {
        $FirstDateTime = date('Y-m-d') . ' 00:01:01';
        $LastDateTime  = date('Y-m-d') . ' 23:59:59';
        $getLastUserRegisterLists = $this->db->select('*')
                                             ->from('users')
                                             ->where("userregistered BETWEEN '" . $FirstDateTime . "' AND '" . $LastDateTime . "'")
                                             ->get()
                                             ->result();
        if($getLastUserRegisterLists):
            return $getLastUserRegisterLists;
        endif;
    }
    
    /**
     * Users Lists için veri çektiğimiz function
     * @return type
     */
    public function getUsersListsL_Model( $PerPage, $Segment )
    {
        $getUserLists = $this->db->select('*')
                                 ->from('users U')
                                  //->join('usermeta UM', 'UM.userid = U.userid')
                                 ->limit($PerPage, $Segment)
                                 ->get()
                                 ->result();
        if($getUserLists):
            return $getUserLists;
        endif;
    } // end getGeneralSettingsL_Model()
    
    /**
     * 
     * @return type
     */
    public function getUsersShowListsL_Model()
    {
        $getUserLists = $this->db->select('*')
                                 ->from('users U')
                                 ->get()
                                 ->result();
        if($getUserLists):
            return $getUserLists;
        endif;
    } // end getUsersShowListsL_Model()
    
    /**
     * Kullanıcı Edit için veri çektiğimiz function
     * @return type
     */
    public function EditUsersListsL_Model( $parametre )
    {
        $getUsersLists = $this->db->select('*, U.userid AS USERID')
                                  ->from('users U')
                                  ->join('usermeta UM', 'UM.userid = U.userid', 'left')
                                  ->where(array('U.userid' => $parametre))
                                  ->get()
                                  ->result();
        if($getUsersLists):
            return $getUsersLists[0];
        endif;
    } // end EditUsersListsL_Model( $parametre )
    
/******************************************************************************/
/*********************** Users Roles Setting **********************************/
/******************************************************************************/
    
    /**
     * @param type $parametre
     * @return type
     */
    public function getuserShowLists_Model( $parametre )
    {
        $getUserLists = $this->db->select('*')
                                 ->from('users U')
                                 ->where('U.userid', $parametre)
                                 ->get()
                                 ->result();
        if($getUserLists):
            return $getUserLists[0];
        endif;
    } // end getuserShowLists_Model( $parametre )
    
    /**
     * Kullanıcı Yetkilendirme Admin Menu Listesi
     * @return type
     */
//    public function getuserRolesAdminShowL_Model( $parametre )
//    {
//        $getUserLists = $this->db->select('*, URS.userid AS ursid')
//                                 ->from('users U')
//                                 ->join('userroles URS', 'URS.userid = U.userid', 'left')
//                                 ->join('adminmenu AM', 'AM.mid = URS.amid', 'left')
//                                 ->where('U.userid', $parametre)
//                                 ->get()
//                                 ->result();
//        if($getUserLists):
//            return $getUserLists;
//        endif;
//    } // end getUsersShowListsL_Model()

    /**
     * 
     * @return type
     */
    public function getRolesAdminMenuListsL_Model( $parametre )
    {
        $getAdminMenuLists = $this->db->select('*')
                                      ->from('adminmenu AM')
                                      ->join('userroles URS', 'URS.typeid = AM.mid', 'left')
                                      ->where(array('URS.typetitle' => 'menu', 'URS.userid' => $parametre))
                                      ->order_by('menuorder', 'ASC')
                                      ->get()
                                      ->result();
        if($getAdminMenuLists):
            return $getAdminMenuLists;
        endif;
    } // end getRolesAdminMenuListsL_Model()
    
    /**
     * Kullanıcı Yetkilendirme Sayfa Listesi
     * @param type $parametre
     * @return type
     */
    public function getuserRolesPagesShowL_Model( $parametre )
    {
        $getUserLists = $this->db->select('*')
                                 ->from('posts P')
                                 ->join('userroles URS', 'URS.typeid = P.postid', 'left')
                                 ->where(array('P.postype' => 'pages', 'URS.typetitle' => 'pages', 'URS.userid' => $parametre))
                                 ->group_by('P.postid')
                                 ->get()
                                 ->result();
        if($getUserLists):
            return $getUserLists;
        endif;        
    } // end getuserRolesPagesShowL_Model( $parametre )
    
################################################################################
######################### WEBSITE SETTINGS OPTIONS #############################
################################################################################     
    /**
     * 
     * @return type
     */
    public function getGeneralSettingsL_Model()
    {
        $getGeneralSettings = $this->db->select('*')
                                       ->from('options')
                                       ->order_by('orderby', 'ASC')
                                       ->get()
                                       ->result();
        if($getGeneralSettings):
            return $getGeneralSettings;
        endif;
    } // end getGeneralSettingsL_Model()

################################################################################
######################### ADMIN MENUS SETTINGS OPTIONS #########################
################################################################################     
    /**
     * 
     * @return type
     */
    public function getAdminMenuListsL_Model()
    {
        $getAdminMenuLists = $this->db->select('*')
                                      ->from('adminmenu')
                                      ->order_by('menuorder', 'ASC')
                                      ->get()
                                      ->result();
        if($getAdminMenuLists):
            return $getAdminMenuLists;
        endif;
    } // end getAdminMenuListsL_Model()
    
    /**
     * 
     * @return type
     */
    public function getAdminMenuIconListsL_Model()
    {
        $getAdminMenuLists = $this->db->select('*')
                                      ->from('fonticon')
                                      ->order_by('fontitle', 'ASC')
                                      ->get()
                                      ->result();
        if($getAdminMenuLists):
            return $getAdminMenuLists;
        endif;
    } // end getAdminMenuIconListsL_Model()
    
} // end class Loadercp_Model extends CI_Model
