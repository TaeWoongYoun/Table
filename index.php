<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>테이블</title>
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
            if (isset($_GET['id']) && $_GET['id'] === 'admin') {
                $sql = "SELECT * FROM adminTable";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['city']}</td>
                        <td class='date'>{$row['JoinDate']}</td>
                        <td><a href='update.php?id={$row['id']}'><button class='sqlBtn'>UPDATE</button></a></td>
                        <td>
                            <form action='delete.php' method='post'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <input type='submit' value='DELETE' class='sqlBtn'>                            
                            </form>    
                        </td>
                    </tr>";
                }
                echo "<td colspan='6'><button class='sqlBtn'><a href='create.php'>CREATE</a></button></td>";
            } else {
                $sql = "SELECT * FROM adminTable";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['city']}</td>
                            <td class='date'>{$row['JoinDate']}</td>
                        </tr>";
                }
            }
        ?>
</table>
</body>
</html>