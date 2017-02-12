<?php

class Mail
{
    private $_destinataire;
    private $_expediteur;
    private $_objet;
    private $_headers;
    private $_message;

    public function __construct($_destinataire, $_expediteur, $_objet, $_message)
    {
        $this->_destinataire = $_destinataire;
        $this->_expediteur = $_expediteur;
        $this->_objet = $_objet;
        $this->_headers = 'MIME-Version: 1.0' . "\n";
        $this->_headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n";
        $this->_headers .= 'From: "Marmiton"<' . $this->_expediteur . '>' . "\n"; // Expediteur
        $this->_headers .= 'Delivered-to: ' . $this->_destinataire . "\n"; // Destinataire
        $this->_message = "<div style='width: 100%; text-align: center; font-weight: bold'>Votre recette a été acceptée !</div><div>$this->_message</div>";
    }

    public function getDestinataire()
    {
        return $this->_destinataire;
    }

    public function setDestinataire($destinataire)
    {
        $this->_destinataire = $destinataire;
        return $this;
    }

    public function getObjet()
    {
        return $this->_objet;
    }

    public function setObjet($objet)
    {
        $this->_objet = $objet;
        return $this;
    }

    public function getMessage()
    {
        return $this->_message;
    }

    public function setMessage($message)
    {
        $this->_message = $message;
        return $this;
    }

    public function send()
    {
        if (mail($this->_destinataire, $this->_objet, $this->_message, $this->_headers))
            echo 'Votre message a bien été envoyé ';
        else
            print_r( "Votre message n'a pas pu être envoyé : " );

    }

}