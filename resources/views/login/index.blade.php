<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no">

    <title>SLA-EVE</title>
</head>

<body>
    <div class="login_wrap">
        <h1 id="login_title">SLA-EVE</h1>
        <div class="container">
            <h1>로그인</h1>
            <form action="login_proc.php" method="post">
                <div class="join"><a href="https://login.eveonline.com/v2/oauth/authorize/?response_type=code&redirect_uri=https%3A%2F%2Flocalhost%3A8001%2Fcallback%2F&client_id=45247a8ca1f243afa2f6b7e883b8098d&scope=esi-wallet.read_character_wallet.v1&state=0"><img src="/image/ssologin.png" alt=""></a></div>
                <div class="auto_login">
                    <label><input type="checkbox" name="auto_login" value="1" checked>자동 로그인</label>
                </div>
            </form>
        </div>
    </div>
</body>

</html>