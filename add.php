<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="ajouter.php">
        <lable for="cin">CIN</lable><br>
        <input type="text" id="cin" name="cin"><br>

        <lable for="NOM">NOM</lable><br>
        <input type="text" id="NOM" name="nom"><br>

        <lable for="PRENOM">PRENOM</lable><br>
        <input type="text" id="PRENOM" name="prenom"><br>

        <lable for="EMAIL">EMAIL</lable><br>
        <input type="email" id="EMAIL" name="email"><br>

        <lable for="PASSWORD">PASSWORD</lable><br>
        <input type="password" id="PASSWORD" name="password"><br>

        <lable for="AGE">AGE</lable><br>
        <input type="number" id="AGE" name="age"><br><br>

        <button type="submit" name="ajouter">Ajouter</button>
    </form>
    <?php
        if (isset($_POST['ajouter'])){
            $cin = $_POST['cin'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $age = $_POST['age'];

            $conn = new PDO('mysql:host=localhost;dbname=client' ,'root','123');
            $sqlstate = $conn -> prepare('insert into client values(NULL,?,?,?,?,?,?)');
            $ajoute = $sqlstate -> execute([$cin,$nom,$prenom,$email,$password,$age]);

            header('location: ex.php');
        }
    ?>
</body>
</html>