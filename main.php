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
            <button id="loginBtn">로그인</button>
            <button id="joinBtn">회원가입</button>
        </div>
    </main>
    
    <div class="loginModal">
        <h2>로그인</h2>
        <form action="login.php" method="post">
            <p><input type="text" name="userid" id="userid" require placeholder="아이디" class="formInput"></p>
            <p><input type="password" name="userpw" id="userpw" require placeholder="비밀번호" class="formInput"></p>
            <div class="btnBox">
                <input type="submit" value="로그인" class="formBtn">
                <input type="reset" value="취소" class="formBtn closeBtn">
            </div>
        </form>
    </div>

    <div class="joinModal" id="joinModal">
        <h2>회원가입</h2>
        <form action="join.php" method="post">
            <p>
                <input type="text" name="joinid" id="joinid" require placeholder="아이디" class="formInput" style="width: 200px;">
                <input type="submit" value="중복 확인" id="check" onclick="checkId()">
            </p>
            <p><input type="password" name="joinpw" id="joinpw" require placeholder="비밀번호" class="formInput"></p>
            <p><input type="password" name="joinpw-check" id="joinpw-check" require placeholder="비밀번호 확인" class="formInput"></p>
            <div class="btnBox">
                <input type="submit" value="회원가입" class="formBtn join">
                <input type="reset" value="취소" class="formBtn closeBtn" id="closeBtn">
            </div>
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>