<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>
<?php
    $filter = array(
        'id'=>mysqli_real_escape_string($conn, $_POST['id']),
        'name'=>mysqli_real_escape_string($conn, $_POST['name']),
        'city'=>mysqli_real_escape_string($conn, $_POST['city'])
    );

    $sql = "UPDATE adminTable SET name = '{$filter['name']}', city = '{$filter['city']}' WHERE id = {$filter['id']}";
    $result = mysqli_query($conn, $sql);
?>

<script>
    alert('업데이트 성공')
    location.href = 'index.php?id=admin'
</script>