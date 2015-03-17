<?php

/* LIGUESPlatformBundle:Default:espaceMembre.html.php */
class __TwigTemplate_92c7e7f15073427e8d1050387f691f8edcea70819b4a2c3df90eec7b4bb948f6 extends Twig_Template
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
\t\t<section id= \"pageEspace_membre\">\t<!-- CODE -->
\t\t\t<section id= \"titre_emplacement\"><br/>PAGE: ESPACE MEMBRE</section><br/><br/>
\t\t\t<br/><br/><section id= \"espace_membre_news\"><br/><a href= \"\">NEWS</a></section>
\t\t\t<br/><br/><section id= \"espace_membre_categorie\"><br/>
\t\t\t<a href= \" <?php \$url = \$this->get('router')->generate('ligues_platform_forum_espace_membre_categorie_membre', array(),true); echo \$url; ?>\">
\t\t\t\tCATEGORIE D'ARTICLE DES MEMBRES
\t\t\t</a></section>
\t\t\t<br/><br/><section id= \"espace_membre_aide_question\"><br/>AIDE/QUESTION</section>
\t\t</section>
\t</body>

\t<?php include('footer.html.php'); ?>\t<!-- footer -->
</html>
";
    }

    public function getTemplateName()
    {
        return "LIGUESPlatformBundle:Default:espaceMembre.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
