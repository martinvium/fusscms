<?php

namespace Fuss\CMSBundle\Models;

class Node
{
    private $fields = array();
    private $body;

    public function setFields(array $fields) {
        $this->fields = $fields;
    }
    
    public function getFields() { 
        return $this->fields;
    }
    
    public function setBody($body) {
        $this->body = $body;
    }
    
    public function getBody() { 
        return $this->body;
    }

    public function getField($name) {
        return $this->fields[$name];
    }
}
