<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>
<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    $sql = "UPDATE adminTable SET name = '$name', city = '$city' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
?>

<script>
    alert('업데이트 성공')
    location.href = 'index.php?id=admin'
</script>