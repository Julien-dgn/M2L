<?php

/* BlogBundle:Default:layout.html.twig */
class __TwigTemplate_88f668f0fd98dd9387e0748b0098b90fc3047a370ee17a29218d81edfba90fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta charset=\"UTF-8\"/>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t\t
\t</head>
<body>


";
        // line 14
        $this->env->loadTemplate("BlogBundle:Default:menu.html.twig")->display($context);
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Mon blog ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t\t";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "

";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  64 => 15,  59 => 7,  56 => 6,  50 => 4,  43 => 15,  41 => 14,  34 => 9,  32 => 6,  27 => 4,  22 => 1,  170 => 62,  163 => 58,  158 => 56,  150 => 51,  145 => 49,  141 => 48,  134 => 44,  129 => 42,  125 => 41,  118 => 37,  113 => 35,  109 => 34,  102 => 30,  97 => 28,  93 => 27,  86 => 23,  81 => 21,  77 => 20,  70 => 16,  65 => 14,  61 => 13,  54 => 9,  49 => 7,  45 => 19,  39 => 4,  36 => 3,  29 => 2,);
    }
}
