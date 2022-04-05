<?php

class Contact_form extends DbManager{
    public function newmessage($contactmail){
        $query = $this->bdd->prepare("INSERT INTO contactmail (null, mail, nom, sujet, content) VALUES (email, mail, content, date)");
        $query->execute([
            
            "mail"=> $contactmail->getEmail(),
            "nom"=> $contactmail->getNamed(),
            "sujet"=> $contactmail->getSubject(),
            "content"=> $contactmail->getContent(),
            "date"=>$contactmail->getdate()->format("Y-m-d"),
            
        ]);
    }
}