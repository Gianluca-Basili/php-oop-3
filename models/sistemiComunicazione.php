<?php 
    class SistemiComunicazione{
        private $mittente;
        private $destinatario;
        private $oggetto;
        private $contenuto;
        public static $suoneria = "DRIIIIIN";

        public function __construct(string $_mittente, string $_destinatario, string $_oggetto, string $_contenuto){
            $this->mittente = $_mittente;
            $this->destinatario = $_destinatario;
            $this->oggetto = $_oggetto;
            $this->contenuto = $_contenuto;
        }

        public function setMittente($_mittente){
            $this->mittente = $_mittente;
        }

        public function getMittente(){
            return $this->mittente;
        }

        public function setDestinatario($_destinatario){
            $this->destinatario = $_destinatario;
        }
        
        public function getDestinatario(){
            return $this->destinatario;
        }

        public function setOggetto($_oggetto){
            $this->oggetto = $_oggetto;
        }

        public function getOggetto(){
            return $this->oggetto;
        }

        public function setContenuto($_contenuto){
            $this->contenuto = $_contenuto;
        }

        public function getContenuto(){
            return $this->contenuto;
        }

        public function invio(){
            return 'Comunicazione Inviata';
        }
    }

?>

         