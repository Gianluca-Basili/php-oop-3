<?php
    class SMS extends SistemiComunicazione {
        private $notifica_lettura;
        private $accettazione_risposta;
        public static $colore_led = "Green";

        public function __construct(string $_mittente, string $_destinatario, string $_oggetto, string $_contenuto, bool $notifica_lettura, bool $accettazione_risposta){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->notifica_lettura = $notifica_lettura;
            $this->accettazione_risposta = $accettazione_risposta;
            
        }

        public function getNotificaLettura(){
            return $this->notifica_lettura;
        }
            
        public function getAccettazioneRisposta(){
            return $this->accettazione_risposta;
        }

        public function Invio(){
            return 'SMS inviato';
        }

        public function Risposta(){
            return 'grazie per avermi scritto';
        }
    }
?>