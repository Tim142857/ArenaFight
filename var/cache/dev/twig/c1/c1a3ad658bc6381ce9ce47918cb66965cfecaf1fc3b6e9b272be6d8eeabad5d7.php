<?php

/* ArenaFightBundle:Joueur:Accueil.html.twig */
class __TwigTemplate_d6c667f2c41b91c8be6ada11ab7b91b3b22396c24043cc8a088ae392fa87fd4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout.html.twig", "ArenaFightBundle:Joueur:Accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Joueur:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad55880b7ec117266978d5dde71cee79a9026043cc9a0ef084bc7fdf606040f1 = $this->env->getExtension("native_profiler");
        $__internal_ad55880b7ec117266978d5dde71cee79a9026043cc9a0ef084bc7fdf606040f1->enter($__internal_ad55880b7ec117266978d5dde71cee79a9026043cc9a0ef084bc7fdf606040f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad55880b7ec117266978d5dde71cee79a9026043cc9a0ef084bc7fdf606040f1->leave($__internal_ad55880b7ec117266978d5dde71cee79a9026043cc9a0ef084bc7fdf606040f1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4681c0dfad7d3337d159941608dc6bc186031366411e6c6b745c8b1bb237c6e1 = $this->env->getExtension("native_profiler");
        $__internal_4681c0dfad7d3337d159941608dc6bc186031366411e6c6b745c8b1bb237c6e1->enter($__internal_4681c0dfad7d3337d159941608dc6bc186031366411e6c6b745c8b1bb237c6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_4681c0dfad7d3337d159941608dc6bc186031366411e6c6b745c8b1bb237c6e1->leave($__internal_4681c0dfad7d3337d159941608dc6bc186031366411e6c6b745c8b1bb237c6e1_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Accueil.html.twig";
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
/* {% extends "ArenaFightBundle:Joueur:Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
/* */
