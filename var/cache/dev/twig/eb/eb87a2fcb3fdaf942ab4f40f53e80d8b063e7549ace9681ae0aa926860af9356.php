<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_1c1fc4054d2338713b2f47d7966efd2cf2ccefa349b16371f671a4a37b77ca0c extends Twig_Template
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
        $__internal_75175d12058298451fb5dff8cf300facd3015ff5790caebe452754edb054d5c5 = $this->env->getExtension("native_profiler");
        $__internal_75175d12058298451fb5dff8cf300facd3015ff5790caebe452754edb054d5c5->enter($__internal_75175d12058298451fb5dff8cf300facd3015ff5790caebe452754edb054d5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_75175d12058298451fb5dff8cf300facd3015ff5790caebe452754edb054d5c5->leave($__internal_75175d12058298451fb5dff8cf300facd3015ff5790caebe452754edb054d5c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
