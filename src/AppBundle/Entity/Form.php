<?php


namespace AppBundle\Entity;


class Form
{
    public $Titre;
    public $Message;

    public function getTitle()
    {
        return $this->Titre;
    }

    public function setTitle($Titre)
    {
        $this->task = $Titre;
    }

    public function getMessage()
    {
        return $this->Message;
    }

    public function setMessage($Message)
    {
        $this->task = $Message;
    }
}