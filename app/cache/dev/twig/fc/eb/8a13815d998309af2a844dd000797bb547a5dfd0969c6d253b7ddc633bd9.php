<?php

/* BlogBundle:Default:edit.html.twig */
class __TwigTemplate_fceb8a13815d998309af2a844dd000797bb547a5dfd0969c6d253b7ddc633bd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BlogBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajouter un article";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo " ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
 <div class=\"form-group\">
 ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'errors');
        echo "
 ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label', array("label-attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'article"));
        echo "
 \t<div class=\"col-sm-4\">
 \t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t</div>
 </div>
 <div class=\"form-group\">
 ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur"), 'errors');
        echo "
 ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur"), 'label', array("label-attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur de l'article"));
        echo "
 \t<div class=\"col-sm-4\">
 \t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t</div>
 </div>
  <div class=\"form-group\">
 ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
        echo "
 ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'label', array("label-attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de l'article"));
        echo "
 \t<div class=\"col-sm-4\">
 \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t</div>
 </div>
  <div class=\"form-group\">
 ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "texte"), 'errors');
        echo "
 ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "texte"), 'label', array("label-attr" => array("class" => "col-sm-3 control-label"), "label" => "Texte de l'article"));
        echo "
 \t<div class=\"col-sm-4\">
 \t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "texte"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t</div>
 </div>
 <div class=\"form-group\">
 ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publier"), 'errors');
        echo "
 ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publier"), 'label', array("label-attr" => array("class" => "col-sm-3 control-label"), "label" => "Publier l'article ?"));
        echo "
 \t<div class=\"col-sm-4\">
 \t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publier"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t</div>
 </div>
 <div class=\"form-group\">
 ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "url"), 'errors');
        echo "
 ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "url"), 'label', array("label-attr" => array("class" => "col-sm-3 control-label"), "label" => "Url de l'image"));
        echo "
 \t<div class=\"col-sm-4\">
 \t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "url"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t</div>
 </div>
  <div class=\"form-group\">
 ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "alt"), 'errors');
        echo "
 ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "alt"), 'label', array("label-attr" => array("class" => "col-sm-3 control-label"), "label" => "Texte de l'image"));
        echo "
 \t<div class=\"col-sm-4\">
 \t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "alt"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t</div>
 </div>


 \t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

 ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "



";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

 ";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 62,  163 => 58,  158 => 56,  150 => 51,  145 => 49,  141 => 48,  134 => 44,  129 => 42,  125 => 41,  118 => 37,  113 => 35,  109 => 34,  102 => 30,  97 => 28,  93 => 27,  86 => 23,  81 => 21,  77 => 20,  70 => 16,  65 => 14,  61 => 13,  54 => 9,  49 => 7,  45 => 6,  39 => 4,  36 => 3,  29 => 2,);
    }
}
