<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * Inport ile Bazı Gerekli verileri içeri alacağız Class
 * @author Hacı Ali MIZRAK
 */

class Import extends Public_Controller
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
     * Fontawesome için ayarlanmıştır ve genişletilebilir.
     * font-icon yükleme alanı Burada db kontrollü menü seçenekleri için font-icon
     * yüklemesi yapıyoruz.
     */
    public function FontawesomeInports()
    {
        $string = read_file('./assets/repositories/txt/fontawesome-icon.txt');
        $par = explode(';', $string);
        for($i = 0;$i < count($par);$i++):
            $par1[] = explode(':', $par[$i]);   
        endfor;
        
        $kaldir = array('\\', '"', '.', '{', '}');
        for($x = 0;$x < count($par1) - 1;$x++):
            $FonTitle = str_replace($kaldir, '', $par1[$x][0]); 
            $FontContent = str_replace($kaldir, '', $par1[$x][2]);
            $FontPrefix = 'fa';
            // post ile gelen metavalue değerlerinin var olup olmadığını kontrol ediyoruz.
            $query = $this->db->get_where('fonticon', array('fontprefix' => trim($FontPrefix), 'fontitle' => trim($FonTitle))); 
            // burada ise kontrol ettiğimiz değerler varsa güncelliyor yok ise yenisini yazıdırıyoruz.
            if ($query->row()):
             else:
                // yeni oluşturma katmanı
                $this->db->insert('fonticon', array('fontprefix' => trim($FontPrefix), 'fontitle' => trim($FonTitle), 'content' => trim($FontContent)));
            endif;
        endfor;        
    } // end FontawesomeInports()
    
    /**
     * 
     */
    public function TimeZonesImports()
    {
        $string = read_file('./assets/repositories/txt/timezones.txt');
        $par = explode('<option value=', $string);
        for($i = 1;$i < count($par);$i++):
            $par1[] = explode('>', $par[$i]);   
        endfor;

        for($x = 0;$x < count($par1) - 1;$x++):
            $TimeZoneName   = str_replace('"', '', $par1[$x][0]); 
            $TimeZonePeriod = str_replace('"', '', $par1[$x][1]);
            // post ile gelen metavalue değerlerinin var olup olmadığını kontrol ediyoruz.
            $query = $this->db->get_where('timezones', array('tzname' => trim($TimeZoneName))); 
            // burada ise kontrol ettiğimiz değerler varsa güncelliyor yok ise yenisini yazıdırıyoruz.
            if ($query->row()):
             else:
                // yeni oluşturma katmanı
                $this->db->insert('timezones', array('tzname' => trim($TimeZoneName), 'timeperiod' => trim($TimeZonePeriod)));
            endif;
        endfor; 
    } // end TimeZonesImports()
}
