<?php

/* LIGUESPlatformBundle:Default:forum.html.php */
class __TwigTemplate_f539878f9e0ca5a192cc1032a6d598434b8ec6b06df44c65fd325599dc41101c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<?php include('head.html.php'); ?>\t\t<!-- head -->
\t
\t<?php include('header.html.php') ?>\t\t<!-- header -->

\t<body>\t\t\t\t\t\t\t\t\t
\t\t<section id= \"pageAccueil\">\t\t\t<!-- CODE -->
\t\t\t<br/><br/><br/>ACCUEIL !
\t\t</section>
\t</body>

\t<?php include('footer.html.php'); ?>\t<!-- footer -->
</html>


<?php
\t//GENERER UNE URL: \$url = \$this->get('router')->generate('ligues_platform_homepage', array(),true);
?>";
    }

    public function getTemplateName()
    {
        return "LIGUESPlatformBundle:Default:forum.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
