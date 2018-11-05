<?php
    $db = new PDO('mysql:host=localhost;dbname=data-try','root','');
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $pseudo = strip_tags(trim($_POST['pseudo']));
        $pwd = strip_tags(trim($_POST['pwd']));
        $pwdc = strip_tags(trim($_POST['pwdc']));
        $sexe = $_POST['sexe'];
        $adressemail = strip_tags(trim($_POST['mail']));
        if (empty($pseudo) OR empty($pwd) OR empty($pwdc) OR empty($sexe) OR empty($adressemail) OR !isset($pseudo,$pwd,$pwdc,$sexe,$adressemail)) {
            
            header('location:uiadd.php');
        }else{
            if ($pwd === $pwdc) {
                $query = $db->prepare('INSERT INTO user(pseudo,pwd,sexe,mail) VALUES (:pseudo,:pwd,:sexe,:mail)');
                $query->execute([':pseudo'=>$pseudo,':pwd'=>$pwd,':sexe'=>$sexe,':mail'=>$adressemail]);
            }else {
                header('location:uiadd.php');
            }
            
        }
    }