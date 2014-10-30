var ipAddress = "";

var baseUrl = "https://api.stormpath.com/v1";
var urlLocation = "";
var urlAccount = "";
var urlLoginAttempts = "";
var urlApplicationId = "https://api.stormpath.com/v1/applications/6Iz9cgbhG4NN6HJ8I3JkUZ";
var psswdSame = false; // check if two user inputs passwords are same? same=ture;diff=false

//var recaptchaRight = false;   // continue when captcha is right.

var Authorization = "Basic WDZXV005NUZFNVlWT1Q1V0lQUVJMUkdOWDovWWMrL2liZEppN3A4aEM0eGNWYkN4SlRyZEQ5NlJ2WHVmMnBpMHdUckVn";


// get the ip address of responsed user
$.(document).ready(function () {
    alert("begin document.ready()");
    console.log("begin document.ready()");

    $.getJSON("http://ip-api.com/json/?callback=?", function (data) {
        ipAddress = data.query;
    });

    //// get the location href
    //$.ajax({
    //    type: "GET",
    //    url: 'https://api.stormpath.com/v1/tenants/current',
    //    headers: {
    //        // in apikey, how to encrypt username and password
    //        "Authorization": Authorization
    //    },
    //    success: function (res) {
    //        urlLocation = JSON.stringify((res)).href;
    //        // get the location href from the response.
    //    }
    //
    //})// ajax
    //
    //
    //$.ajax({
    //    type: "GET",
    //    url: Location + '/applications' + '?name=welcome', // '$TENANT_HREF/applications?name=My%20Application'; this location is got from above.
    //    headers: {
    //        "Authorization": Authorization,
    //        Accept: "application/json"
    //
    //    },
    //    success: function (res) {
    //        var tempRes = JSON.stringify((res));
    //        urlAccount = tempRes.accounts; // get the accounts url from the response.
    //        urlLoginAttempts = tempRes.loginAttempts;
    //    }
    //})//get application



/***
 *  The following functions are for signup, signin and retrieving passwords

 ***/

window.name ='signup';

$("#btnSubmit" ).click(function() {
    // get all user inputs by JQuery
    // var userInputs;

    if ($("#user_password").text() == $("#user_password_confirmation"))
        psswdSame = true;

    var userInputs = '{"givenName":' +
        + $("#user_givenname").text()+ ','
        + '"surname":' + $("#user_surname").text() + ','
        + '"username":' + $("#user_username").text() + ','
        + '"password":' + $("#user_password").text() + ','
        + '"email":'+ $("#user_email").text() +'}';
console.log("userInputs Json format string is"+JSON.stringify(userInputs));

    $ajax({
        type: "POST",
        url: urlApplicationId,
        headers: {
            contentType: "application/json",   // in the curl 'contentType' is content-type
            Accept: "application/json",
            "Authorization": Authorization
        },
        data: JSON.stringify(userInputs), // transfer the user inputs to Json data
        success: function (res) {

            alert("succeed");
            // when created success, jump to a webpage to give uer hinds.

            /////////////////////////

        },
        error: function (res) {
            alert(JSON.stringify(res).message); // return StormPath official response message
//            {
//                "status": 409,
//                "code": 2001,
//                "message": "Account with that email already exists.  Please choose another email.",
//                "developerMessage": "Account with that email already exists.  Please choose another email.",
//                "moreInfo": "http://docs.stormpath.com/errors/2001"
//            }
        }
    });
});


function signin() {

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
    })//get application
}


function resetPassword() {
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

}

function deletUser() {
    // http://docs.stormpath.com/rest/product-guide/#deleting-resources

    // delete an account
    //http://docs.stormpath.com/rest/product-guide/#delete-an-account
}


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

});