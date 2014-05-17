<?php

namespace Fuss\CMSBundle\Parser;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Fuss\CMSBundle\Models\Node;
use Symfony\Component\Yaml\Yaml;

class NodeParser
{
    private $markdownParser;

    public function __construct(MarkdownParserInterface $parser) {
        $this->markdownParser = $parser;
    }

    /**
     * @param string $text raw file contents must contain yml headers and markdown body
     * @return Node
     */
    public function parseNode($text) {
        if(!strpos($text, '---')) {
            throw new \Exception('failed to parse node, missing header section');
        }

        list($headers, $body) = explode('---', $text, 2);

        $node = new Node();
        $fields = $this->parseFields($headers);
        $node->setFields($fields);

        $html = $this->markdownParser->transformMarkdown($body);
        $node->setBody($html);
        
        return $node;
    }

    private function parseFields($headers) {
      return Yaml::parse($headers);
    }
}
