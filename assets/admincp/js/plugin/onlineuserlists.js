/* global URL */
setTimeout(function(){
    ajaxJSONParser( URL + 'nintjson/onlineuserslists', {}, "OnlineUsersLists( item )" );
}, 1000);

setInterval(function(){
    ajaxJSONParser( URL + 'nintjson/onlineuserslists', {}, "OnlineUsersLists( item )" );
}, 10000);

/**
 * 
 * @param {type} item
 * @returns {undefined}
 */
function OnlineUsersLists( item )
{
    var $OnlineUsersLists = '';
    $('#OnlineUserListsCount').html('<span class="badge bg-red">Toplam: ' + item.OnlineUserLists + ' Kullanıcı</span>');
    if(item.OnlineUserLists.length > 0)
    {
        $('#OnlineUserListsCount').html('<span class="badge bg-red">Toplam: ' + item.OnlineUserLists.length + ' Kullanıcı</span>');
        $OnlineUsersLists += '<ul class="users-list clearfix">';
        for(var $i = 0;$i < item.OnlineUserLists.length;$i++)
        {
            $OnlineUsersLists += '<li>';
            $OnlineUsersLists += item.OnlineUserLists[$i].UserPicture;
            $OnlineUsersLists += '<a class="users-list-name" href="#">' + item.OnlineUserLists[$i].userNames + '</a>';
            $OnlineUsersLists += '<span class="users-list-name">' + item.OnlineUserLists[$i].UserPages + '</span>';
            $OnlineUsersLists += '<span class="users-list-date">' + TimeDifference( item.OnlineUserLists[$i].TimeDifference ) + '</span>';
            $OnlineUsersLists += '</li>';
        }
        $OnlineUsersLists += '</ul>';
        $('#OnlineUsersLists').html($OnlineUsersLists);
    } else {
        $('#OnlineUsersLists').html('<h3 class="text-center text-red">Henüz Online Kullanıcı Yok.. </h3>');
    }
} // end OnlineUsersLists( item )

/**
 * 
 * @param {type} data
 * @returns {undefined}
 */
function TimeDifference( $parametre )
{
    var $Lock = '';
    if($parametre)
    {
        if($parametre.Years){ $Lock += $parametre.Years; }
        if($parametre.Days){  $Lock += $parametre.Days; }
        if($parametre.Hours){ $Lock += $parametre.Hours; }
        if($parametre.Minutes){ $Lock += $parametre.Minutes; }
        if($parametre.Seconds){ $Lock += $parametre.Seconds; }
        return $Lock;
    }
} // end TimeDifference( $parametre ) 