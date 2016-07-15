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
        $__internal_66a43e6b9a5d52ba46dd7f5b855bfc73b8d478d6118531d45d4a7167a6f44509 = $this->env->getExtension("native_profiler");
        $__internal_66a43e6b9a5d52ba46dd7f5b855bfc73b8d478d6118531d45d4a7167a6f44509->enter($__internal_66a43e6b9a5d52ba46dd7f5b855bfc73b8d478d6118531d45d4a7167a6f44509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66a43e6b9a5d52ba46dd7f5b855bfc73b8d478d6118531d45d4a7167a6f44509->leave($__internal_66a43e6b9a5d52ba46dd7f5b855bfc73b8d478d6118531d45d4a7167a6f44509_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3143fe2addf46af85cc11b4f7dd7a9a5b4253caec2a39e934b58cf7892cfc628 = $this->env->getExtension("native_profiler");
        $__internal_3143fe2addf46af85cc11b4f7dd7a9a5b4253caec2a39e934b58cf7892cfc628->enter($__internal_3143fe2addf46af85cc11b4f7dd7a9a5b4253caec2a39e934b58cf7892cfc628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page Accueil
";
        
        $__internal_3143fe2addf46af85cc11b4f7dd7a9a5b4253caec2a39e934b58cf7892cfc628->leave($__internal_3143fe2addf46af85cc11b4f7dd7a9a5b4253caec2a39e934b58cf7892cfc628_prof);

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
/*     Page Accueil*/
/* {% endblock %}*/
/* */
