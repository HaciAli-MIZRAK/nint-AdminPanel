<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * Recordscp_Model Kayıt için Model Class
 * @author Hacı Ali MIZRAK
 */

class Recordscp_Model extends CI_Model
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
    
    /**
     * 
     */
    public function setGeneralSettingsR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $array = array(
            '_sitestatus' => !isset($_sitestatus) ? 'off' : 'on'
        );
        
        $parametre = array_merge($parametre, $array);
        $order = 1;
        foreach ($parametre AS $metakey => $metavalue):
            // post ile gelen metavalue değerlerinin var olup olmadığını kontrol ediyoruz.
            $query = $this->db->get_where('options', array('metakey' => $metakey)); 
            // burada ise kontrol ettiğimiz değerler varsa güncelliyor yok ise yenisini yazıdırıyoruz.
            if ($query->row()):
                // güncelleme katmanı
                $this->db->where('metakey', $metakey);
                $this->db->update('options', array('metavalue' => $metavalue));
            else:
                // yeni oluşturma katmanı
                $this->db->insert('options', array('metakey' => $metakey, 'metavalue' => $metavalue, 'orderby' => $order++));
            endif;
        endforeach;
        return TRUE;
    } // end setGeneralSettingsR_Model( $parametre )
    
    /**
     * Sosyal Medya Linklerini Ekliyoruz.
     */
    public function setSosialMediaLinksR_Model( $parametre )
    {
        $parametre = array(
            '_sosial_media_link' => serialize($parametre),
        );
        
        $order = 1;
        foreach ($parametre AS $metakey => $metavalue):
            // post ile gelen metavalue değerlerinin var olup olmadığını kontrol ediyoruz.
            $query = $this->db->get_where('options', array('metakey' => $metakey)); 
            // burada ise kontrol ettiğimiz değerler varsa güncelliyor yok ise yenisini yazıdırıyoruz.
            if ($query->row()):
                // güncelleme katmanı
                $this->db->where('metakey', $metakey);
                $this->db->update('options', array('metavalue' => $metavalue));
            else:
                // yeni oluşturma katmanı
                $this->db->insert('options', array('metakey' => $metakey, 'metavalue' => $metavalue, 'orderby' => $order++));
            endif;
        endforeach;
        return TRUE;
    } // end setGeneralSettingsR_Model( $parametre )
    
    
    /**
     * Facebook Yayınlama Ayarları Ekliyoruz.
     */
    public function setFacebookSettingsR_Model( $parametre )
    {
        $order = 1;
        foreach ($parametre AS $metakey => $metavalue):
            // post ile gelen metavalue değerlerinin var olup olmadığını kontrol ediyoruz.
            $query = $this->db->get_where('options', array('metakey' => $metakey)); 
            // burada ise kontrol ettiğimiz değerler varsa güncelliyor yok ise yenisini yazıdırıyoruz.
            if ($query->row()):
                // güncelleme katmanı
                $this->db->where('metakey', $metakey);
                $this->db->update('options', array('metavalue' => $metavalue));
            else:
                // yeni oluşturma katmanı
                $this->db->insert('options', array('metakey' => $metakey, 'metavalue' => $metavalue, 'orderby' => $order++));
            endif;
        endforeach;
        return TRUE;
    } // end setFacebookSettingsR_Model( $parametre )

################################################################################
######################### PAGES SETTINGS OPTIONS ###############################
################################################################################
    /**
     * Yeni Sayfa Eklediğimiz Function
     * @param type $parametre
     * @param type $PostsPhoto
     * @param type $userId
     * @return boolean
     */
    public function setNewPagesAddsR_Model( $parametre, $PostsPhoto, $userId )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $PostLastIdx = $this->db->limit(1)->order_by("postid", "desc")->get('posts')->result();
        
        $PostsPagesAdd = array(
            'postauthor'    => $userId,
            'postitle'      => $postitle,
            'postcontent'   => $postcontent,
            'poststatus'    => $poststatus,
            'postviews'     => $postviews,
            'commentstatus' => 'open',
            'pingstatus'    => 'open',
            'postseoname'   => SeoLink( $postitle ),
            'postparent'    => 0,
            'posturi'       => '?page_id=' . ($PostLastIdx[0]->postid + 1),
            'menuviews'     => $menuviews,
            'menuorder'     => $menuorder,
            'postype'       => 'pages',
            'langselect'    => $langselect
        );
        
        $PostMetaPagesAdd = array(
            '__postsphoto' => serialize($PostsPhoto),
            '__postpagetemplate'=> $__pagetemplate,
        );
        
        /* Pages verilerini Ana Tabloya Kaydediyoruz. */
        $PagesAdd = $this->db->insert('posts', $PostsPagesAdd);
        $PostLastId = $this->db->insert_id();
        if($PagesAdd):
            foreach($PostMetaPagesAdd AS $PostMetaKey => $PostMetaValue):
                $this->db->insert('postmeta', array('postid' => $PostLastId, 'metakey' => $PostMetaKey, 'metavalue' => $PostMetaValue));
            endforeach;
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewPagesAddsR_Model( $parametre, $PostsPhoto, $userId )
    
    /**
     * Mevcut Sayfayı güncelleiyoruz Function
     * @param type $parametre
     * @param type $PostsPhoto
     * @param type $userId
     * @return boolean
     */
    public function setEditPagesAddsR_Model( $PagesId, $parametre, $PostsPhoto, $userId )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $PostsPagesAdd = array(
            'postauthor'    => $userId,
            'postitle'      => $postitle,
            'postcontent'   => $postcontent,
            'poststatus'    => $poststatus,
            'postviews'     => $postviews,
            'commentstatus' => 'open',
            'pingstatus'    => 'open',
            'postseoname'   => SeoLink( $postitle ),
            'postparent'    => 0,
            'posturi'       => '?page_id=' . $PagesId,
            'menuviews'     => $menuviews,
            'menuorder'     => $menuorder,
            'postype'       => 'pages',
            'langselect'    => $langselect
        );
        
        /* Geçici Olarak kullandım burası geşiltirilecek. */
        if(!empty($PostsPhoto['file_name'])):
           $PostMetaPagesAdd = array(
                '__postsphoto' => serialize($PostsPhoto),
                '__postpagetemplate'=> $__pagetemplate,
            );
        else:
            $PostMetaPagesAdd = array(
                //'__postspagesphoto' => serialize($PostsPhoto),
                '__postpagetemplate'=> $__pagetemplate,
            );
        endif;        
        
        /* Pages verilerini Ana Tabloya Düzenliyoruz. */
        $PagesAdd = $this->db->where('postid', $PagesId)
                             ->update('posts', $PostsPagesAdd);
                             

        if($PagesAdd):
            foreach($PostMetaPagesAdd AS $PostMetaKey => $PostMetaValue):
                $this->db->where(array('postid' => $PagesId, 'metakey' => $PostMetaKey))
                         ->update('postmeta', array('metakey' => $PostMetaKey, 'metavalue' => $PostMetaValue));
            endforeach;
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setEditPagesAddsR_Model( $PagesId, $parametre, $PostsPhoto, $userId )
    
    /**
     * Pages Listesinden Siliyoruz derken db den komple değil sadece
     * listeden kaldırıyoruz veya renk değiştiriyoruz.
     * @param type $postid
     */
    public function setClearPagesAddsR_Model( $postid )
    {
        $PostPagesClear = $this->db->where('postid', $postid)
                                   ->update('posts', array('poststatus' => 'deleted'));
    } // end setClearPagesAddsR_Model()
    
    /**
     * Silme işlemini geri alıyoruz.
     * @param type $postid
     */
    public function setReplyPagesAddsR_Model( $postid )
    {
        $PostPagesReply = $this->db->where('postid', $postid)
                                   ->update('posts', array('poststatus' => 'publish'));
    } // end setReplyPagesAddsR_Model()
    
    /**
     * Sayfa Yayındamı değilmi Bootstrap Switch ile kontrol ediyoruz.
     * @param type $parametre
     */
    public function setNewPagesStatusR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $PostPagesStatus = $this->db->where('postid', $postid)
                                    ->update('posts', array('poststatus' => $poststatus));
        if($PostPagesStatus):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewPagesStatusR_Model( $parametre )
    
################################################################################
######################### CATEGORYS SETTINGS OPTIONS ###########################
################################################################################
    /**
     * Yeni Kategori Eklediğimiz Function
     * @param type $parametre
     * @param type $PostsPhoto
     * @param type $userId
     * @return boolean
     */
    public function setNewCategorysAddsR_Model( $parametre, $PostsPhoto, $userId )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $ArrayMerge = array(
            'categoryseoname' => SeoLink($categorytitle),
            'categoryphoto' => serialize($PostsPhoto),
        );
        
        $parametre = array_merge($parametre, $ArrayMerge);
        $CategoryControl = $this->db->get_where('categorys', array('categoryseoname' => $ArrayMerge['categoryseoname']));
        if($CategoryControl->row()):
            return FALSE;
        else:
            /* Kategori verilerini Ana Tabloya Kaydediyoruz. */
            $CategorysAdd = $this->db->insert('categorys', $parametre);
            if($CategorysAdd):
                return TRUE;
            else:
                return FALSE;
            endif;
        endif;        
    } // end setNewCategorysAddsR_Model( $parametre, $PostsPhoto, $userId )
    
    /**
     * Mevcut Sayfayı güncelleiyoruz Function
     * @param type $parametre
     * @param type $PostsPhoto
     * @param type $userId
     * @return boolean
     */
    public function setEditCategorysAddsR_Model( $CategorysId, $parametre, $PostsPhoto, $userId )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        /* Geçici Olarak kullandım burası geşiltirilecek. */
        if(!empty($PostsPhoto['file_name'])):
           $ArrayMerge = array(
                'categoryseoname' => SeoLink($categorytitle),
                'categoryphoto' => serialize($PostsPhoto),
            );
            unset($parametre['__postphotofullpath']);
        else:
            $ArrayMerge = array(
                'categoryseoname' => SeoLink($categorytitle),
            );
            unset($parametre['__postphotofullpath']);
        endif;
        
        $parametre = array_merge($parametre, $ArrayMerge);
        /* Kategori verilerini Ana Tabloya Kaydediyoruz. */
        $CategorysAdd = $this->db->where('categoryid', $CategorysId)
                                 ->update('categorys', $parametre);
        if($CategorysAdd):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setEditCategorysAddsR_Model( $PagesId, $parametre, $PostsPhoto, $userId )
    
    /**
     * Kategori Listesinden Siliyoruz derken db den komple değil sadece
     * listeden kaldırıyoruz veya renk değiştiriyoruz.
     * @param type $postid
     */
    public function setClearCategorysAddsR_Model( $postid )
    {
        $CategoryClear = $this->db->where('categoryid', $postid)
                                   ->update('categorys', array('categorystatus' => 'deleted'));
    } // end setClearCategorysAddsR_Model( $postid )
    
    /**
     * Silme işlemini geri alıyoruz.
     * @param type $postid
     */
    public function setReplyCategorysAddsR_Model( $postid )
    {
        $PostPagesReply = $this->db->where('categoryid', $postid)
                                   ->update('categorys', array('categorystatus' => 'publish'));
    } // end setReplyCategorysAddsR_Model( $postid )
    
################################################################################
######################### BLOGS SETTINGS OPTIONS ###############################
################################################################################
    /**
     * Yeni Blog Eklediğimiz Function
     * @param type $parametre
     * @param type $PostsPhoto
     * @param type $userId
     * @return boolean
     */
    public function setNewBlogsAddsR_Model( $parametre, $PostsPhoto, $userId )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $PostLastIdx = $this->db->limit(1)->order_by("postid", "desc")->get('posts')->result();
        
        $PostsPagesAdd = array(
            'postauthor'    => $userId,
            'postitle'      => $postitle,
            'postcontent'   => $postcontent,
            'poststatus'    => $poststatus,
            'postviews'     => $postviews,
            'commentstatus' => 'open',
            'pingstatus'    => 'open',
            'postseoname'   => SeoLink( $postitle ),
            'postparent'    => 0,
            'posturi'       => '?blog_id=' . ($PostLastIdx[0]->postid + 1),
            'menuorder'     => 0,
            'postype'       => 'blogs',
            'langselect'    => $langselect
        );
        
        $PostMetaPagesAdd = array(
            '__postsphoto' => serialize($PostsPhoto),
            '__postpagetemplate'=> 'default',
        );
        
        /* Pages verilerini Ana Tabloya Kaydediyoruz. */
        $PagesAdd = $this->db->insert('posts', $PostsPagesAdd);
        $PostLastId = $this->db->insert_id();
        if($PagesAdd):
            foreach($PostMetaPagesAdd AS $PostMetaKey => $PostMetaValue):
                $this->db->insert('postmeta', array('postid' => $PostLastId, 'metakey' => $PostMetaKey, 'metavalue' => $PostMetaValue));
            endforeach;
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewBlogsAddsR_Model( $parametre, $PostsPhoto, $userId )
    
    /**
     * Mevcut Blogu güncelleiyoruz Function
     * @param type $parametre
     * @param type $PostsPhoto
     * @param type $userId
     * @return boolean
     */
    public function setEditBlogsAddsR_Model( $PagesId, $parametre, $PostsPhoto, $userId )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $PostsBlogsAdd = array(
            'postauthor'    => $userId,
            'postitle'      => $postitle,
            'postcontent'   => $postcontent,
            'poststatus'    => $poststatus,
            'postviews'     => $postviews,
            'commentstatus' => 'open',
            'pingstatus'    => 'open',
            'postseoname'   => SeoLink( $postitle ),
            'postparent'    => 0,
            'posturi'       => '?page_id=' . $PagesId,
            'menuorder'     => 0,
            'postype'       => 'blogs',
            'langselect'    => $langselect
        );
        
        /* Geçici Olarak kullandım burası geşiltirilecek. */
        if(!empty($PostsPhoto['file_name'])):
           $PostMetaBlogsAdd = array(
                '__postsphoto' => serialize($PostsPhoto),
                '__postpagetemplate'=> 'default',
            );
        else:
            $PostMetaBlogsAdd = array(
                //'__postspagesphoto' => serialize($PostsPhoto),
                '__postpagetemplate'=> 'default',
            );
        endif;        
        
        /* Pages verilerini Ana Tabloya Düzenliyoruz. */
        $BlogsAdd = $this->db->where('postid', $PagesId)
                             ->update('posts', $PostsBlogsAdd);
                             

        if($BlogsAdd):
            foreach($PostMetaBlogsAdd AS $PostMetaKey => $PostMetaValue):
                $this->db->where(array('postid' => $PagesId, 'metakey' => $PostMetaKey))
                         ->update('postmeta', array('metakey' => $PostMetaKey, 'metavalue' => $PostMetaValue));
            endforeach;
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setEditPagesAddsR_Model( $PagesId, $parametre, $PostsPhoto, $userId )
    
    /**
     * Pages Listesinden Siliyoruz derken db den komple değil sadece
     * listeden kaldırıyoruz veya renk değiştiriyoruz.
     * @param type $postid
     */
//    public function setClearPagesAddsR_Model( $postid )
//    {
//        $PostPagesClear = $this->db->where('postid', $postid)
//                                   ->update('posts', array('poststatus' => 'deleted'));
//    } // end setClearPagesAddsR_Model()
    
    /**
     * Silme işlemini geri alıyoruz.
     * @param type $postid
     */
//    public function setReplyPagesAddsR_Model( $postid )
//    {
//        $PostPagesReply = $this->db->where('postid', $postid)
//                                   ->update('posts', array('poststatus' => 'publish'));
//    } // end setReplyPagesAddsR_Model()
    
    /**
     * Blog Yayındamı değilmi Bootstrap Switch ile kontrol ediyoruz.
     * @param type $parametre
     */
    public function setNewBlogsStatusR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $PostBlogsStatus = $this->db->where('postid', $postid)
                                    ->update('posts', array('poststatus' => $poststatus));
        if($PostBlogsStatus):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewPagesStatusR_Model( $parametre )
    
################################################################################
######################### SLIDERS SETTINGS OPTIONS #############################
################################################################################
    
    /**
     * Yeni Slider Eklediğimiz Function
     * @param type $parametre
     * @param type $PostsPhoto
     * @param type $userId
     * @return boolean
     */
    public function setNewSlidersAddsR_Model( $parametre, $PostsPhoto, $userId )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        unset($parametre['_wysihtml5_mode']);
        
        $PostLastIdx = $this->db->limit(1)->order_by("postid", "desc")->get('posts')->result();
        
        $PostsSlidersAdd = array(
            'postauthor'    => $userId,
            'postitle'      => $postitle,
            'postcontent'   => $postcontent,
            'poststatus'    => $poststatus,
            'postviews'     => $postviews,
            'commentstatus' => 'open',
            'pingstatus'    => 'open',
            'postseoname'   => SeoLink( $postitle ),
            'postparent'    => 0,
            'posturi'       => '?slider_id=' . ($PostLastIdx[0]->postid + 1),
            'postype'       => 'sliders',
            'langselect'    => $langselect
        );
        
        $PostMetaSlidersAdd = array(
            '__postsphoto' => serialize($PostsPhoto),
            '__postpagetemplate'=> 'default',
        );
        
        /* Sliders verilerini Ana Tabloya Kaydediyoruz. */
        $SlidersAdd = $this->db->insert('posts', $PostsSlidersAdd);
        $PostLastId = $this->db->insert_id();
        if($SlidersAdd):
            foreach($PostMetaSlidersAdd AS $PostMetaKey => $PostMetaValue):
                $this->db->insert('postmeta', array('postid' => $PostLastId, 'metakey' => $PostMetaKey, 'metavalue' => $PostMetaValue));
            endforeach;
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewSlidersAddsR_Model( $parametre, $PostsPhoto, $userId )
    
    /**
     * Mevcut Slideri güncelleiyoruz Function
     * @param type $parametre
     * @param type $PostsPhoto
     * @param type $userId
     * @return boolean
     */
    public function setEditSlidersAddsR_Model( $SlidersId, $parametre, $PostsPhoto, $userId )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $PostsSlidersAdd = array(
            'postauthor'    => $userId,
            'postitle'      => $postitle,
            'postcontent'   => $postcontent,
            'poststatus'    => $poststatus,
            'postviews'     => $postviews,
            'commentstatus' => 'open',
            'pingstatus'    => 'open',
            'postseoname'   => SeoLink( $postitle ),
            'postparent'    => 0,
            'posturi'       => '?slider_id=' . $SlidersId,
            'postype'       => 'sliders',
            'langselect'    => $langselect
        );
        
        /* Geçici Olarak kullandım burası geşiltirilecek. */
        if(!empty($PostsPhoto['file_name'])):
           $PostMetaSlidersAdd = array(
                '__postsphoto' => serialize($PostsPhoto),
               '__postpagetemplate'=> 'default',
            );
        endif;        
        
        /* Slider verilerini Ana Tabloya Düzenliyoruz. */
        $SlidersAdd = $this->db->where('postid', $SlidersId)
                             ->update('posts', $PostsSlidersAdd);
                             

        if($SlidersAdd):
            foreach($PostMetaSlidersAdd AS $PostMetaKey => $PostMetaValue):
                $this->db->where(array('postid' => $SlidersId, 'metakey' => $PostMetaKey))
                         ->update('postmeta', array('metakey' => $PostMetaKey, 'metavalue' => $PostMetaValue));
            endforeach;
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setEditSlidersAddsR_Model( $SlidersId, $parametre, $PostsPhoto, $userId )
    
    /**
     * Slider Listesinden Siliyoruz derken db den komple değil sadece
     * listeden kaldırıyoruz veya renk değiştiriyoruz.
     * @param type $postid
     */
    public function setClearSlidersAddsR_Model( $postid )
    {
        $PostSlidersClear = $this->db->where('postid', $postid)
                                   ->update('posts', array('poststatus' => 'deleted'));
    } // end setClearSlidersAddsR_Model( $postid )
    
    /**
     * Silme işlemini geri alıyoruz.
     * @param type $postid
     */
    public function setReplySlidersAddsR_Model( $postid )
    {
        $PostSlidersReply = $this->db->where('postid', $postid)
                                   ->update('posts', array('poststatus' => 'publish'));
    } // end setReplySlidersAddsR_Model( $postid )
    
    /**
     * Slider Yayındamı değilmi Bootstrap Switch ile kontrol ediyoruz.
     * @param type $parametre
     */
    public function setNewSlidersStatusR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $PostSliderStatus = $this->db->where('postid', $postid)
                                    ->update('posts', array('poststatus' => $poststatus));
        if($PostSliderStatus):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewSlidersStatusR_Model( $parametre )
    
################################################################################
######################### USERS SETTINGS OPTIONS ###############################
################################################################################
    
    /**
     * Yeni Kullanıcı Eklediğimiz Function
     * @param type $parametre
     * @param type $PostsPhoto
     * @param type $userId
     * @return boolean
     */
    public function setNewUsersAddsR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $Menu = $this->db->select('mid')->from('adminmenu')->get()->result();
        $Page = $this->db->select('postid')->from('posts')->where('postype', 'pages')->get()->result();
        
        $UsersAdd = array(
            'username'      => $username,
            'useremail'     => $useremail,
            'userpass'      => UserPassCreate( $userpass ),
            'userseoname'   => SeoLink( $username ),
            'parentid'      => $parentid,
            'userviews'     => 'publish',
            'userapikey'    => ApiKeyCreate( $username, UserPassCreate( $userpass ) ),
            'userstatus'    => 'publish',
            'fbid'           => 0,            
        );
        $userControl = $this->db->get_where('users', array('userseoname' => SeoLink( $username )));
        if($userControl->row()):
            /* Kullanıcı Kayıtlı ise yeniden kayıt etmiyoruz.*/
            return FALSE;
        else:
            $this->db->insert('users', $UsersAdd);
            /* kullanıcı kaydı yapılırken izinler için de gerekli alanları oluşturuyoruz. */
            $UserLastId = $this->db->insert_id();
            foreach($Menu AS $menu):
                $this->db->insert('userroles', array('userid' => $UserLastId, 'typeid' => $menu->mid, 'typetitle' => 'menu'));
            endforeach;
            foreach($Page AS $page):
                $this->db->insert('userroles', array('userid' => $UserLastId, 'typeid' => $page->postid, 'typetitle' => 'pages'));
            endforeach;
            return TRUE;
        endif;
    } // end setNewUsersAddsR_Model( $parametre )
    
    /**
     * Mevcut Kullanıcıyı güncelleiyoruz Function
     * @param type $parametre
     * @param type $userId
     * @return boolean
     */
    public function setEditUsersAddsR_Model( $parametre, $userId )
    {
        $userseoname = array(
            'userseoname'   => SeoLink($parametre['username']),
            'userpass'      => UserPassCreate( $parametre['userpass'] )
        );
        
        $parametre = array_merge($parametre, $userseoname);
        /* Bu kısım fromlardan gelen verileri otomatik ayıklıyor */
        if($this->set_valueKeyUpdate( $parametre, 'userid', $userId, 'users' )):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setEditUsersAddsR_Model( $parametre, $userId )
    
    /**
     * Slider Listesinden Siliyoruz derken db den komple değil sadece
     * listeden kaldırıyoruz veya renk değiştiriyoruz.
     * @param type $postid
     */
    public function setClearUsersAddsR_Model( $userid )
    {
        if(in_array($userid, $this->config->item('admin_id'))):
            return FALSE;
        else:
            $PostSlidersClear = $this->db->where('userid', $userid)
                                         ->update('users', array('userviews' => 'deleted'));
            return TRUE;
        endif;
    } // end setClearUsersAddsR_Model( $postid )
    
    /**
     * Silme işlemini geri alıyoruz.
     * @param type $postid
     */
    public function setReplyUsersAddsR_Model( $userid )
    {
        $PostSlidersReply = $this->db->where('userid', $userid)
                                     ->update('users', array('userviews' => 'publish'));
    } // end setReplyUsersAddsR_Model( $postid )
    
    /**
     * Slider Yayındamı değilmi Bootstrap Switch ile kontrol ediyoruz.
     * @param type $parametre
     */
    public function setNewUsersStatusR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $PostUsersStatus = $this->db->where('userid', $userid)
                                    ->update('users', array('userviews' => $userviews));
        if($PostUsersStatus):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewSlidersStatusR_Model( $parametre )
    
/******************************************************************************/
/*********************** Users Roles Setting **********************************/
/******************************************************************************/
    
    /**
     * Kullanıcının Admin Menusu için yetkilendirme ayarlarını
     * tabloya yazıyor veya güncelliyoruz.
     * @param type $parametre
     * @param type $userId
     */
    public function setNewUsersRolesMenuR_Model( $parametre, $userId )
    {
        $this->roles( $parametre );
    } // end setNewUsersRolesMenuR_Model( $parametre )
    
    /**
     * Kullanıcının Sayfalar için yetkilendirme ayarlarını
     * tabloya yazıyor veya güncelliyoruz.
     * @param type $parametre
     * @param type $userId
     */
    public function setNewUsersRolesPagesR_Model( $parametre, $userId )
    {
        $this->roles( $parametre );
    } // end setNewUsersRolesPagesR_Model( $parametre, $userId )
    
################################################################################
######################### MESSAGES SETTINGS OPTIONS ############################
################################################################################
    
    public function setNewMailBoxSettingsR_Model( $parametre )
    {
        $order = $this->db->limit(1)->order_by("orderby", "desc")->get('options')->result();
        $OrderBY = ($order[0]->orderby + 1);
        foreach ($parametre AS $metakey => $metavalue):
            // post ile gelen metavalue değerlerinin var olup olmadığını kontrol ediyoruz.
            $query = $this->db->get_where('options', array('metakey' => $metakey)); 
            // burada ise kontrol ettiğimiz değerler varsa güncelliyor yok ise yenisini yazıdırıyoruz.
            if ($query->row()):
                // güncelleme katmanı
                $this->db->where('metakey', $metakey);
                $this->db->update('options', array('metavalue' => $metavalue));
            else:
                // yeni oluşturma katmanı
                $this->db->insert('options', array('metakey' => $metakey, 'metavalue' => $metavalue, 'orderby' => $OrderBY++));
            endif;
        endforeach;
        return TRUE;
    } // end setNewMailBoxSettingsR_Model( $parametre )

################################################################################
######################### ADMIN MENUS SETTINGS OPTIONS #########################
################################################################################
    
    /**
     * 
     */
    public function setNewAdminOrderByListsR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        foreach($item AS $key => $value):
            $AdminMenuOrderBy = $this->db->where('mid', $value)
                                     ->update('adminmenu', array('menuorder' => ($key + 1)));
        endforeach;
        if($AdminMenuOrderBy):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewAdminOrderByListsR_Model( $parametre )
    /**
     * 
     * @param type $parametre
     * @return boolean
     */
    public function setNewAdminIconNameR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $AdminMenuIcon = $this->db->where('mid', $mid)
                                  ->update('adminmenu', array('menuicon' => $menuicon));
        if($AdminMenuIcon):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewAdminIconNameR_Model( $parametre )
    
    /**
     * 
     */
    public function setNewAdminMenuOpenR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;

        $AdminMenuOpen = $this->db->where('mid', $mid)
                                  ->update('adminmenu', array('menuopen' => $menuopen));
        if($AdminMenuOpen):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewAdminMenuOpenR_Model( $parametre )
    
    public function setNewAdminMenuStatusR_Model( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;

        $AdminMenuStatus = $this->db->where('mid', $mid)
                                    ->update('adminmenu', array('mstatus' => $mstatus));
        if($AdminMenuStatus):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewAdminMenuStatusR_Model()
    
    public function setNewAdminsMenusR_Model( $parametre )
    {
        $AdminsMenus = $this->db->insert('adminmenu', $parametre);
        if($AdminsMenus):
            return TRUE;
        else:
            return FALSE;
        endif;
    } // end setNewAdminsMenusR_Model( $parametre )
    
/******************************************************************************/
/*                GEÇİCİ ROLES FUNCTION                                       */
/******************************************************************************/    
    
    private function roles( $parametre )
    {
        if(!empty($parametre)):
            extract($parametre);
        endif;
        
        $Part1 = explode('_', $userRolesvalue);
        $Part2 = explode('|', $Part1[1]);
        
        $RolesControl = $this->db->get_where('userroles', array('typetitle' => $Part2[0], 'typeid' => $Part2[1], 'userid' => $userid));
        if($RolesControl->row()):
            /* == Bu kısımda kullanıcıya ait izin tabloda var ise güncelliyoruz == */
            /* Kullanıcının okuma iznini güncelliyoruz. */
            if($Part1[0] == 'read'):
                $this->db->where(array('userid' => $userid, 'typetitle' => $Part2[0], 'typeid' => $Part2[1]))
                         ->update('userroles', array('read' => $value));
            endif;
        else:
            /* == Bu kısımda kullanıcıya ait izin tabloda yok ise yazıyoruz == */
            /* Kullanıcıya okuma iznini veriyoruz. */
            if($Part1[0] == 'read'):
                $this->db->insert('userroles', array('typetitle' => $Part2[0], 'typeid' => $Part2[1], 'userid' => $userid, 'read' => $value));
            endif;
        endif;
        
    }
    
/* Geçici private function */
    private function set_valueKeyUpdate( $parametre, $Column, $xId, $dbTable )
    {
        if($parametre):
            foreach($parametre AS $key => $value):
                if(!strstr(substr($key, 0, 1), '_')):
                    /* Bu kısım Ana Tablo için */
                    if($value):
                        $this->db->where($Column, $xId)
                                 ->update($dbTable, array($key => $value));
                    endif;
                else:
                    /* Bu Kısım Multi Tablo için */
                    if($value):

                    endif;
                endif;
            endforeach;
            return TRUE;
        endif;
    } // end set_valueKeyUpdate( $parametre, $Column, $xId, $dbTable )
    
} // end class Recordscp_Model extends CI_Model
