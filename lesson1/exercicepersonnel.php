<?php
//============================================FUNCTION'S===========================================================
    function bonjour_genie_log(){
        return "bonjour denie logiciel";
    }

    function addition(int $a, int $b){
         $s = $a+$b;
         return $s;
    }
  // ==============================================ARRAY-BOUCLES============================================================
    $tab = array('google','facebook','php','code','windows','amazon','inspires-moi');
    $taille = count($tab);
    for ($i=0; $i < $taille; $i++) { 
        echo "<h1>".($tab[$i])."<br><br><hr>";
    }
    //----------------------------------------
    $table = array(
        '0977746522'=>'ROI',
        '0999999999'=>'REINE',
        '0986434555'=>'SOLDAT',
        '0987645323'=>'POLICIER'
    );

    foreach ($table as $key => $value) {
        
        if ($value == "ROI") {
            echo $key;
        }else {
            echo "mauvais identifiant!";
        }

    }

//=================================================================================================================
/*vive le web, vive github, vive git (lol) */
?>