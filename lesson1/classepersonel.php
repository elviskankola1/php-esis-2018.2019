<?php
   class simple_class {
       
//=======================================ATTRIBUTS DE CLASSE======================================
    private $nom_auditoire;
    private $professeur_auditoire;
    private $nb_eleve_auditoire;
//========================================CONSTRUCTEUR=============================================
    function __construct(string $classe, string $prof, int $nb){

        $this->set_nom_auditoire($classe);
        $this->set_professeur_auditoire($prof);
        $this->set_nb_eleve_auditoire($nb);

    }
//===================================SETTER'S======================================================
    public function set_nom_auditoire( string $nom){
        $this->nom_auditoire = $nom;
    }
    public function set_professeur_auditoire(string $prof){
        $this->professeur_auditoire = $prof;
    }
    public function set_nb_eleve_auditoire(int $nb){
        $this->nb_eleve_auditoire = $nb;
    }
//================================GETTER'S========================================================
    public function get_nom_auditoire(){
        return $this->nom_auditoire;
    }
    public function get_professeur_auditoire(){
        return $this->professeur_auditoire;
    }
    public function get_nb_eleve(){
        return $this->nb_eleve_auditoire;
    }
//=========================================ACTION'S=================================================
    public function dir_aud(){
        return "Vous etes dans l'auditoire : ".$this->nom_auditoire;
    }
    public function dir_prof(){
        return "le prof qui vous enseigne est : ".$this->professeur_auditoire;
    }
    public function dir_nb(){
         return "et le nombre des etudiants est : ".$this->nb_eleve_auditoire;
    }


   }
   //===========================FIN DE LA CLASSE ===================================
   echo "<br><br><br><br><h4>=====================================================TEST YOUR SIMPLE CLASS==============================================================<br><br><br><br><br>";

?>
   <form method="post">
        <input type ="text" name="nom"  placeholder="entrez le nom de la filiere" required>
        <input type ="text" name="prof"  placeholder="entrez le nom du prof" required>
        <input type ="number" name="nb"  placeholder="entrez le nombre des etudiant"  required>
        <input type ="submit" value ="try">
   
   </form>
<?php

    if (empty($_POST['nom']) || empty($_POST['prof']) || empty($_POST['nb']) || !isset($_POST['nom']) || !isset($_POST['prof']) || !isset($_POST['nb'])) {
        
        print("entrez des informations souhaitees svp!");
    }else {

        $a = new simple_class($_POST['nom'],$_POST['prof'],$_POST['nb']);
        $b = $a->dir_aud();
        print("<br><br>".$b);
        $c = $a->dir_prof();
        print("<br><br>".$c);
        $d = $a->dir_nb();
        print("<br><br>".$d);
    }







?>
    