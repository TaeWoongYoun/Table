<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <div class="left">
            <h1>
                시작할 준비가 되셨나요? <br>
                <b>30일 무료 평가판</b>으로 시작하실 수 있습니다.
            </h1>
        </div>
        <div class="right">
            <button>게스트로 가입</button>
            <button id="loginBtn">로그인</button>
        </div>
    </main>

    <div class="loginModal">
        <h2>로그인</h2>
        <form action="login.php" method="post">
            <p><input type="text" name="userid" id="userid" require placeholder="아이디" class="formInput"></p>
            <p><input type="password" name="userpw" id="userpw" require placeholder="비밀번호" class="formInput"></p>
            <div class="btnBox">
                <input type="submit" value="로그인" class="formBtn">
                <input type="reset" value="취소" class="formBtn" id="closeBtn">
            </div>
        </form>
    </div>

    <script src="main.js"></script>

</body>
</html>