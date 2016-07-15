<?php

/* ArenaFightBundle::Accueil.html.twig */
class __TwigTemplate_a01a5e2c05eca37f502a8469ccfde1d5840363f7af309c2653ea7e91bb50cfc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "ArenaFightBundle::Accueil.html.twig", 1);
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
        $__internal_69023a1504038685a35bea25f8b4601f674bf50401e253a8e3dd5e593752c3ae = $this->env->getExtension("native_profiler");
        $__internal_69023a1504038685a35bea25f8b4601f674bf50401e253a8e3dd5e593752c3ae->enter($__internal_69023a1504038685a35bea25f8b4601f674bf50401e253a8e3dd5e593752c3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69023a1504038685a35bea25f8b4601f674bf50401e253a8e3dd5e593752c3ae->leave($__internal_69023a1504038685a35bea25f8b4601f674bf50401e253a8e3dd5e593752c3ae_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ac538b72546e6f4de5ffc3f5d8123cec4bf58a360093c73494cbcccc5131639 = $this->env->getExtension("native_profiler");
        $__internal_1ac538b72546e6f4de5ffc3f5d8123cec4bf58a360093c73494cbcccc5131639->enter($__internal_1ac538b72546e6f4de5ffc3f5d8123cec4bf58a360093c73494cbcccc5131639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_1ac538b72546e6f4de5ffc3f5d8123cec4bf58a360093c73494cbcccc5131639->leave($__internal_1ac538b72546e6f4de5ffc3f5d8123cec4bf58a360093c73494cbcccc5131639_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle::Accueil.html.twig";
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
/* {% extends "ArenaFightBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
/* */
