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
        $__internal_6bae86849ef71481e387b7d1f3ebf633e9a2282ea37721298e4a3cda03af059f = $this->env->getExtension("native_profiler");
        $__internal_6bae86849ef71481e387b7d1f3ebf633e9a2282ea37721298e4a3cda03af059f->enter($__internal_6bae86849ef71481e387b7d1f3ebf633e9a2282ea37721298e4a3cda03af059f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6bae86849ef71481e387b7d1f3ebf633e9a2282ea37721298e4a3cda03af059f->leave($__internal_6bae86849ef71481e387b7d1f3ebf633e9a2282ea37721298e4a3cda03af059f_prof);

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
