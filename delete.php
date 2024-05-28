<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>
<?php
    settype($_POST['id'], 'integer');
    $filter = array(
        'id'=> mysqli_real_escape_string($conn, $_POST['id'])
    );
    $sql = "DELETE FROM adminTable WHERE id = {$filter['id']}";
    $result = mysqli_query($conn, $sql)
?>

<script>
    alert('삭제 성공')
    location.href = 'index.php?id=admin'
</script>