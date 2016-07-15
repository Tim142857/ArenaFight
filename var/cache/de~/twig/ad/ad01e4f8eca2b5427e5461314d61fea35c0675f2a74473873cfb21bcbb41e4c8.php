<?php

/* @ArenaFight/Authentification.html.twig */
class __TwigTemplate_d8d6985c2f36ebc54da3c74331b6df3ab7e9a64ece5234c489414e5052af399c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "@ArenaFight/Authentification.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79de066b4eadb7acc9604c97fb6471a0696c2379c839d686271f611720277892 = $this->env->getExtension("native_profiler");
        $__internal_79de066b4eadb7acc9604c97fb6471a0696c2379c839d686271f611720277892->enter($__internal_79de066b4eadb7acc9604c97fb6471a0696c2379c839d686271f611720277892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Authentification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79de066b4eadb7acc9604c97fb6471a0696c2379c839d686271f611720277892->leave($__internal_79de066b4eadb7acc9604c97fb6471a0696c2379c839d686271f611720277892_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_de51269e3d97d1ae35fa9cc4834312cc6af9364019066703f51ee982e7019f12 = $this->env->getExtension("native_profiler");
        $__internal_de51269e3d97d1ae35fa9cc4834312cc6af9364019066703f51ee982e7019f12->enter($__internal_de51269e3d97d1ae35fa9cc4834312cc6af9364019066703f51ee982e7019f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   

";
        
        $__internal_de51269e3d97d1ae35fa9cc4834312cc6af9364019066703f51ee982e7019f12->leave($__internal_de51269e3d97d1ae35fa9cc4834312cc6af9364019066703f51ee982e7019f12_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle::Layout.html.twig" %}*/
/* {% block body %}   */
/* */
/* {% endblock %}*/
/* */
