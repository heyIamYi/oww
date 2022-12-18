<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">

    {{-- Facebook SDK --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v15.0"
        nonce="1aChpXrc"></script>

</head>

<body>
    <main>
        <div class="banner d-flex">
            <!-- 左方區塊 -->
            <div id="section1">
                <!-- 左方區塊 -->
                <div class="left-box d-flex">
                    <!-- 左區塊標題 -->
                    <h3>Keep it special</h3>
                    <!-- 左區塊副標題 -->
                    <h5>Capture your personal memory in unique way, anywhere.</h5>
                </div>
            </div>
            <!-- 右方區塊 -->
            <div id="section2">
                <!-- 右方區塊 -->
                <div class="right-box d-flex">
                    <!-- LOGO -->
                    <div class="logo-box d-flex">
                        <div class="logo">
                            <img src="./img/login-page/logo.png" alt="">
                        </div>
                        <h3>數位方塊</h3>
                    </div>
                    <!-- SVG超連結 -->
                    {{-- <div class="svg-box d-flex">
                        <div class="box-top d-flex" style="flex-direction: column">
                            <a href="{{ route('googlelogin') }}">google登入</a>

                            <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with"
                                data-layout="rounded" onclick="FB_login();" data-auto-logout-link="true"
                                data-use-continue-as="false"></div>
                        </div>

                    </div> --}}
                    <!-- 使用其他方式登入 -->
                    <div class="box-bot d-flex">
                        <p>or use email your account </p>
                    </div>
                    <!-- 登入表單 -->
                    <div class="login-form d-flex">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control email-adress"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control password"
                                    id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div id="emailHelp" class="form-text">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                Forgot your password?
                            </div>
                            <button type="submit" class="btn btn-primary">SIGN IN</button>
                            <a href="/register"><button type="button" type="submit" class="btn btn-primary">SIGN
                                    UP</button></a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- logo連結 -->
            <div id="section3">
                <!-- svg連結 -->
                <div class="svg-link">
                    <div class="link1"><img src="./img/login-page/instagram-logo-fill.svg" alt=""></div>
                    <div class="link2"><img src="./img/login-page/instagram-logo-fill.svg" alt=""></div>
                    <div class="link3"><img src="./img/login-page/instagram-logo-fill.svg" alt=""></div>
                </div>
            </div>
        </div>
    </main>

    <script>
        //  FACEBOOK 登入
        window.fbAsyncInit = function() {
            FB.init({
                appId: '{{ env('FB_ID') }}',
                cookie: true,
                xfbml: true,
                version: '{{ env('FB_VISION') }}'
            });

            FB.AppEvents.logPageView();

        };

        //  SDK登入
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // 登入按鈕
        function FB_login() {
            FB.getLoginStatus(function(res) {
                if (res.authRespones) {
                    console.log(res.authRespones);
                    FB.api('/me', {
                        field: 'id,name,email'
                    })
                }
            })
        };
    </script>

</body>

</html>
