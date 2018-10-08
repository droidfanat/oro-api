<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace oroapi\models\entities;


class Entities {
    public $type;
    public $id;
    public function __construct($type,$id) {
        $this->type=(string)$type;
        $this->id=(string)$id;
    }
}
