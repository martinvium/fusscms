<?php

namespace Fuss\CMSBundle\Model;

class Node
{
    const DEFAULT_VIEW = 'FussCMSBundle:Node:default.html.twig';

    private $fields = array();
    private $body;

    public function setFields(array $fields) 
    {
        $this->fields = $fields;
    }
    
    public function getFields() 
    { 
        return $this->fields;
    }
    
    public function setBody($body) 
    {
        $this->body = $body;
    }
    
    public function getBody() 
    { 
        return $this->body;
    }

    public function getField($name) 
    {
        if(isset($this->fields[$name])) {
            return $this->fields[$name];
        }
        return null;
    }

    public function getViewParameters() 
    {
        return array(
          'body' =>  $this->getBody(),
          'title' => $this->getTitle()
        );
    }

    public function getTitle() 
    {
        return $this->getField('title');
    }

    public function getView() 
    {
        return $this->getField('view') ?: self::DEFAULT_VIEW;
    }
}
