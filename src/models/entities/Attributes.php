<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace oroapi\models\entities;


class Attributes {
    public    $name;    
    public    $firstName; 
    public    $lastName;
    public    $primaryEmail;
    public    $emails;

    public function __construct($name,$firstName,$lastName, $emails,$phones) {
        $this->emails=[$emails];
        $this->phones=[$phones];
        $this->name=$name;
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->primaryEmail=$emails->email;
    }
    
    
    
    
}