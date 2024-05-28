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
            $sql = "SELECT * FROM adminTable";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['city']}</td>
                    <td class='date'>{$row['JoinDate']}</td>
                </tr>";
            }
            echo "
                    <form action='createProcess.php' method='post'>
                        <td>create</td>
                        <td><input type='text' name='name' id='name' placeholder='name' class='createInput'></td>
                        <td><input type='text' name='city' id='city' placeholder='city' class='createInput'></td>
                        <td>알아서 입력됨;;</td>
                        <td><input type='submit' value='제출' class='createBtn'></td>
                    </form>";
        ?>
</table>
</body>
</html>