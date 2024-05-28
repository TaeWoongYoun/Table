<?php $conn = mysqli_connect('localhost', 'root', '', 'adminDB')?>
<?php
$sql = "INSERT INTO adminTable(name, city) VALUE('{$_POST['name']}', '{$_POST['city']}')";
mysqli_query($conn, $sql)
?>

<script>
    alert("생성 완료")
    location.href='index.php?id=admin'
</script>