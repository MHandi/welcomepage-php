/**
 * Created by Yujie on 23/10/14.
 */
var baseUrl = "https://api.stormpath.com";//https://api.stormpath.com/emailVerificationTokens
$( document ).ready(function() {
    console.log( "ready!" );
    //alert(document.URL.search);
    var url = window.location.search;
    url = url.replace("?sptoken=", ''); // remove the ?
    console.log(url);
    //alert(url); //alerts ProjectID=462 is your case

    //console.log(57,document.URL.length());

    $.ajax({
        type: 'POST',
        url: baseUrl + '/emailVerificationTokens'+url,
        success: function (res) {
            console.log(res);
        },
        error: function (res) {
            console.log(res);
        },
        done: function (res) {
            console.log(res);
        }
    });
});
