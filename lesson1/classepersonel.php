<?php
   class simple_class {
       
    private $nom_auditoire;
    private $professeur_auditoire;
    private $nb_eleve_auditoire;

    function __construct(string $classe, string $prof, int $nb){

    }

    public function set_nom_auditoire( string $nom){
        $this->nom_auditoire = $nom;
    }
    public function set_professeur_auditoire(string $prof){
        $this->professeur_auditoire = $prof;
    }
    public function set_nb_eleve_auditoire(int $nb){
        $this->nb_eleve_auditoire = $nb;
    }



   }
    