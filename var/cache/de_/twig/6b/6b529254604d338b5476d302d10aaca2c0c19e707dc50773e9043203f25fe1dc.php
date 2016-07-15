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
        $__internal_83a69774748d9f0984d5e085a3051e9437f97051ca9a01fe4a9f301b4a8bd0a7 = $this->env->getExtension("native_profiler");
        $__internal_83a69774748d9f0984d5e085a3051e9437f97051ca9a01fe4a9f301b4a8bd0a7->enter($__internal_83a69774748d9f0984d5e085a3051e9437f97051ca9a01fe4a9f301b4a8bd0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_83a69774748d9f0984d5e085a3051e9437f97051ca9a01fe4a9f301b4a8bd0a7->leave($__internal_83a69774748d9f0984d5e085a3051e9437f97051ca9a01fe4a9f301b4a8bd0a7_prof);

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
