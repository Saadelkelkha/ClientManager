<?php
            $cin = $_POST['cin'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $age = $_POST['age'];
            $id = $_POST["id"];

            $conn = new PDO('mysql:host=localhost;dbname=client' ,'root','123');
            $sqlstate = $conn -> prepare('UPDATE client SET cin = ? , nom = ?, prenom = ?, email = ?, password = ?, age = ? WHERE id_client = ?');
            $modify =$sqlstate -> execute([$cin,$nom,$prenom,$email,$password,$age,$id]);

            header('location: index.php');

?>
