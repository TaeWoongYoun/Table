<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>셀 업데이트 완료</title>
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'adminDB');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
    $city = isset($_POST['city']) ? mysqli_real_escape_string($conn, $_POST['city']) : '';

    if ($name !== '' && $city !== '') {
        $sql = "UPDATE adminTable SET name = '$name', city = '$city'";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "Name and city fields are required";
    }

    mysqli_close($conn);
    ?>

    <a href="index.php?id=admin">업데이트 완료 돌아가기</a>
</body>
</html>