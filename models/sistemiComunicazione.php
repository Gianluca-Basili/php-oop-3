<?php 
    class SistemiComunicazioni{
        private $_mittente;
        private $_destinatario;
        private $_oggetto;
        private $_contenuto;

        public function __construct(string $_mittente, string $_destinatario, string $_oggetto, string $_contenuto){
            $this->mittente = $_mittente;
            $this->destinatario = $_destinatario;
            $this->oggetto = $_oggetto;
            $this->contenuto = $_contenuto;
        }
    }

?>

         