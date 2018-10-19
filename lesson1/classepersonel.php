<?php
   class simple_class {
       
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



   }
    