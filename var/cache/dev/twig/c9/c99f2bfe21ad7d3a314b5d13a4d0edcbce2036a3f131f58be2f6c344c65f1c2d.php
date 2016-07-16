<?php

/* @ArenaFight/Joueur/Accueil.html.twig */
class __TwigTemplate_aab2c97fea71159dc2f48063e1c036fcbab4e59e9d68963ebbff31cb78c79e37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout.html.twig", "@ArenaFight/Joueur/Accueil.html.twig", 1);
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
        $__internal_30a5dfc6f8ec69669a3cfeec8e195593ea66f18166e44b8276a6775c0331be49 = $this->env->getExtension("native_profiler");
        $__internal_30a5dfc6f8ec69669a3cfeec8e195593ea66f18166e44b8276a6775c0331be49->enter($__internal_30a5dfc6f8ec69669a3cfeec8e195593ea66f18166e44b8276a6775c0331be49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Joueur/Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a5dfc6f8ec69669a3cfeec8e195593ea66f18166e44b8276a6775c0331be49->leave($__internal_30a5dfc6f8ec69669a3cfeec8e195593ea66f18166e44b8276a6775c0331be49_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e694b24a1363913ab239bdcfe867593fbaacb144c7e12da892c513681b0a0e3 = $this->env->getExtension("native_profiler");
        $__internal_8e694b24a1363913ab239bdcfe867593fbaacb144c7e12da892c513681b0a0e3->enter($__internal_8e694b24a1363913ab239bdcfe867593fbaacb144c7e12da892c513681b0a0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_8e694b24a1363913ab239bdcfe867593fbaacb144c7e12da892c513681b0a0e3->leave($__internal_8e694b24a1363913ab239bdcfe867593fbaacb144c7e12da892c513681b0a0e3_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Joueur/Accueil.html.twig";
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
