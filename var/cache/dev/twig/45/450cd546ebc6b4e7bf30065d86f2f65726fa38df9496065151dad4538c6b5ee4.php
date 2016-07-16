<?php

/* @ArenaFight/Joueur/Personnages_Ajouter.html.twig */
class __TwigTemplate_55793e110b051347f012ca5807b119bab4b0c42daf1b074ca36a192a989d98b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig", "@ArenaFight/Joueur/Personnages_Ajouter.html.twig", 1);
        $this->blocks = array(
            'bodyPerso' => array($this, 'block_bodyPerso'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a81e590f229134458138eaec52118eb43ce2127c094dd340a3cc95d70983e66 = $this->env->getExtension("native_profiler");
        $__internal_8a81e590f229134458138eaec52118eb43ce2127c094dd340a3cc95d70983e66->enter($__internal_8a81e590f229134458138eaec52118eb43ce2127c094dd340a3cc95d70983e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Joueur/Personnages_Ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a81e590f229134458138eaec52118eb43ce2127c094dd340a3cc95d70983e66->leave($__internal_8a81e590f229134458138eaec52118eb43ce2127c094dd340a3cc95d70983e66_prof);

    }

    // line 2
    public function block_bodyPerso($context, array $blocks = array())
    {
        $__internal_01c5f8d7253a1170b381478b452580e87012fddd5fc28293c32b8d017046cf3c = $this->env->getExtension("native_profiler");
        $__internal_01c5f8d7253a1170b381478b452580e87012fddd5fc28293c32b8d017046cf3c->enter($__internal_01c5f8d7253a1170b381478b452580e87012fddd5fc28293c32b8d017046cf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyPerso"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_01c5f8d7253a1170b381478b452580e87012fddd5fc28293c32b8d017046cf3c->leave($__internal_01c5f8d7253a1170b381478b452580e87012fddd5fc28293c32b8d017046cf3c_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Joueur/Personnages_Ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout_Page_Personnages.html.twig" %}*/
/* {% block bodyPerso %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
