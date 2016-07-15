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
        $__internal_4bafdc3db2337fc2a5ea7f092bed6e124cca16562fdb8c3bb56ae6525e931ec5 = $this->env->getExtension("native_profiler");
        $__internal_4bafdc3db2337fc2a5ea7f092bed6e124cca16562fdb8c3bb56ae6525e931ec5->enter($__internal_4bafdc3db2337fc2a5ea7f092bed6e124cca16562fdb8c3bb56ae6525e931ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4bafdc3db2337fc2a5ea7f092bed6e124cca16562fdb8c3bb56ae6525e931ec5->leave($__internal_4bafdc3db2337fc2a5ea7f092bed6e124cca16562fdb8c3bb56ae6525e931ec5_prof);

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
