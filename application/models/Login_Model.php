<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * Login_Model Class
 * @author Hacı Ali MIZRAK
 */

class Login_Model extends CI_Model
{
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
    
    /**
     * Kullanıcı girişi için kullanılan function
     * @param type $parametre
     * @return type
     */
    public function ControLogin_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $data = $this->db->select('*, U.userid AS USERID')
                         ->from('users U')
                         ->join('userroles URS', 'URS.userid = U.userid', 'left')
                         ->where(array('U.useremail' => $useremail, 'U.userpass' => UserPassCreate( $userpass )))
                         ->get()
                         ->result();
        return $data[0];
    } // end Control_Model()
    
    /**
     * Facebook uygulaması ile kullanıcıya kayıt işlemi yapıyoruz.
     */
    public function FacebookLogin_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $Menu = $this->db->select('mid')->from('adminmenu')->get()->result();
        $Page = $this->db->select('postid')->from('posts')->where('postype', 'pages')->get()->result();
        
        $FacebookUserAdd = array(
            'username'      => $name,
            'useremail'     => $email,
            'userseoname'   => SeoLink( $name ),
            'userpass'      => UserPassCreate( $id . $name . $email ),
            'userapikey'    => ApiKeyCreate( $name, UserPassCreate( $id . $name . $email ) ),
            'fbid'          => $id,
        );
        
        $FBuserControl = $this->db->get_where('users', array('fbid' => $id));
        if($FBuserControl->row()):
            /* Kullanıcı Kayıtlı ise yeniden kayıt etmiyoruz.*/
            return $FBuserControl->row();
        else:
            $this->db->insert('users', $FacebookUserAdd);
            /* kullanıcı kaydı yapılırken izinler için de gerekli alanları oluşturuyoruz. */
            $UserLastId = $this->db->insert_id();
            foreach($Menu AS $menu):
                $this->db->insert('userroles', array('userid' => $UserLastId, 'typeid' => $menu->mid, 'typetitle' => 'menu'));
            endforeach;
            foreach($Page AS $page):
                $this->db->insert('userroles', array('userid' => $UserLastId, 'typeid' => $page->postid, 'typetitle' => 'pages'));
            endforeach;
        return $FBuserControl->row();
        endif;
    } // end FacebookLogin_Model()
    
    /**
     * 
     */
    public function GooglePlusLogin_Model( $parametre )
    {
        echo "google plus";
    } // end GooglePlusLogin_Model()
    
} // end class Login_Model extends CI_Model
