<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>테이블 생성</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <th scope="col">ID</td>
        <th scope="col">Name</td>
        <th scope="col">City</td>
        <th scope="col">JoinDate</td>
    </tr>
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id) {
        $sql = "SELECT * FROM adminTable WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        
    }
    ?>
    <tr>
        <td><?=$row['id']; ?></td>
        <form action='updateProcess.php' method='post'>
        <td><input type='text' name='name' id='name' placeholder='name' class='createInput' value='<?=$row['name']; ?>'></td>
            <td><input type='text' name='city' id='city' placeholder='city' class='createInput' value='<?=$row['city']?>'></td>
            <td class='date'><?=$row['JoinDate']; ?></td>
            <td><input type='submit' value='제출' class='createBtn'></td>
        </form>
    </tr>

</table>
</body>
</html>