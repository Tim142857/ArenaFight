<?php

/* @ArenaFight/Accueil.html.twig */
class __TwigTemplate_8e5a3c52801fb8947ce1d4f0d8e908a0b81827aa83d075d2468806d954a95253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "@ArenaFight/Accueil.html.twig", 1);
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
        $__internal_c90b9deacedce1010b4c9569a26b3dba64b540c3caa6e4d7374dc9edc1e0fe19 = $this->env->getExtension("native_profiler");
        $__internal_c90b9deacedce1010b4c9569a26b3dba64b540c3caa6e4d7374dc9edc1e0fe19->enter($__internal_c90b9deacedce1010b4c9569a26b3dba64b540c3caa6e4d7374dc9edc1e0fe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90b9deacedce1010b4c9569a26b3dba64b540c3caa6e4d7374dc9edc1e0fe19->leave($__internal_c90b9deacedce1010b4c9569a26b3dba64b540c3caa6e4d7374dc9edc1e0fe19_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d2c48dbd92c111003059ddc7c7aeab17ef8629a17a21df8f45e133b6bcb19f = $this->env->getExtension("native_profiler");
        $__internal_e0d2c48dbd92c111003059ddc7c7aeab17ef8629a17a21df8f45e133b6bcb19f->enter($__internal_e0d2c48dbd92c111003059ddc7c7aeab17ef8629a17a21df8f45e133b6bcb19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_e0d2c48dbd92c111003059ddc7c7aeab17ef8629a17a21df8f45e133b6bcb19f->leave($__internal_e0d2c48dbd92c111003059ddc7c7aeab17ef8629a17a21df8f45e133b6bcb19f_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Accueil.html.twig";
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
