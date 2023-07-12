<?php
    require_once __DIR__.'/models/sistemiComunicazione.php';
    require_once __DIR__.'/models/Email.php';
    require_once __DIR__.'/models/Allegato.php';
    require_once __DIR__.'/models/SMS.php';
    require_once __DIR__.'/models/NotificaPush.php';

    
    $comm = new SistemiComunicazione('Gianluca', 'Francesco','Saluto', 'ciao francesco');
    
    echo "Mittente:". $comm->getMittente()."<br/>";
    echo "Destinatario:".$comm->getDestinatario()."<br/>";
    echo "Oggetto:".$comm->getOggetto()."<br/>";
    echo "Contenuto:".$comm->getContenuto()."<br/>";
    echo "Stato invio:".$comm->invio()."<br/>";
    echo "Suoneria:".SistemiComunicazione::$suoneria."<br/>";
    

    $email = new Email('Michele', 'Giorgio', 'email test', 'contenuto email per giorgio',true);
    echo "<hr/>";
    echo "Mittente:". $email->getMittente()."<br/>";
    echo "Destinatario:".$email->getDestinatario()."<br/>";
    echo "Oggetto:".$email->getOggetto()."<br/>";
    echo "Contenuto:".$email->getContenuto()."<br/>";
    echo "Suoneria:".Email::$suoneria."<br/>";
    echo "color led:".Email::$colore_led."<br/>";

    if($email -> getNotifica_Consegna()){
        echo "l email è stata inviata<br/>";
    }
    else{
        echo "l email non è stata inviata <br/>";
    }

    echo "Stato invio:".$email->invio()."<br/>";
    echo "Inoltro:".$email->Inoltro()."<br/>";
    echo "Stampa:".$email->Stampa()."<br/>";

    $email_2 = new Email('Marco', 'Alessio', 'email per alessio', 'contenuto email per alessio',false);
    $allegato = new Allegato('immagine','png',1.8);

    $email_2-> setAllegato($allegato);
    echo "<hr/>";
    echo "Mittente:". $email_2->getMittente()."<br/>";
    echo "Destinatario:".$email_2->getDestinatario()."<br/>";
    echo "Oggetto:".$email_2->getOggetto()."<br/>";
    echo "Contenuto:".$email_2->getContenuto()."<br/>";
    echo "Suoneria:".Email::$suoneria."<br/>";
    echo "color led:".Email::$colore_led."<br/>";

    if($email_2 -> getNotifica_Consegna()){
        echo "l email è stata inviata<br/>";
    }
    else{
        echo "l email non è stata inviata <br/>";
    }

    echo "Stato invio:".$email_2->invio()."<br/>";
    echo "Inoltro:".$email_2->Inoltro()."<br/>";
    echo "Stampa:".$email_2->Stampa()."<br/>";
    echo "Allegato:".$email_2->allegato->getNome().".".$email_2->allegato->getTipo()."<br/>Dimensioni:".$email_2->allegato->getDimensione()."Mb<br/>";

    $sms = new SMS('Gianluca', 'Andrea', 'sms per andrea', 'contenuto per andrea',true, false);

    echo "<hr/>";
    echo "Mittente:". $sms->getMittente()."<br/>";
    echo "Destinatario:".$sms->getDestinatario()."<br/>";
    echo "Oggetto:".$sms->getOggetto()."<br/>";
    echo "Contenuto:".$sms->getContenuto()."<br/>";
    echo "Suoneria:".SMS::$suoneria."<br/>";
    echo "color led:".SMS::$colore_led."<br/>";

    if($sms -> getNotificaLettura()){
        echo "l sms è stato letto<br/>";
    }
    else{
        echo "l sms non è stato letto <br/>";
    }

    if($sms -> getAccettazioneRisposta()){
        echo "il messaggio accetta risposte <br/>";
    }
    else{
        echo "il messaggio non accetta risposte <br/>";
    }

    echo "Stato invio:".$sms->invio()."<br/>";

    $notificapush = new NotificaPush('Gianluca', 'Antonio', 'notifica push per l app di antonio', 'contenuto push per l app di antonio',true,'icona');
    echo "<hr/>";
    echo "Mittente:". $notificapush->getMittente()."<br/>";
    echo "Destinatario:".$notificapush->getDestinatario()."<br/>";
    echo "Oggetto:".$notificapush->getOggetto()."<br/>";
    echo "Contenuto:".$notificapush->getContenuto()."<br/>";
    echo "Suoneria:".NotificaPush::$suoneria."<br/>";
    echo "color led:".NotificaPush::$colore_led."<br/>";
    echo $notificapush->getVisibile() ? 'la notifica push è visibile <br/>': 'la notifica push non è visibile <br/>';
    echo "icona:".$notificapush->getIcona()."<br/>";


?>
    