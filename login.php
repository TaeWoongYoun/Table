<?php
    $id = $_POST['userid'];
    $pw = $_POST['userpw'];

    if ($id == 'admin' && $pw == "1234"){
        $_SESSION["userid"] == $id;
        $_SESSION["userpw"] == $pw;

        echo "
        <script>
            alert('관리자로 로그인 되었습니다.')
            location.href='index.php?id=admin'
        </script>
        ";
    } else {
        $_SESSION["userid"] == $id;
        $_SESSION["userpw"] == $pw;

        echo "
        <script>
            alert('일반회원으로 로그인 되었습니다.')
            location.href='index.php'
        </script>
        ";
    }
?>