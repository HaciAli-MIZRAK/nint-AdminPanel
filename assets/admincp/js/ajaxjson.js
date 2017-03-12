/**
 * ajaxJSONParser( url, dataId, func )
 * json formatında api çekmek için
 * @param {type} url
 * @param {type} dataId
 * @param {type} func
 * @returns {undefined}
 */
function ajaxJSONParser( url, dataId, func, sType )
{
    var dType = 'JSON';
    if(sType == 'POST'){ var submitType = 'POST'; } else { var submitType = 'GET'; }
    
    jQuery.support.cors = true;
    $.ajax({
        type: submitType,
        url: url,
        //timeout: 4000,
        async: true,
        data: dataId,
        //contentType: 'application/json; charset=utf-8',
        dataType: dType,
        beforeSend: function(){
        },
        success: function(item){
            eval(func);
        },
        statusCode: {
            200: function (response) {
                console.log('status 200');
            },
            201: function (response) {
                console.log('status  201');
            },
            302: function (response) {
                console.log('status  302');
            },
            400: function (response) {
                console.log('status  400');
            },
            404: function (response) {
                console.log('status  404 ');
            },
            500: function (response) {
                console.log('status  500 ');
            }
        },
        error: function(){
        }
    });
} // end ajaxJSONParser( url, dataId, func, sType )