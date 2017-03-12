/* global URL */

/* BootstrapSwitch ile Pages Açık mı Kapalı mı? olacak kontrolü */
$('.PagesCheck').on('switchChange.bootstrapSwitch', function(event, state)
{
    var $InputId = $(this).attr('id').substr(11);
    if(state == true){ var Opens = 'publish'; }
    if(state == false){ var Opens = 'pending'; }
    $.post(URL + 'recordscp/newpagesstatusrecordscp', {postid: $InputId, poststatus: Opens}, function(data)
    {
        console.log(data);
    });
}); // end $('.PagesCheck').on('switchChange.bootstrapSwitch', function(event, state){});


/* BootstrapSwitch ile Slider Açık mı Kapalı mı? olacak kontrolü */
$('.SlidersCheck').on('switchChange.bootstrapSwitch', function(event, state)
{
    var $InputId = $(this).attr('id').substr(13);
    if(state == true){ var Opens = 'publish'; }
    if(state == false){ var Opens = 'pending'; }
    $.post(URL + 'recordscp/newslidersstatusrecordscp', {postid: $InputId, poststatus: Opens}, function(data)
    {
        console.log(data);
    });
}); // end $('.PagesCheck').on('switchChange.bootstrapSwitch', function(event, state){});

/* BootstrapSwitch ile User Açık mı Kapalı mı? olacak kontrolü */
$('.UsersCheck').on('switchChange.bootstrapSwitch', function(event, state)
{
    var $InputId = $(this).attr('id').substr(11);
    if(state == true){ var Opens = 'publish'; }
    if(state == false){ var Opens = 'pending'; }
    $.post(URL + 'recordscp/newusersstatusrecordscp', {userid: $InputId, userviews: Opens}, function(data)
    {
        console.log(data);
    });
}); // end $('.PagesCheck').on('switchChange.bootstrapSwitch', function(event, state){});

/* BootstrapSwitch ile Blog Açık mı Kapalı mı? olacak kontrolü */
$('.BlogsCheck').on('switchChange.bootstrapSwitch', function(event, state)
{
    var $InputId = $(this).attr('id').substr(11);
    if(state == true){ var Opens = 'publish'; }
    if(state == false){ var Opens = 'pending'; }
    $.post(URL + 'recordscp/newblogsstatusrecordscp', {postid: $InputId, poststatus: Opens}, function(data)
    {
        console.log(data);
    });
}); // end $('.PagesCheck').on('switchChange.bootstrapSwitch', function(event, state){});