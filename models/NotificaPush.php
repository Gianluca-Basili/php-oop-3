<?php
    class NotificaPush extends SistemiComunicazione{
        private $visibile;
        private $icona;
        public static $colore_led = "yellow";

        public function __construct(string $_mittente, string $_destinatario, string $_oggetto, string $_contenuto, bool $_visibile, string $_icona){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->visibile = $_visibile;
            $this->icona = $_icona;
            
        }
        
        public function getVisibile(){
            return $this->visibile;
        }

        public function getIcona(){
            return $this->icona;
        }

        public function Invio(){
            return 'notifica push inviata';
        }

        public function Click(){
            return 'apro l app collegata alla notifica';
        }
    }
?>