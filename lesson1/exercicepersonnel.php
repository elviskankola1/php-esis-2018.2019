<?php
//============================================FUNCTION'S===========================================================
    function bonjour_genie_log(){
        return "bonjour denie logiciel";
    }

    function addition(int $a, int $b){
         $s = $a+$b;
         return $s;
    }
  // ==============================================ARRAY============================================================
    $tab = array('elvis','kankola','tshibala','valentin','html','python','ville');
    $taille = count($tab);
    for ($i=0; $i < $taille; $i++) { 
        echo($tab[$i])."<br><br>";
    }
//=================================================================================================================
/*vive le web, vive github, vive git tout ca grace a vscode! (lol) */
?>