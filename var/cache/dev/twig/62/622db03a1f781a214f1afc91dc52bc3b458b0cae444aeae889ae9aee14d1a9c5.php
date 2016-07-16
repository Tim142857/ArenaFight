<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_3c099d59ca8a10dfb09da498d92f76d1d90727d214520521a2e53bee78482253 extends Twig_Template
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
        $__internal_9a8e01e2ea41a8d2a6db4c67b539df034f01017cc7249814e9d549db00e54eca = $this->env->getExtension("native_profiler");
        $__internal_9a8e01e2ea41a8d2a6db4c67b539df034f01017cc7249814e9d549db00e54eca->enter($__internal_9a8e01e2ea41a8d2a6db4c67b539df034f01017cc7249814e9d549db00e54eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9a8e01e2ea41a8d2a6db4c67b539df034f01017cc7249814e9d549db00e54eca->leave($__internal_9a8e01e2ea41a8d2a6db4c67b539df034f01017cc7249814e9d549db00e54eca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
