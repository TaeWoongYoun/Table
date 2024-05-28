<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>셀 생성 완료</title>
</head>
<body>
    <?php
    $sql = "INSERT INTO adminTable(name, city) VALUE('{$_POST['name']}', '{$_POST['city']}')";
    mysqli_query($conn, $sql)
    ?>

    <script>
        alert("생성 완료")
        location.href='index.php?id=admin'
    </script>
</body>
</html>