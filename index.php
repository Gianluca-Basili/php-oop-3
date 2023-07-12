<?php
    require_once __DIR__.'/models/sistemiComunicazione.php';

    $comm = new SistemiComunicazione('Gianluca', 'Francesco','Saluto', 'ciao francesco');
    
    echo "Mittente:". $comm->getMittente()."<br/>";
    echo "Destinatario:".$comm->getDestinatario()."<br/>";
    echo "Oggetto:".$comm->getOggetto()."<br/>";
    echo "Contenuto:".$comm->getContenuto()."<br/>";
    echo "Stato invio:".$comm->invio()."<br/>";


?>