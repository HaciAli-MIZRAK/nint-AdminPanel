<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * getTimeToDate Hepler
 * @author Hacı Ali MIZRAK
 */

/**
 * 
 * @param type $TimeToDate
 * @return type
 */
function getTimeToDate( $TimeToDate )
{
    $Days   = array( 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi', 'Pazar' );
    $Months = array( 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık' );
    if($TimeToDate):
        $Years  = date('Y', strtotime($TimeToDate));
        $Month  = date('m', strtotime($TimeToDate));
        $Dayc    = date('N', strtotime($TimeToDate));
        $Day    = date('d', strtotime($TimeToDate));
        return $Day . ' ' . $Months[$Month - 1] . ' ' . $Years . ' ' . $Days[$Dayc - 1];
    endif;
} // end getTimeToDate( $TimeToDate )


function getPostBlogsDate( $TimeToDate, $Order )
{
    $Months = array( 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık' );
    if($TimeToDate):
        $Years  = date('Y', strtotime($TimeToDate));
        $Month  = date('m', strtotime($TimeToDate));
        $Dayc    = date('N', strtotime($TimeToDate));
        $Day    = date('d', strtotime($TimeToDate));
        if($Order == 'Month'):
           return $Day .' - ' . $Months[$Month - 1]; 
        endif;
        if($Order == 'Year'):
           return $Years; 
        endif;        
    endif;
}
