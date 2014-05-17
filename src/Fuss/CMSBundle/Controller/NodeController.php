<?php

namespace Fuss\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NodeController extends Controller
{
    public function showAction($slug)
    {
        $filename = $this->get('kernel')->getRootDir() . '/nodes/articles/' . $slug . '.md';
        $text = file_get_contents($filename);
        $node = $this->container->get('node.parser')->parseNode($text);

        return $this->render('FussCMSBundle:Node:show.html.twig', array(
          'node_content' =>  $node->getBody(),
          'node_title' => $node->getField('title')
        ));
    }
}
