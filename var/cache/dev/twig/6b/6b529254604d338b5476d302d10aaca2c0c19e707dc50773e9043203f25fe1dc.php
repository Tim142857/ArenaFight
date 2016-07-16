<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_6b9850c5f906db2314666715bf8c90053c3e074cee8c0b581f9d025f9d1e5d8d extends Twig_Template
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
        $__internal_ac8e510ce4938fcfd6dcfb966ee9044e86b1bbf0392b5266d2e777d36a77d967 = $this->env->getExtension("native_profiler");
        $__internal_ac8e510ce4938fcfd6dcfb966ee9044e86b1bbf0392b5266d2e777d36a77d967->enter($__internal_ac8e510ce4938fcfd6dcfb966ee9044e86b1bbf0392b5266d2e777d36a77d967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ac8e510ce4938fcfd6dcfb966ee9044e86b1bbf0392b5266d2e777d36a77d967->leave($__internal_ac8e510ce4938fcfd6dcfb966ee9044e86b1bbf0392b5266d2e777d36a77d967_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
