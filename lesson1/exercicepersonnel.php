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
        echo "<hr><h1>".($tab[$i])."<br><br>";
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
            echo "<br><hr>".$key;
            break;
        }else {
            echo "mauvais identifiant!";
        }

    }

    function write_mail_cor(string $mail){
        
        if (empty($mail) || $mail == null) {
            
            return FALSE;
        }
        if(preg_match("#^[a-z0-9]+@[a-z]{2,6}+.[a-z]{2,4}$#i",$mail)){

            return "<br><hr>bonne adresse mail";
        }else{
            return "mauvais adresse mail";
        }
    }
    $test =  write_mail_cor('elviskankola1@gmail.com');
    print($test);

//=================================================================================================================
/*vive le web, vive github, vive git (lol) */
?>