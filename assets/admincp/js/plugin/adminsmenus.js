/* Sürükle Bırak Menu Sıralaması */
$( "#sortable" ).sortable({
    revert: true,
    handle: ".sortable",
    stop: function (event, ui)
    {
        var data = $(this).sortable('serialize');
        console.log(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            data: data,
            url: URL + 'recordscp/newadminorderbylistsrecordscp',
            success: function(msg)
            {
            }
        });
    }
});
$( "#sortable" ).disableSelection();

/* select içinden icon değiştiğinde kayıt etmek için */
$('select').change(function()
{
    var $tdId = $(this).attr('id').substr(6);
    $.post(URL + 'recordscp/newadminiconnamerecordscp', {mid: $tdId, menuicon: $(this).val()}, function(data)
    {
        if(data){ $('#AdminMenuIcon-' + $tdId).addClass('fa fa-check text-green'); } else { $('#AdminMenuIcon-' + $tdId).addClass('fa fa-remove text-red'); }
    });
}); // end $('select').change(function(){});

/* BootstrapSwitch ile Alt Menu Listesi Açık mı Kapalı mı? olacak kontrolü */
$('.AdminMenuOpen').on('switchChange.bootstrapSwitch', function(event, state)
{
    var $InputId = $(this).attr('id').substr(10);
    if(state == true){ var Opens = -1; }
    if(state == false){ var Opens = 0; }
    $.post(URL + 'recordscp/newadminmenuopenrecordscp', {mid: $InputId, menuopen: Opens}, function(data)
    {
        if(data){ /*$('#AdminMenuIcon-' + $tdId).addClass('fa fa-check text-green');*/ } else { /*$('#AdminMenuIcon-' + $tdId).addClass('fa fa-remove text-red');*/ }
    });
}); // end $('.AdminMenuOpen').on('switchChange.bootstrapSwitch', function(event, state){});

/* BootstrapSwitch ile Menu Listeside Görünecek mi Görünmeyecek mi? kontrolü */
$('.AdminMenuStatus').on('switchChange.bootstrapSwitch', function(event, state)
{
    var $InputId = $(this).attr('id').substr(12);
    if(state == true){ var Opens = -1; }
    if(state == false){ var Opens = 0; }
    $.post(URL + 'recordscp/newadminmenustatusrecordscp', {mid: $InputId, mstatus: Opens}, function(data){
        if(data){ /*$('#AdminMenuIcon-' + $tdId).addClass('fa fa-check text-green');*/ } else { /*$('#AdminMenuIcon-' + $tdId).addClass('fa fa-remove text-red');*/ }
    });
}); // end $('.AdminMenuStatus').on('switchChange.bootstrapSwitch', function(event, state){});