<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * MenuGlobal_Model default Class
 * @author Hacı Ali MIZRAK
 */

class MenuGlobal_Model extends CI_Model
{
    /* Sabit Değişkenler */
    public $AdminMenus;
    public $MainMenus;
    
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
    
    /**
     * Bu function yönetim paneli için content header alanından kullanılacak.
     * @param type $parametre
     */
    public function mainContentHeader_Model( $parametre )
    {
        $ContentHeader = $this->db->select('*')
                                  ->from('posts')
                                  ->where('postseoname', $parametre)
                                  ->get()
                                  ->result();
        if($ContentHeader):
            return $ContentHeader[0]->postitle;
        else:
            return $parametre == 'index' ? _nint( 'Anasayfa' ) : _nint( 'Sayfa Yok' );
        endif;        
    } // end mainContentHeader_Model( $parametre )
    
    /**
     * Bu function yönetim paneli için content header alanından kullanılacak.
     * @param type $parametre
     */
    public function ContentHeader_Model( $parametre )
    {
        $ContentHeader = $this->db->select('*')
                                  ->from('adminmenu')
                                  ->where('menuri', $parametre)
                                  ->get()
                                  ->result();
        if($ContentHeader):
            return $ContentHeader[0]->menutitle;
        else:
            return $parametre == 'index' ? _nint( 'Anasayfa' ) : _nint( 'Sayfa Yok' );
        endif;        
    } // end ContentHeader_Model( $parametre )
    
    /**
     * Admin Paneli sol sidebar da kullanılacak olan function
     * @return type
     */
    public function AdminMenus_Model()
    {
        $data = $this->db->select('*')
                         ->from('adminmenu AM')
                         ->join('userroles URS', 'URS.typeid = AM.mid', 'left')
                         ->where(array('URS.userid' => $this->session->userdata('userid'), 'URS.typetitle' => 'menu', 'URS.read' => 1))
                         ->order_by('AM.menuorder', 'ASC')
                         ->group_by('mid')
                         ->get();
        if($data->num_rows() > 0)
        {
            $res = $data->result();
            foreach ($res AS $row):
                $items[$row->mparentid][] = $row;
            endforeach;
            $this->AdminMenuList_Model( $items );
            return $this->AdminMenus;
        }
    } // end AdminMenus_Model( $parametre )
    
    /**
     * AdminMenus_Model için hazırlanmış iç döngü function
     * @return type
     */
    public function AdminMenuList_Model( $items, $parent = NULL )
    {
        $index = $parent == null ? '0' : $parent;
        if($index == '0') {
            $navClass = '';
            $ulClass = ' class="sidebar-menu"';
            $liClass = ' class="active treeview"';
            $divClass = '';
            $iClass = '<i class="fa fa-angle-left pull-right"></i>';
        } else {
            $navClass = '';
            $ulClass = ' class="treeview-menu"';
            $liClass = '';
            $divClass = '';
            $iClass = '';
        }
        if(isset($items[$index])):
            $this->AdminMenus .= '<ul' . $ulClass . '>';
            foreach ($items[$index] AS $child):
                if($child->menuopen == -1):
                    $liClass = ' class="active treeview"';
                else:
                    $liClass = ' class="treeview"';
                endif;
                
                if($child->mparentid == 0):
                    $ButtomUrl = '#';
                else:
                    $ButtomUrl = base_url('nintcp/' . $child->menuri);
                endif;
                
                $this->AdminMenus .= '<li' . $liClass . '><a href="' . $ButtomUrl . '"><i class="' . $child->menuicon . '"></i><span>' . _nint( $child->menutitle ) . '</span>' . $iClass . '</a>';
                $this->AdminMenuList_Model( $items, $child->mid );
                $this->AdminMenus .= '</li>';
            endforeach;
            $this->AdminMenus .= '</ul>';
        endif;
    } // end AdminMenuList_Model($items, $parent = NULL)
    
    
/*    */
    
    /**
     * Dış Anayüz için hazırlanmış menu function
     * @return type
     */
    public function MainMenus_Model()
    {
        $data = $this->db->where(array('poststatus !=' => 'deleted', 'postype' => 'pages'))
                         ->order_by('menuorder', 'ASC')
                         ->limit(10)
                         ->get('posts');
        if($data->num_rows() > 0)
        {
            $res = $data->result();
            foreach ($res AS $row):
                $items[$row->postparent][] = $row;
            endforeach;
            $this->MainMenuList_Model( $items );
            return $this->MainMenus;
        }
    } // end AdminMenus_Model( $parametre )
    
    /**
     * MainMenus_Model için hazırlanmış iç döngü function
     * @return type
     */
    public function MainMenuList_Model( $items, $parent = NULL )
    {
        $index = $parent == null ? '0' : $parent;
        if($index == '0') {
            $navClass = '';
            $ulClass = ' id="main-menu" class="clearfix"';
            $liClass = ' ';
            $divClass = '';
            $iClass = '';
        } else {
            $navClass = '';
            $ulClass = '';
            $liClass = '';
            $divClass = '';
            $iClass = '';
        }
        if(isset($items[$index])):
            $this->MainMenus .= '<ul' . $ulClass . '>';
            foreach ($items[$index] AS $child):
                $this->MainMenus .= '<li' . $liClass . '><a href="' . site_url($child->postseoname) . '"><span>' . _nint( $child->postitle ) . '</span></a>';
                $this->MainMenuList_Model( $items, $child->postid );
                $this->MainMenus .= '</li>';
            endforeach;
            $this->MainMenus .= '</ul>';
        endif;
    } // end AdminMenuList_Model($items, $parent = NULL)
} // end class MenuGlobal_Model extends CI_Model
