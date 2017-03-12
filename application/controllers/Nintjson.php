<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * NintJson Admin Panelimiz için Json Çıktı için Kullanacağımız alan Class
 * @author Hacı Ali MIZRAK
 */


class Nintjson extends Admin_Controller
{
    /* Sabit değişkenler */
    public $data = array();
    
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loadercp_Model');
        header('Content-Type: application/json');
    } // end __construct()
    
    public function index()
    {
    } // end index()
    
    public function OnlineUsersLists()
    {
        $this->data['sessionLists'] = $this->Loadercp_Model->getSessionListsL_Model();
        for($i = 0;$i < count($this->data['sessionLists']);$i++):
            if(strstr($this->data['sessionLists'][$i]->data, 'username')):
                if($this->OnlineUserType( $this->data['sessionLists'][$i]->data )):
                    $userType = '<span class="badge" style="background: #3c8dbc; border-radius: 50%; padding-top: 17px; padding-left: 25px; padding-right: 25px; padding-bottom: 17px;"><i class="fa fa-facebook fa-3x"></i></span>';
                else:
                    $userType = '<span class="badge" style="background: #3c8dbc; border-radius: 50%; padding-top: 17px; padding-left: 25px; padding-right: 25px; padding-bottom: 17px;"><i class="fa fa-user fa-3x"></i></span>';
                endif;
                $Last   = $this->LastActivityTimes( $this->data['sessionLists'][$i]->data );
                $Actual = $this->ActualActivityTimes( $this->data['sessionLists'][$i]->timestamp );
                $TimeDifference = $this->TimeDifference( $this->data['sessionLists'][$i]->timestamp, $Last );
                $TimesDate['OnlineUserLists'][] = array(
                    'Last' => date('H:i:s', $Last),
                    'Actual' => $Actual,
                    'userNames' => $this->OnlineUsername( $this->data['sessionLists'][$i]->data ),
                    'UserPages' => $this->OnlinePages( $this->data['sessionLists'][$i]->data ),
                    'UserPicture' => $userType,
                    'TimeDifference' => $TimeDifference,
                    'ipAddress' => $this->data['sessionLists'][$i]->ip_address
                );
            endif;
        endfor;
        if(isset($TimesDate)):
            $UserLists = $TimesDate;
        else:
            $UserLists['OnlineUserLists'] = 0;
        endif;
        echo json_encode( $UserLists);
    } // end OnlineUsersLists()
    
    /**
     * 
     */
    public function EndUseResgisterLists()
    {
        $this->data['LastUserRegisterLists'] = $this->Loadercp_Model->getLastUserRegisterListsL_Model();
        for($i = 0;$i < count($this->data['LastUserRegisterLists']);$i++):
            if($this->data['LastUserRegisterLists'][$i]->fbid):
                $userType = '<span class="badge" style="background: #3c8dbc; border-radius: 50%; padding-top: 17px; padding-left: 25px; padding-right: 25px; padding-bottom: 17px;"><i class="fa fa-facebook fa-3x"></i></span>';
            else:
                $userType = '<span class="badge" style="background: #3c8dbc; border-radius: 50%; padding-top: 17px; padding-left: 25px; padding-right: 25px; padding-bottom: 17px;"><i class="fa fa-user fa-3x"></i></span>';
            endif;
            $LastRegister[] = array(
                'username'      => $this->data['LastUserRegisterLists'][$i]->username,
                'registered'    => date('H:i:s' , strtotime($this->data['LastUserRegisterLists'][$i]->userregistered)),
                'userpicture'   => $userType,
            );
        endfor;
        if(isset($LastRegister)):
            $LastRegister = $LastRegister;
        else:
            $LastRegister[] = 0;
        endif;     
        echo json_encode($LastRegister);
    } // end EndUseResgisterLists()

} // end class NintJson extends Admin_Controller
