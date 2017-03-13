Çalışan Örnek için: http://demo.nint.io/login/login.html
# nint-AdminPanel
Yeni Nesil Geliştirmekte olan Yönetim Paneli
Nint.io Yönetim Paneli Kullanım Kılavuzu Mevcut versiyon: 0.1.0
 Anasayfa Kılavuz
Giriş
Nint.IO Yönetim Paneli Bir süredir üzerinde çalıştığımız ve geliştirmeye devam ettiğimiz "Yeni Nesil Yönetim Panelini" sizlerin hizmetine sunuyoruz. Web Sitesi Hazırlayan veya Tasarlayan arkadaşlar için basit kullanışlı ve anlaşılır bir Yönetim Paneli. Bu panel sayesinde projelerinizi hızlı ve kısa bir sürede teslim etme imkanı bulabileceksiniz. Bunun yanında Müşterilerinizde Daha Kolay Kullanışlı ve profesyonel bir panel kullanma imkanına sahip olacaklar.

Panel Kod Dosyası Hiyerarşisi
							
	Kaynak Kod Klasör/dosya Hiyerarşisi

	Nint.io Admin Paneli
	├── cache\
	│   └── index.html
	├── config\
	│   ├── autoload.php
	│   ├── config.php
	│   ├── constants.php
	│   ├── database.php
	│   ├── doctypes.php
	│   ├── foreign_chars.php
	│   ├── hooks.php
	│   ├── index.html
	│   ├── memcached.php
	│   ├── migration.php
	│   ├── mimes.php
	│   ├── profiler.php
	│   ├── routes.php
	│   ├── smileys.php
	│   └── user_agents.php
	├── controllers\
	│   ├── import.php
	│   ├── index.html
	│   ├── Login.php
	│   ├── Nint.php
	│   ├── Nintcp.php
	│   ├── Nintjson.php
	│   └── Recordscp.php
	├── core\
	│   ├── index.html
	│   └── NINT_Controller.php
	├── helpers\
	│   ├── generalibs_helper.php
	│   ├── gettexts_helper.php
	│   ├── index.html
	│   ├── seolink_helper.php
	│   └── timetodate_helper.php
	├── hooks\
	│   ├── index.html
	│   └── Myclass.php
	├── index.html
	├── language\
	│   ├── index.html
	│   ├── locale\
	│   │   ├── ar.mo
	│   │   ├── ar.po
	│   │   ├── en.mo
	│   │   ├── en.po
	│   │   └── index.html
	├── libraries\
	│   ├── facebook\
	│   │   ├── BaseFacebook.php
	│   │   ├── Facebook.php
	│   │   └── fb_ca_chain_bundle.crt
	│   ├── Imap.php
	│   └── index.html
	├── logs\
	│   ├── index.html
	│   ├── log-2016-10-10.php
	│   ├── log-2016-10-11.php
	│   ├── log-2016-10-12.php
	│   ├── log-2016-10-13.php
	│   ├── log-2016-10-14.php
	│   ├── log-2016-10-15.php
	│   ├── log-2016-10-16.php
	│   ├── log-2016-10-17.php
	│   ├── log-2016-10-18.php
	│   ├── log-2016-10-19.php
	│   ├── log-2016-10-20.php
	│   ├── log-2016-10-21.php
	│   └── log-2016-10-22.php
	├── models\
	│   ├── index.html
	│   ├── Loadercp_Model.php
	│   ├── Login_Model.php
	│   ├── MenuGlobal_Model.php
	│   ├── Nintcp_Model.php
	│   └── Recordscp_Model.php
	├── third_party\
	│   └── index.html
	├── views\
	│   ├── admincp\
	│   │   ├── footer-top.php
	│   │   ├── footer.php
	│   │   ├── header-top.php
	│   │   ├── header.php
	│   │   └── includes\
	│   │       ├── blogs\
	│   │       │   ├──  blogs-adds.php
	│   │       │   ├──  blogs-alls.php
	│   │       │   └──  blogs-edits.php
	│   │       ├── categorys\
	│   │       │   ├── categorys-edits.php
	│   │       │   └── categorys.php
	│   │       ├── generals\
	│   │       │   ├── admins-menus.php
	│   │       │   ├── facebook-settings.php
	│   │       │   ├── general-settings.php
	│   │       │   └── sosialmedia-links.php
	│   │       ├── headerfolders\
	│   │       │   ├── menu-footer.php
	│   │       │   ├── menu-messages.php
	│   │       │   ├── menu-notification.php
	│   │       │   ├── menu-right-sidebar.php
	│   │       │   └── menu-tasks.php
	│   │       ├── mailbox\
	│   │       │   ├── mail-box.php
	│   │       │   ├── mail-menu.php
	│   │       │   ├── mail-read.php
	│   │       │   └── mailbox-settings.php
	│   │       ├── pages\
	│   │       │   ├── pages-adds.php
	│   │       │   ├── pages-alls.php
	│   │       │   └── pages-edits.php
	│   │       ├── sliders\
	│   │       │   ├── sliders-adds.php
	│   │       │   ├── sliders-alls.php
	│   │       │   └── sliders-edits.php
	│   │       ├── users\
	│   │       │   ├── rolesfolders\
	│   │       │   │   ├── admin-roles.php
	│   │       │   │   └── pages-roles.php
	│   │       │   ├── users-adds.php
	│   │       │   ├── users-alls.php
	│   │       │   ├── users-edits.php
	│   │       │   └── users-roles.php
	│   │       ├── index.php
	│   │       └── sidebar.php
	│   ├── blocked\
	│   ├── errors\
	│   │    ├── cli\
	│   │    │   ├── error_404.php
	│   │    │   ├── error_db.php
	│   │    │   ├── error_exception.php
	│   │    │   ├── error_general.php
	│   │    │   ├── error_php.php
	│   │    │   └── index.html
	│   │    ├── html\
	│   │    │   ├── error_404.php
	│   │    │   ├── error_db.php
	│   │    │   ├── error_exception.php
	│   │    │   ├── error_general.php
	│   │    │   ├── error_php.php
	│   │    │   └── index.html
	│   │    └── index.html
	│   ├── index.html
	│   ├── login\
	│   │   ├── login-footer.php
	│   │   ├── login-header.php
	│   │   └── login.php
	│   ├── nintweb\
	│   └── template\
	│       ├── blogTemplate.php
	│       ├── blueTemplate.php
	│       ├── contactTemplate.php
	│       ├── contactTemplate2.php
	│       └── redTemplate.php
							
						
Tasarımın Parçalanması
Sisteme Ekleyeceğiniz Tasarımınızın nasıl parçalanacağı ve hangi dosya isimlerini alacağını bu alandan bakabilirsiniz.
Sistem Gereksinimleri için bu dosyaların bulunması gerekmektedir. Kullanmasanız bile mutlaka dosya olarak oluşturmanız gerekmektedir.

header.php
header-top.php
index.php
pages.php
side-bar.php
footer.php
footer-top.php
Örnek header.php Dosyası: 
							
< !DOCTYPE html>
 < html lang="en">
     < head>
         < meta charset="utf-8" />
         < title> < ?php echo getOptionsParser( $webSiteOptions, '_sitetitle' ); ?> |  < ?php echo empty(uri_string()) ? _nint( 'Anasayfa' ) : $pageShow->postitle; ?> 

	  Bu değişken ile oan bulunduğunuz sayfa adını "title" alanında gösterebilmektesiniz.. $pageShow->postitle;
         < meta name="viewport" content="width=device-width, initial-scale=1.0" />
         < meta name="description" content=" < ?php echo getOptionsParser( $webSiteOptions, '_sitedescription' ); ?>">  //WebSite açıklamasını çekiyoruz.
         < meta name="keywords" content=" < ?php echo getOptionsParser( $webSiteOptions, '_sitekeywords' ); ?>">  //WebSite keywords ünü çekiyoruz.
         < link href=" < ?php echo base_url('assets/nintweb/newspaper/css/reset.css'); ?>" rel="stylesheet" />
         < link rel="stylesheet" href=" < ?php echo base_url('assets/nintweb/newspaper/css/flexslider.css'); ?>" type="text/css" media="screen" />
         < link rel="stylesheet" href=" < ?php echo base_url('assets/nintweb/newspaper/css/prettyPhoto.css'); ?>" type="text/css" media="screen" />
         < link rel="stylesheet" href=" < ?php echo base_url('assets/nintweb/newspaper/css/font-awesome.css'); ?>" type="text/css" media="all">
         < link rel="stylesheet" href=" < ?php echo base_url('assets/nintweb/newspaper/css/style.css'); ?>">
         < link href=" < ?php echo base_url('assets/nintweb/newspaper/css/responsive.css'); ?>" rel="stylesheet">
         < link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,300italic,400italic,700,600italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>  < !-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
         < !--[if IE 7]>
             < link rel="stylesheet" href=" < ?php echo base_url('assets/nintweb/newspaper/css/ie7.css'); ?>" type="text/css" media="all" />
         < ![endif]-->
         < !--[if lt IE 9]>
             < script src="http://html5shim.googlecode.com/svn/trunk/html5.js"> 
             < script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"> 
             < link rel="stylesheet" href=" < ?php echo base_url('assets/nintweb/newspaper/css/ie.css'); ?>" type="text/css" media="all" />
         < ![endif]-->
         < !-- Le fav and touch icons -->
         < link rel="shortcut icon" href=" < ?php echo base_url('assets/nintweb/newspaper/ img/favicon.ico'); ?>">
         < link rel="apple-touch-icon" href=" < ?php echo base_url('assets/nintweb/newspaper/ img/apple-touch-icon.png'); ?>">
         < link rel="apple-touch-icon" sizes="72x72" href=" < ?php echo base_url('assets/nintweb/newspaper/ img/apple-touch-icon-72x72.png'); ?>">
         < link rel="apple-touch-icon" sizes="114x114" href=" < ?php echo base_url('assets/nintweb/newspaper/ img/apple-touch-icon-114x114.png'); ?>">
     
     < body class="home-page">
         < div id="main-left">
             < div id="main-right">
                 < div class="wrapper">
							
						
Örnek header-top.php Dosyası: 
							
< header id="kp-header">
    < div id="kp-header-top">
        < nav id="main-nav" class="clearfix">
            < ?php echo $MainMenu; ?> // Bu değişken Menumuzu çekmektedir.
            < ?php if(!isset($login)): ?> // Bu değişken kullanıcı girişi yapılıp yapılmadığını kontrol ediyor.
            < ul id="main-menu" class="col-md-4 clearfix pull-right">
                < li>
                    < a href=" < ?php echo site_url( 'login/login' ); ?>"> < ?php echo _nint( 'Giriş Yap' ); ?> 
                
            
            < ?php else: ?>
            < ul id="main-menu" class="col-md-4 clearfix pull-right">
                < ?php if(!empty($admin)): ?> // Bu değişken kullanıcıya config dosyasından admin yetkisi verilmiş mi verilmemiş mi bunu kontrol ediyor.
                < li>
                    < a href=" < ?php echo site_url( 'nintcp/index' ); ?>"> < ?php echo _nint( 'Yönetim' ); ?> 
                
                < ?php endif; ?>
                < li>
                    < a href=" < ?php echo site_url( 'login/logout' ); ?>" onclick="return confirmLogout();"> < ?php echo _nint( 'Çıkış Yap' ); ?> 
                
            
            < ?php endif; ?>
        
     < !--kp-header-top-->
    < !-- ./ end login bar -->
    < div id="kp-header-bottom" class="clearfix">
        < div id="logo-image"> < a href=" < ?php echo base_url(); ?>"> < img src=" < ?php echo base_url('assets/nintweb/newspaper/placeholders/logo1.png'); ?>" alt="" />  
        < div class="top-head">
            < p> < ?php echo _nint( 'Bu Gün Yazılan Bloglar' ); ?>  < span class="kopa-square">  < span class="kopa-date"> < ?php echo getTimeToDate( date('Y-m-d') ); ?>  
            < div class="head-line clearfix">
                < h3 class="head-line-title">Just in 
                < div class="head-line-scroll">
                    < div class="flexslider" id="head-line-slider">
                        < ul class="slides">
                            < li> < a href="#">Hearst Partners with Gucci's Chime for Change Campaign  
                            < li> < a href="#">Hearst Partners with DG's Chime for Change Campaign  
                        < / ul>
                     < !--head-line-slider-->
                 < !--head-line-scroll-->
             < !--head-line-->
         < !--top-head-->
        < div id="kp-top-banner"> < a href="#"> < img src=" < ?php echo base_url('assets/nintweb/newspaper/placeholders/top-banner.png'); ?>" alt="" />  
     < !--kp-header-bottom-->    
 < !--kp-header-->
							
						
Örnek index.php Dosyası: 
Örnek Slider Alanı: 
Aşağıdaki Örnekte Görüldüğü gibi eğer tasarımımızda slider alanı var ise
aşağıdaki örnekte işaretlenmiş olan basit kod blogu ile sliderleri ekrana yansıta bilirsiniz.
Ayrıca Aşağıda Turuncu ile işaretlenmiş satırda "getPhotoParser()" ve "getMetaParser()" helper functionları kullanılmıştır. 
Tasarımın ilgili bölümünde bu mevcut dosyalardan birisi yer alması gerekiyor ise bu işlemide php nin normal "require_once 'side-bar.php'"
require veya require_once functionlarını kullanıyoruz.

							
< !-- Sliders Box -->
< section class="slider-wrapper">
    < !--  < h1> < span>Breaking news  -->
    < div class="flexslider" id="home-slider">
        < ul class="slides">
            < ?php for($i = 0;$i  <  count($sliderShow);$i++): ?> // Slider verisi "$sliderShow" bu değişken de tutulmaktadır.
            < li>
                < article>
                    < div class="kp-view">
                        < img src=" < ?php echo base_url( 'assets/nintweb/slidersphoto/' . getPhotoParser( getMetaParser( $sliderShow[$i]->metavalue, 0 ), 'file_name' ) ); ?>" alt=" < ?php echo $sliderShow[$i]->postitle; ?>" />
                        < a class="kp-mask" href=" < ?php echo site_url($sliderShow[$i]->postseoname); ?>">  //slider URI değeri bu değişkende tutulmaktadır. "$sliderShow[$i]->postseoname" URI değeri seo uyumludur. 
                     < !--kp-view-->
                    < div class="flex-caption">
                        < h1> < a href=" < ?php echo site_url($sliderShow[$i]->postseoname); ?>"> < ?php echo $sliderShow[$i]->postitle; ?>  

			 //slider Title değeri bu değişkende tutulmaktadır. "$sliderShow[$i]->postitle" Slider Başlığı. 
                        < p>
                            < span class="entry-meta"> < ?php echo _nint( 'Tarih: ' ); ?>  
                            < span class="entry-date"> < ?php echo getTimeToDate( $sliderShow[$i]->postdate ); ?> 
                            < span class="entry-meta"> -  < ?php echo _nint( 'Ekleyen: ' ); ?>  
                            < a class="entry-author" href="#"> < ?php echo $sliderShow[$i]->username; ?> 

			 // Gerekiyor ise Slider Ekleyen Kullanıcı Bilgisi "$sliderShow[$i]->username" Bu Değişkende Tutuluyor.
                            < span class="entry-meta"> -  
                            < a class="entry-comment" href="#"> < ?php echo $sliderShow[$i]->commentcount; ?>    < ?php echo _nint( 'Yorum' ); ?> 

			 //Slider için özel sayfa hazırladınız ise ve bu sayfaya yapılan yorumlar bu "$sliderShow[$i]->commentcount" değişkende tutulmaktadır.
                        < / p >
                    < / div > < !--flex-caption-- >
                < / article >
            < / li >
            < ?php endfor; ?>
        < / ul >
    < / div > < !--home-slider-->
< / section > < !--slider-wrapper-->
							
						
Örnek pages.php Dosyası: 
Örnek Sayfa Alanı: 
Aşağıdaki örnektede görüldüğü gibi sayfa alanımızın verilerini bu şekilde kolay ve basitce çekebiliyoruz.
Önceki örneklerde olduğu gibi verileri çeken değişken ve kod bloglarını işaretlidir.
Eğer içeriğimizi metin editöründe parçalamışsak bu function "getPostsExlode($parametre1, $parametre2)" ile bölüyoruz.
ornek separatör

1.) Fotoğrafda görülen 1. alan içeriği bölmemize yarayan alandır. html değeri "< hr >"
2.) Fotoğrafda görülen 2. alan 1. alana basıldığında oluşan "< hr >" çizgisidir.
3.) Fotoğrafda görülen 3. alan ise bu işlem sonucunda oluşan üst kısımdır.
4.) Fotoğrafda görülen 4. alan ise bu işlem sonucunda oluşan alt kısımdır.

Bu function 2 parametre almaktadır. 1 parametre sayfa içeriği yani "$pageShow->postcontent" 2. parametre içeriğin üst mü yoksa alt mı olduğunu belirliyor.
							
< section class="entry-box clearfix">
	 < article class="entry-box-left clearfix">
		 < h1 class="entry-title"> < ?php echo $pageShow->postitle; ?> // Sayfa Başlığını çekiyoruz. 
		 < img class="entry-thumb" src=" < ?php echo base_url( 'assets/nintweb/blogsphoto/' . getPhotoParser( getMetaParser( $pageShow->metavalue, 0 ), 'file_name' ) ); ?> 
 var ise sayfa fotoğrafını çekiyoruz." alt="" />
		 < div class="entry-content">
			 < p> < ?php echo getPostsExlode( $pageShow->postcontent, 0 ); ?> // sayfa içeriğini bu değişken "$pageShow->postcontent" ile çekiyoruz. 
		  < !--entry-content-->
	 < / article> < !--entry-box-left-->
	 < div class="entry-item-right last">
		 < div class="entry-date">
			 < p> < ?php echo getPostBlogsDate( $pageShow->postdate, 'Month' ); ?> 
			 < br>
			 < span> < ?php echo getPostBlogsDate( $pageShow->postdate, 'Year' ); ?> 
		  < !--entry-date-->
		 < a class="entry-comment" href="#"> < i class="icon-comments">  < ?php echo $pageShow->commentcount; ?>    < ?php echo _nint( 'Yorum' ); ?> 
		 < span class="entry-meta"> < i class="icon-user">  < ?php echo _nint( 'Ekleyen: ' ); ?>  < a class="entry-author" href="#"> < ?php echo $pageShow->username; ?>  
	 < / div> < !--entry-item-right-->
	 < div class="clear"> 
	 < div class="postPages">
		 < ?php echo getPostsExlode( $pageShow->postcontent, 1 ); ?>
	 < / div>
	 < div class="kp-tag-box">
		 < i class="icon-tags icon-2x"> 
		 < a class="kp-tag" href="#">action  < span>,  
		 < a class="kp-tag" href="#">auto  < span>,  
		 < a class="kp-tag" href="#">cars  < span>,  
		 < a class="kp-tag" href="#">events  < span>,  
		 < a class="kp-tag" href="#">Games  < span>,  
		 < a class="kp-tag" href="#">hight 
	  < !--kp-tag-box-->
	 < footer class="clearfix" >
		 < p class="prev-post" >
			 < a href="#" >Prev:  < / a > < a href="#" >Lorem ipsum dolor sit amet adipiscing < / a >
		 < / p >
		 < p class="next-post" >
			 < a href="#" >Next:  < / a > < a href="#" >Curabitur vel mi sit amet magna malesuada ultrices < / a >                                
		 < / p >
	 < / footer >
 < / section > < !--entry-box-->
							
						
Kullanılan Kütüphaneler
Nint.IO Yönetim Paneli için kullanılan Kütüphane listesi aşağıda verilmiştir. Bu sadece kullanılan kütüphanelerin bilinmesi için bilgi amaçlıdır ayrıca indirmeniz gerekmez çünkü bu kütüphane ve eklentiler zaten sistem içerisine entegre edilmiş durumdadır.

Facebook php-sdk
CodeIgniter Imap Class
Config.php Özel Ayarları
Bu kısım sistemde kayıtlı olan ana yönetici veya yöneticilerin panel üzerinden silnmesini engellemek için kullanılıyor. array() içerisine silinmesini istemediğiniz yani korumaya alınacak yönetici id lerini yazınız.

							
/*
 |--------------------------------------------------------------------------
 | Bu kısım sistemde kayıtlı olan ana yönetici veya yöneticilerin panel
 | üzerinden silinmesini engellemek için kullanılıyor.
 | array() içerisine silinmesini istemediğiniz yani korumaya alınacak
 | yönetici id lerini yazınız.
 */

	$config['admin_id'] = array('1');
							
						
NINT Controller
NINT Controller Sistem için Hazırladığımız özel bir Controller Bu Controller içinde yapılan işlemler şunlardır.
Public_Controller  Paylaşımlı Alanlar için Kullanılmak üzere yapılandırıldı.
Admin_Controller  Kullanıcılara özel alan olarak yapılandırıldı.
Admin_Controller içinde kullanılan özel Functionlar Aşağıda Listelenmiştir.

Not: Bu function ci_session tablosundan siteye gerişim yapan kullanıcıların giriş saatini ve site içerisinde gezdikleri süre içerisinde kaldıkları süreyi hesaplamaktadır.

Açıklamaları: Bu functionlar sistem içerisinde kullanılmaktadır. Bu functionları Ana Arayüzde kullanamazsınız.
Kullanım Şekli: $TimeDifference = $this->TimeDifference( $this->data['sessionLists'][$i]->timestamp, $Last );

							
/**
 * Süre Hesaplamak için Kullanıyoruz.
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
							
						
Not: Bu function ile kullanıcı veya ziyaretcilerin sistemde kayıtlı olduğu son saati alıyoruz.

Açıklamaları: Bu functionlar sistem içerisinde kullanılmaktadır. Bu functionları Ana Arayüzde kullanamazsınız.
Kullanım Şekli: $Last = $this->LastActivityTimes( $this->data['sessionLists'][$i]->data );

							
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
        $LastActivityTime = implode('', $Results[0]);
        return $LastActivityTime;
    endif;       
} // end LastActivityTimes( $parametre )
							
						
Not: Kullanıcı veya ziyaretcilerinde sistem içerisindeki güncel saat bilgilerini alıyoruz.

Açıklamaları: Bu functionlar sistem içerisinde kullanılmaktadır. Bu functionları Ana Arayüzde kullanamazsınız.
Kullanım Şekli: $Actual = $this->ActualActivityTimes( $this->data['sessionLists'][$i]->timestamp );

							
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
							
						
Not: Kullanıcı veya ziyaretcinin ci_session tablosunda bulunan kullanıcı adını alıyoruz.

Açıklamaları: Bu functionlar sistem içerisinde kullanılmaktadır. Bu functionları Ana Arayüzde kullanamazsınız.
Kullanım Şekli: $this->OnlineUsername( $this->data['sessionLists'][$i]->data );

							
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
							
						
Not: Kullanıcı veya ziyaretcinin bulunduğu sayfa adını alıyoruz.

Açıklamaları: Bu functionlar sistem içerisinde kullanılmaktadır. Bu functionları Ana Arayüzde kullanamazsınız.
Kullanım Şekli: $this->OnlinePages( $this->data['sessionLists'][$i]->data );

							
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
							
						
Genel Helper Açıklamaları
Bu dosya içerisinde sistem için gerekli yardımcı functionlarımızı oluşturduk.

generalibs_helper.php
gettexts_helper.php
seolink_helper.php
timetodate_helper.php
Not: posts tablosunda bulunan publish, pending alanlarının çevirisi için kullanıyoruz.

Açıklamaları: 
Kullanım Şekli:

							
/**
 * @param type $parametre
 * @return type
 */
function getPostsStatus( $parametre )
{
    switch ($parametre)
    {
        case 'publish' :
            return _nint( 'Sayfa Yayında' );
        break;
        case 'pending' :
            return _nint( 'Sayfa Yayında Değil' );
        break;
        default :
            return _nint( 'tanımsız içerik' );
        break;
    }
} // end getPostsStatus( $parametre )
							
						
Not: posts tablosunda bulunan public, private alanlarının çevirisi için kullanıyoruz.

Açıklamaları: Bu function Tüm Sayfalar, Tüm Sliderler, Tüm Bloglar gibi liste alanlarında kullanılmaktadır.
Kullanım Şekli: Örnek Hazırlanırken "< ?" arasına boşluk verilmiştir. Kullanım kılavuzundan koplayanıp kullanılması durumunda bu boşluğu silmeniz gerekmektedir. 
< ?php echo getPostsViews( $Pages->postviews ); ?> 
< ?php echo getPostsViews( $Sliders->postviews ); ?> 
< ?php echo getPostsViews( $Blogs->postviews ); ?>

							
/**
 * @param type $parametre
 * @return type
 */
function getPostsViews( $parametre )
{
    switch ($parametre)
    {
        case 'public' :
            return _nint( 'Herkese Açık' );
        break;
        case 'private' :
            return _nint( 'Üyelere Açık' );
        break;
        default :
            return _nint( 'tanımsız içerik' );
        break;
    }
} // end getPostsViews( $parametre )
							
						
Not: PostMeta tablosunda bulunan fotoğrafları ayıklıyor

Açıklamaları: Bu function Tüm Sayfalar, Tüm Sliderler, Tüm Bloglar gibi liste alanlarında kullanılmaktadır.
Kullanım Şekli: "< img src="" />" Tag içerisinde kullanılmaktadır. 
< ?php echo base_url('assets/nintweb/pagesphoto/' . getPhotoParser( $Pages->metavalue, 'file_name' )); ?> 
< ?php echo base_url('assets/nintweb/pagesphoto/' . getPhotoParser( $Sliders->metavalue, 'file_name' )); ?> 
< ?php echo base_url('assets/nintweb/pagesphoto/' . getPhotoParser( $Blogs->metavalue, 'file_name' )); ?>

							
/**
 * PostMeta tablosunda bulunan fotoğrafları ayıklıyor
 * @param type $parametre
 * @return type
 */
function getPhotoParser( $parametre, $ArrayKeys )
{
    if($parametre):
        $getPhotoParser = unserialize($parametre); 
        if(!empty($getPhotoParser[$ArrayKeys])):
            return $getPhotoParser[$ArrayKeys];
        else:
            return 'no-images.jpg'; 
        endif;        
    else:
        return 'no-images.jpg';
    endif;
} // end setPhotoParser( $parametre )
							
						
Not: PostMeta Alanında bulunan verileri parçalıyor.

Açıklamaları: Bu function Sayfayı düzenle, Slideri düzenle, Blogu düzenle gibi Düzenleme panellerinde ve ilave olarak meta larda bulunan verileri nerede göstermek istiyorsanız bu alanlarında kullanılmaktadır.
Ben örnek olarak size meta tabloda bulunan fotoğraf dosyasını pars etme kodunu verdim siz ilgili alanların açıklamalarına bakarak meta içerisinden bulunan diğer verilerinizide pars edebilirsiniz.
Kullanım Şekli: "< img src="" />" Tag içerisinde kullanılmaktadır. 
< ?php echo base_url( 'assets/nintweb/pagesphoto/' . getPhotoParser( getMetaParser( $EditPagesLists->PMT, 0 ), 'file_name' ) ); ?> 
< ?php echo base_url( 'assets/nintweb/pagesphoto/' . getPhotoParser( getMetaParser( $EditPagesLists->PMT, 0 ), 'file_name' ) ); ?> 
< ?php echo base_url( 'assets/nintweb/pagesphoto/' . getPhotoParser( getMetaParser( $EditPagesLists->PMT, 0 ), 'file_name' ) ); ?>

							
/**
 * PostMeta Alanında bulunan verileri string parçalıyor.
 * @param type $parametre
 * @param type $Order
 * @return type
 */
function getMetaParser( $parametre, $Order )
{
    if($parametre):
        $Part1 = explode('|', $parametre);
        return $Part1[$Order];
    endif;
} // end getMetaParser( $parametre, $Order )
							
						
Not: Options tablosuna kaydettiğimiz verileri bu helper ile parser ediyoruz.

Açıklamaları: Bu function genel kullanım için yapılmıştır istediğiniz yerde istediğiniz dosyada çağırabilirsiniz..
Kullanım amacı Options (genel ayarlar) tablosundan çekmek istediğiniz tüm verileri bu function ile çekebilirsiniz.
Kullanım Şekli: 
< ?php echo getOptionsParser( $webSiteOptions, '_sitetitle' ); ?> // Girdiğimiz WebSite Başlığını Çekiyoruz. 
< ?php echo getOptionsParser( $webSiteOptions, '_siteturl' ); ?> // Girdiğimiz WebSite URL sini çekiyoruz.
< ?php echo getOptionsParser( $webSiteOptions, '_sitemail' ); ?> // Girdiğimiz WebSite e-mail adresi veya adreslerini çekiyoruz.
Eğer bu alanda birden fazla mail adresi yazılacak ise mutlaka seperatör kullanmanız gerekir. Seperatör "|" düz çizgi olmalıdır.

							
/**
 * options tablosuna kaydettiğimiz verileri bu helper ile parser ediyoruz.
 * @param type $parametre
 * @param type $Order
 * @return type
 */
function getOptionsParser( $parametre, $Metakey = FALSE )
{
    if($parametre):
        for($i = 0;$i < count($parametre);$i++):
            if($parametre[$i]->metakey == $Metakey):
                $Options = $parametre[$i]->metavalue;  
            endif;            
        endfor; 
        return str_replace('|', '
', $Options);
    endif;
} // end getOptionsParser( $parametre, $Order )
							
						
Not: Yönetim Paneli contentHeader Alanında Kullanılacak function

Açıklamaları: Bu function Sadece Admin Panelde Kullanılmaktadır.
Kullanım amacı o an bulunduğunuz sayfayı size bildirimektir..
Kullanım Şekli: 
< ?php ContentHeader( $urlTitle ); ?>

							
//**
 * Yönetim Paneli contentHeader Alanında Kullanılacak function
 * @param type $urlTitle
 */
function ContentHeader( $urlTitle )
{
            
            
            < section class="content-header">
                < h1>
                    < ?php echo _nint( 'Yönetim Paneli' ); ?>
                    < small>< ?php echo _nint( 'versiyon: 0.1.0' ); ?>
                
                < ol class="breadcrumb">
                    < li>< a href="< ?php echo site_url('nintcp/index'); ?>">< i class="fa fa-dashboard"> < ?php echo _nint( 'Yönetim Paneli' ); ?>
                    < li class="active">< ?php echo $urlTitle; ?>
                
                
}
							
		
