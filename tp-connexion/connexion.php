<?php
     $db = new PDO('mysql:host=localhost;dbname=data-try','root','');
     if ($_SERVER['REQUEST_METHOD'] =='POST') {
        $pseudo = strip_tags(trim($_POST['pseudo']));
        $pwd = sha1(strip_tags(trim($_POST['pwd'])));
        $user = $db->prepare('SELECT (pseudo,pwd) INTO user WHERE (pseudo =:pseudo AND pwd =: pwd)');
        if ($user) {
            echo "COMPTE VALIDE";
        }else{
            $_SERVER['HTTP_REFERER'];
        }

     }
