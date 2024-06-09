<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new PDO('mysql:host=localhost;dbname=client' ,'root','123');
        $id = $_GET['id'];


        $res = $conn->prepare("SELECT * FROM client WHERE id_client=?");
        $res->execute([$id]);
        $data = $res->fetchAll(PDO::FETCH_NUM);
        foreach($data as $ele){

    ?>
    <form method="post" action="mod2.php">
        <lable for="cin">CIN</lable><br>
        <input type="text" id="cin" name="cin" value="<?php echo $ele[1] ;?>"><br>

        <lable for="NOM">NOM</lable><br>
        <input type="text" id="NOM" name="nom" value="<?php echo $ele[2]; ?>"><br>

        <lable for="PRENOM">PRENOM</lable><br>
        <input type="text" id="PRENOM" name="prenom" value="<?php echo $ele[3]; ?>"><br>

        <lable for="EMAIL">EMAIL</lable><br>
        <input type="email" id="EMAIL" name="email" value="<?php echo $ele[4]; ?>"><br>

        <lable for="PASSWORD">PASSWORD</lable><br>
        <input type="password" id="PASSWORD" name="password" value="<?php echo $ele[5]; ?>"><br>

        <lable for="AGE">AGE</lable><br>
        <input type="number" id="AGE" name="age"  value="<?php echo $ele[6]; ?>"><br><br>

        <input type="hidden" value="<?php echo $id ?>" name="id">
    <?php
        }
    ?>

        <button type="submit">MODIFIER</button>
    </form>
</body>
</html>