/* global URL */
setTimeout(function(){
    ajaxJSONParser( URL + "nintjson/enduseresgisterlists", {}, "EndUseResgisterLists( item )" );
}, 1000);

setInterval(function(){
    ajaxJSONParser( URL + "nintjson/enduseresgisterlists", {}, "EndUseResgisterLists( item )" );
}, 60000);

/**
 * 
 * @param {type} item
 * @returns {undefined}
 */
function EndUseResgisterLists( item )
{
    console.log(item);
    var $EndUsersRegistersLists = '';
    $('#registerUserListsCount').html('<span class="badge bg-red">Toplam: ' + item + ' Kullanıcı</span>');
    if(item != 0)
    {
        $('#registerUserListsCount').html('<span class="badge bg-red">Toplam: ' + item.length + ' Kullanıcı</span>');
        $EndUsersRegistersLists += '<ul class="users-list clearfix">';
        for(var $i = 0;$i < item.length;$i++)
        {
            $EndUsersRegistersLists += '<li>';
            $EndUsersRegistersLists += item[$i].userpicture;
            $EndUsersRegistersLists += '<a class="users-list-name" href="#">' + item[$i].username + '</a>';
            $EndUsersRegistersLists += '</li>';
        }
        $EndUsersRegistersLists += '</ul>';
        $('#EndUsersRegisterLists').html($EndUsersRegistersLists);
    } else {
        $('#EndUsersRegisterLists').html('<h3 class="text-center text-red">Bugün Henüz Kimse Kayıt Olmadı.. </h3>');
    }
} // end EndUseResgisterLists( item )