<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>

<?php
    $userid = mysqli_real_escape_string($conn, $_POST['joinid']);
    $userpw = mysqli_real_escape_string($conn, $_POST['joinpw']);


    $sql = "INSERT INTO user_join (userid, password) VALUE('$userid', '$userpw')";

    mysqli_query($conn, $sql);
?>