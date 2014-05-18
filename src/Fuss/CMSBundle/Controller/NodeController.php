<?php

namespace Fuss\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NodeController extends Controller
{
    public function showAction($slug)
    {
        $filename = $this->get('kernel')->getRootDir() . '/nodes/articles/' . $slug . '.md';
        $node = $this->container->get('node.parser')->fileParseNode($filename);
        return $this->render($node->getView(), $node->getViewParameters());
    }
}
