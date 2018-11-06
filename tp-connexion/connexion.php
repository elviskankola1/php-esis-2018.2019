<?php

     if ($_SERVER['REQUEST_METHOD'] =='POST') {
        $db = new PDO('mysql:host=localhost;dbname=data-try','root','');
        $pseudo = strip_tags(trim($_POST['pseudo']));
        $pwd = strip_tags(trim($_POST['pwd']));
        $query = $db->query("SELECT * FROM user");
        while ($data = $query->fetch()) {
            if($data['pseudo'] == $pseudo && $data['pwd'] == $pwd){

                echo 'bienvenue!';
                break;
            }else{
                echo 'incorrecte';
            }
        }
     }
