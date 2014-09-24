<?php

/* layout.html */
class __TwigTemplate_aac97d7753c5fc14a074dac56fac76a2a47d6b777bcc3e0a40e52bac3fb582c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>";
        // line 5
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"public/css/style.css\">
</head>
<body>
\t<div id=\"conteudo\">
\t\t";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "\t</div>
</body>
</html>";
    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        echo " ";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 5,  37 => 11,  35 => 10,  27 => 5,  21 => 1,  31 => 4,  28 => 3,);
    }
}
