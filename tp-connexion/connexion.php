<?php

     if ($_SERVER['REQUEST_METHOD'] =='POST') {
        $db = new PDO('mysql:host=localhost;dbname=data-try','root','');
        $pseudo = strip_tags(trim($_POST['pseudo']));
        $pwd = strip_tags(trim($_POST['pwd']));
        $query = $db->query("SELECT * FROM user WHERE pseudo = $pseudo AND pwd =$pwd");
        if ($query == true) {
            echo "COMPTE VALIDE";
        }else{
            echo 'Null';
        }

     }
