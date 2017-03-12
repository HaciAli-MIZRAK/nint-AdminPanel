<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * getPostsStatus, getPostsViews, getPhotoParser Hepler
 * @author Hacı Ali MIZRAK
 */

/**
 * Post lists için özel değerlerin açılımı
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

/**
 * Post lists için özel değerlerin açılımı
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
} // end getPostsStatus( $parametre )

/**
 * PostMeta tablosunda bulunan fotoğrafları ayıklıyor
 * @param type $parametre
 * @return type
 */
function getPhotoParser( $parametre )
{
    if($parametre):
        if($parametre->metakey == '__postsphoto'):
            $getPhotoParser = unserialize($parametre->metavalue); 
            if(!empty($getPhotoParser['file_name'])):
                return $getPhotoParser['file_name'];
            else:
                return 'no-images.jpg'; 
            endif;
        endif;
    else:
        return 'no-images.jpg';
    endif;
} // end setPhotoParser( $parametre )

/**
 * PostMeta tablosunda bulunan fotoğrafları ayıklıyor
 * @param type $parametre
 * @return type
 */
function getPhotoParserFullPath( $parametre )
{
    if($parametre):
        if($parametre->metakey == '__postsphoto'):
            $getPhotoParser = unserialize($parametre->metavalue); 
            if(!empty($getPhotoParser['full_path'])):
                return $getPhotoParser['full_path'];
            else:
                return 'no-images.jpg'; 
            endif;
        endif;
    else:
        return 'no-images.jpg';
    endif;
} // end getPhotoParserFullPath( $parametre )

/**
 * PostMeta tablosunda bulunan fotoğrafları ayıklıyor
 * @param type $parametre
 * @return type
 */
function getCategoryPhotoParser( $parametre )
{
    if($parametre):
        $getPhotoParser = unserialize($parametre); 
        if(!empty($getPhotoParser['file_name'])):
            return $getPhotoParser['file_name'];
        else:
            return 'no-images.jpg'; 
        endif;
    else:
        return 'no-images.jpg';
    endif;
} // end getPhotoParserFullPath( $parametre )

/**
 * PostMeta Alanında bulunan verileri string parçalışıyor.
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

/**
 * Paylaşılan pots dan üst ve alt olacak şekilde parçalıyoruz.
 * @param type $parametre
 * @param type $Order
 * @return type
 */
function getPostsExlode( $parametre, $Order )
{
    if($parametre):
        $Part1 = explode('<hr>', $parametre);
        if(!isset($Part1)):
           return $Part1[$Order]; 
        else:
            return $parametre;
        endif;        
    endif;
} // end getPostsExlode( $parametre, $Order )

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
        return str_replace('|', '<br />', $Options);
    endif;
} // end getOptionsParser( $parametre, $Order )

/**
 * 
 * @param type $bytes
 * @return \strıng
 */
function formatSizeUnits( $bytes )
{
    if ($bytes >= 1073741824):
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    elseif ($bytes >= 1048576):
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    elseif ($bytes >= 1024):
        $bytes = number_format($bytes / 1024, 2) . ' kB';
    elseif ($bytes > 1):
        $bytes = $bytes . ' bytes';
    elseif ($bytes == 1):
        $bytes = $bytes . ' byte';
    else:
        $bytes = '0 bytes';
    endif;
    return $bytes;
} // end formatSizeUnits( $bytes )

/**
 * 
 * @param type $parametre
 * @return type
 */
function ExtensionArray( $parametre )
{
    if($parametre):
        $ext = pathinfo($parametre); 
        return $ext['extension'];
    endif;
} // end ExtensionArray( $parametre )

/**
 * Kullanıcı Şifresi için Crypto function
 * @param type $par
 * @return type
 */
function UserPassCreate( $par )
{
    $par = md5($par,"www.marmaranet.net");
    $par = md5($par,"www.resimkalemi.net");
    $par = md5($par,"www.sehirehberi.org");
    $par = base64_encode($par);
    $par = md5($par);
    return $par;
} // end UserPassCreate( $par )

/**
 * Kullanucu için API KEY oluşturuyoruz.
 * @param type $username
 * @param type $Password
 * @return type
 */
function ApiKeyCreate( $username, $Password )
{
    $KeyString = 'abcdefghijklmnoprstuvywzABCDEFGHIJKLMNOPRSTUVYWZ123456789';
    $par = base64_encode(md5(sha1($KeyString, "www.marmaranet.net")));
    $par = base64_encode(md5(sha1($username, "www.resimkalemi.net")));
    $par = base64_encode(md5(sha1($Password, "www.sehirehberi.org")));
    $par = base64_encode(md5(sha1(time(), "www.datatakip.net")));
    $par = base64_encode(md5(sha1($par)));
    return strtoupper(sha1(base64_encode(md5(sha1($par)))));
} // end ApiKeyCreate( $username, $Password )

/**
 * Yönetim Paneli contentHeader Alanında Kullanılacak function
 * @param type $urlTitle
 */
function ContentHeader( $urlTitle )
{
?>
            <!-- Content Header (Page header) -->
            <!--  style="display: block; position: relative; top: -15px; left: -35px;" -->
            <section class="content-header">
                <h1>
                    <?php echo _nint( 'Yönetim Paneli' ); ?>
                    <small><?php echo _nint( 'versiyon: 0.1.0' ); ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('nintcp/index'); ?>"><i class="fa fa-dashboard"></i> <?php echo _nint( 'Yönetim Paneli' ); ?></a></li>
                    <li class="active"><?php echo $urlTitle; ?></li>
                </ol>
            </section>    
<?php
}

/**
 * Main Sayfa contentHeader Alanında Kullanılacak function
 * @param type $urlTitle
 */
function mainContentHeader( $urlTitle )
{
?>
            <div class="breadcrumb">
                <strong><?php echo _nint( 'Buradasınız: ' ); ?>&nbsp;</strong>
                <a href="<?php echo base_url(); ?>"><?php echo _nint( 'AnaSayfa' ); ?></a>
                <span>&nbsp;/&nbsp;</span>
                <span class="current-page"><?php echo $urlTitle; ?></span>
            </div><!--breadcrumb-->
            <!-- Content Header (Page header) -->
<?php
}
?>