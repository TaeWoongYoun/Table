<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>

<?php
    $userid = mysqli_real_escape_string($conn, $_POST['joinid']);
    $userpw = mysqli_real_escape_string($conn, $_POST['joinpw']);


    $sql = "INSERT INTO user_join (userid, password) VALUE('$userid', '$userpw')";
    mysqli_query($conn, $sql);
    // echo $select = "SELECT * FROM user_join WHERE userid='$userid'";
    // $result = mysqli_query($conn, $select);
    // echo $result;

    


    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $userid = mysqli_real_escape_string($conn, $_POST['joinid']);
    //     $select = "SELECT * FROM user_join WHERE userid='$userid'";
    //     $result = mysqli_query($conn, $select);
    //     echo mysqli_num_rows($result);
    //     if (mysqli_num_rows($result) > 0) {
    //         echo "<script>alert('이미 사용중인 아이디입니다.');</script>";
    //     } else {
    //         // $sql = "INSERT INTO user_join (userid, password) VALUES ('$userid', '$userpw')";
    //         // mysqli_query($conn, $sql);
    //         echo "<script>alert('사용 가능한 아이디입니다.');</script>";
    //     }
    // }
?>

<script>
    alert('회원가입 성공')
    // location.href = "main.php"
</script>