/**
 * Created by Yujie on 23/10/14.
 */

var baseUrl = "https://api.stormpath.com/v1";

var urlAccount = "";
var urlLoginAttempts = "";
var urlApplicationId = "https://api.stormpath.com/v1/applications/6Iz9cgbhG4NN6HJ8I3JkUZ";
//var psswdSame = false; // check if two user inputs passwords are same? same=ture;diff=false

//var Authorization = "Basic WDZXV005NUZFNVlWT1Q1V0lQUVJMUkdOWDovWWMrL2liZEppN3A4aEM0eGNWYkN4SlRyZEQ5NlJ2WHVmMnBpMHdUckVn";


// get the ip address of responsed user

$(document).ready(function () {
    console.log("begin document.ready()");
    $.support.cors = true;
    $("#btnSubmit").click(function () {

        // get all user inputs by JQuery
        // var userInputs;
        console.log("get user input:  " + $("#user_givenname").val());
        var userInputs = '{"givenName":' + '"' + $("#user_givenname").val() + '",'
            + '"surname":' + '"' + $("#user_surname").val() + '",'
            + '"username":' + '"' + $("#user_username").val() + '",'
            + '"password":' + '"' + $("#user_password").val() + '",'
            + '"email":' + '"' + $("#user_email").val() + '"}';

        console.log("userInputs is " + JSON.stringify(userInputs));

        var Authorization = "Basic " + btoa('X6WWM95FE5YVOT5WIPQRLRGNX' + ":" + '/Yc+/ibdJi7p8hC4xcVbCxJTrdD96RvXuf2pi0wTrEg');

        return $.ajax({
            type: 'POST',
            //url: "https://X6WWM95FE5YVOT5WIPQRLRGNX:/Yc+/ibdJi7p8hC4xcVbCxJTrdD96RvXuf2pi0wTrEg@api.stormpath.com/v1/accounts/5eo2jlZXbA8PqJGOoZMmK8",
            url: urlApplicationId + '/accounts',
            username: 'X6WWM95FE5YVOT5WIPQRLRGNX',
            password: '/Yc+/ibdJi7p8hC4xcVbCxJTrdD96RvXuf2pi0wTrEg',
            headers: {
               // "Authorization": Authorization,
                Accept: "application/json"
                //"Content-Type": "json"
            },
            //dataType: 'jsonp',
            //data: JSON.stringify(userInputs), // transfer the user inputs to Json data
            data: userInputs,
            success: function (res) {
                //alert("sucess response: " + JSON.stringify(res) + "succeed")
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


    $("#btnSignin").click(function () {

        var url = urlLoginAttempts;
        var concatenated = $("#input_usrnme") + ':' + $("#input_psswd");  // chage
        var bytes = concatenated.toArray(); // should change to byte array
        var value = base64_encode(bytes);
        var data = "type:" + "basic" + ","
            + "value:" + value;
        $.ajax({
            type: "POST",
            url: url + '/applications' + '?name=welcome', // '$TENANT_HREF/applications?name=My%20Application'; this location is got from above.
            headers: {
                "Authorization": Authorization,
                Accept: "application/json",
                contentType: "application/json"   // in the curl 'contentType' is content-type
            },
            success: function (res) {
                var tempRes = JSON.stringify((res));
                urlAccount = tempRes.accounts; // get the accounts url from the response.
                urlLoginAttempts = tempRes.loginAttempts;
            },
            error: function (res) {

            },
            data: JSON.stringify(data) // transfer the user inputs to Json data
        });    //get application
    });


    $("#btnReset").click(function () {
        //http://docs.stormpath.com/rest/product-guide/#application-password-reset
        var rst_email = $("#rstPassword_useremail");
        var JsonEmail = '{"email":' + '"' + rst_email + '"' + '}';
        $.ajax({
            type: "POST",
            url: baseUrl + '/applications' + '/6Iz9cgbhG4NN6HJ8I3JkUZ/passwordResetTokens', // '$TENANT_HREF/applications?name=My%20Application'; this location is got from above.
            headers: {
                "Authorization": Authorization,
                Accept: "application/json",
                contentType: "application/json",   // in the curl 'contentType' is content-type
                charset: "UTF-8"
            }
            ,
            success: function (res) {
                // if succeed, jump to password_reset.html
            }
            ,
            error: function (res) {

            }
            ,
            data: JSON.stringify(JsonEmail) // transfer the user inputs to Json data
        })
    })
});


///base64_encode
function base64_encode(data) {
///refer to->  https://github.com/kvz/phpjs/blob/master/functions/url/base64_encode.js

    var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
    var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
        ac = 0,
        enc = '',
        tmp_arr = [];

    if (!data) {
        return data;
    }

    data = unescape(encodeURIComponent(data));

    do {
        // pack three octets into four hexets
        o1 = data.charCodeAt(i++);
        o2 = data.charCodeAt(i++);
        o3 = data.charCodeAt(i++);

        bits = o1 << 16 | o2 << 8 | o3;

        h1 = bits >> 18 & 0x3f;
        h2 = bits >> 12 & 0x3f;
        h3 = bits >> 6 & 0x3f;
        h4 = bits & 0x3f;

        // use hexets to index into b64, and append result to encoded string
        tmp_arr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
    } while (i < data.length);

    enc = tmp_arr.join('');

    var r = data.length % 3;

    return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);
}
