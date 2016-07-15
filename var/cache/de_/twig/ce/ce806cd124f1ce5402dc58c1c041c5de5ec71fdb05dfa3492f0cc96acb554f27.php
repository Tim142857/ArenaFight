<?php

/* @ArenaFight/Personnages.html.twig */
class __TwigTemplate_98b311d01c612316cb0d0d3534a4bac1df273b0f3da4de0e22749544821227cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "@ArenaFight/Personnages.html.twig", 1);
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
        $__internal_b5cec4c1a390ce50332a0dfc33627ece5ad97b0e421128e8adbc63dff0ef842e = $this->env->getExtension("native_profiler");
        $__internal_b5cec4c1a390ce50332a0dfc33627ece5ad97b0e421128e8adbc63dff0ef842e->enter($__internal_b5cec4c1a390ce50332a0dfc33627ece5ad97b0e421128e8adbc63dff0ef842e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Personnages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5cec4c1a390ce50332a0dfc33627ece5ad97b0e421128e8adbc63dff0ef842e->leave($__internal_b5cec4c1a390ce50332a0dfc33627ece5ad97b0e421128e8adbc63dff0ef842e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_736f993880a0b4de59dc9e5714b4fe5212700a5965500247ad7902b46450c811 = $this->env->getExtension("native_profiler");
        $__internal_736f993880a0b4de59dc9e5714b4fe5212700a5965500247ad7902b46450c811->enter($__internal_736f993880a0b4de59dc9e5714b4fe5212700a5965500247ad7902b46450c811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des personnages du joueur
";
        
        $__internal_736f993880a0b4de59dc9e5714b4fe5212700a5965500247ad7902b46450c811->leave($__internal_736f993880a0b4de59dc9e5714b4fe5212700a5965500247ad7902b46450c811_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Personnages.html.twig";
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
/*     Page des personnages du joueur*/
/* {% endblock %}*/
/* */
