<?php
    $conn = new PDO('mysql:host=localhost;dbname=client' ,'root','123');
    $id = $_GET['id'];
    $query = $conn->prepare('DELETE FROM CLIENT WHERE id_client=?');
    $exe = $query->execute([$id]);
    header('location: index.php');
?>
