<?php

class Contact_formController{
    private $contact_formManager;

    public function __construct()
    {
        parrent::__construct()
        {
            $this->contact_formManager = new Contact_form();
        }
    }
    public function add(){
        if($_SERVER["REQUEST_METHOD"]=="POST"{
        }
    }
}