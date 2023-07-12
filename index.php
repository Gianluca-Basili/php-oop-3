<?php
    require_once __DIR__.'/models/sistemiComunicazione.php';
    require_once __DIR__.'/models/Email.php';
    $comm = new SistemiComunicazione('Gianluca', 'Francesco','Saluto', 'ciao francesco');
    
    echo "Mittente:". $comm->getMittente()."<br/>";
    echo "Destinatario:".$comm->getDestinatario()."<br/>";
    echo "Oggetto:".$comm->getOggetto()."<br/>";
    echo "Contenuto:".$comm->getContenuto()."<br/>";
    echo "Stato invio:".$comm->invio()."<br/>";

    $email = new Email('Michele', 'Giorgio', 'email test', 'contenuto email',true);
    echo "<hr/>";
    echo "Mittente:". $email->getMittente()."<br/>";
    echo "Destinatario:".$email->getDestinatario()."<br/>";
    echo "Oggetto:".$email->getOggetto()."<br/>";
    echo "Contenuto:".$email->getContenuto()."<br/>";
    if($email -> getNotifica_Consegna()){
        echo "l email è stata inviata<br/>";
    }
    else{
        echo "l email non è stata inviata <br/>";
    }

    echo "Stato invio:".$email->invio()."<br/>";
    echo "Inoltro:".$email->Inoltro()."<br/>";
    echo "Stampa:".$email->Stampa()."<br/>";



?>
    