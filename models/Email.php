<?php 
    class Email extends SistemiComunicazione{
       public $allegato;
       private $notifica_consegna;

       public function __construct(string $_mittente, string $_destinatario, string $_oggetto, string $_contenuto, bool $notifica_consegna){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->notifica_consegna = $notifica_consegna;
       }

       public function setAllegato($_allegato){
        $this->alleggato = $_allegato;
       }

       public function getAllegato(){
        return $this->allegato;
       }

       public function setNotifica_Consegna($_notifica_consegna){
        $this->alleggato = $_notifica_consegna;
       }

       public function getNotifica_Consegna(){
        return $this->notifica_consegna;
       }

       public function Inoltro(){
        return 'Email inoltrato';
       } 

       public function Stampa(){
        return 'Email stampato';
       } 

       public function Invio(){
        return 'Email inviata';
       } 
    }
?>