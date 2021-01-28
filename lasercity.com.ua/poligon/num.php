<!--<!doctype html>
<html lang="uk-ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google авторизація</title>
    <script async defer src="https://apis.google.com/js/api.js"
            onload="this.onload=function(){};onloadHandler()"
            onreadystatechange="if (this.readyState === 'complete') this.onload()"></script>
</head>
<body>
<button id="login-button" disabled>Авторизуватися через Google</button>

<div id="result"></div>

<script>
    const loginButton = document.getElementById('login-button');
    const result = document.getElementById('result');

    function onloadHandler() {
        gapi.load('client:auth2', {
            callback: function () {
                gapi.client.init({
                    apiKey: 'AIzaSyBxrSmAvAugQm_B9VsYiaK6z_69gOFgDbs',
                    clientId: '564453405652-pqge34rc92qsn52jcnvemn4785lgb8nf.apps.googleusercontent.com',
                    scope: 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me'
                }).then(
                    function (success) {
                        loginButton.disabled = false;
                        result.textContent = 'Бібліотека Google Api була підключена';
                        console.log('init success', success);
                    },
                    function (error) {
                        result.textContent = 'Бібліотека Google Api не була підключена';
                        console.log('init error', error);
                    }
                );
            }
        });
    }

    loginButton.onclick = function () {
        gapi.auth2.getAuthInstance().signIn().then(
            function (success) {
                console.log('onclick singIn success', success);
                gapi.client.request({path: 'https://www.googleapis.com/plus/v1/people/me'}).then(
                    function (success) {
                        console.log('singIn success userInfo', success.result);
                    },
                    function (error) {
                        result.textContent = 'Помилка отримання інформації користувача';
                        console.log('singIn error', error);
                    }
                );
            },
            function (error) {
                result.textContent = 'Авторизація не була успішна';
                console.log('onclick singIn error', error);
            }
        );
    }
</script>
</body>
</html>-->

<!--<html lang="uk-ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google авторизація</title>
    <script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>
    !--<meta name="google-signin-client_id" content="564453405652-pqge34rc92qsn52jcnvemn4785lgb8nf.apps.googleusercontent.com">--
</head>
<body>
<button id="b">asd</button>
!--<div class="g-signin2" data-onsuccess="onSignIn"></div>--
<script>
    window.onLoadCallback = function () {
        gapi.load('auth2', function(e) {
            gapi.auth2.init({
                client_id: '564453405652-pqge34rc92qsn52jcnvemn4785lgb8nf.apps.googleusercontent.com'
            });
        });

    };
    const b = document.getElementById('b');
    b.onclick = function () {
        gapi.auth2.getAuthInstance().signIn().then(
            function (success) {
                console.log('onclick singIn success', success);
            },
            function (error) {
                result.textContent = 'Авторизація не була успішна';
                console.log('onclick singIn error', error);
            }
        );
    };

    /*function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId());
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail());
    }*/
</script>
</body>
</html>-->

<!DOCTYPE html>
<html>
<head>
    <title>Facebook Login JavaScript Example</title>
    <meta charset="UTF-8">
</head>
<body>
<script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            testAPI();
        } else {
            // The person is not logged into your app or we are unable to tell.
            document.getElementById('status').innerHTML = 'Please log ' +
                'into this app.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '478933249332333',
            cookie     : true,  // enable cookies to allow the server to access
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v4.0' // The Graph API version to use for the call
        });

        // Now that we've initialized the JavaScript SDK, we call
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me?fields=name,email,images', function(response) {
            console.log(response);
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML =
                'Thanks for logging in, ' + response.name + '!';
        });
    }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

</body>
</html>