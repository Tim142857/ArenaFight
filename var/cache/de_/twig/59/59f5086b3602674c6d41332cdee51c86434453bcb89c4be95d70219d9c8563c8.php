<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_01de36f0d11bce0ab7578520048ff990993d33b67508c7453ff6440acb5c61a7 extends Twig_Template
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
        $__internal_5cc6f168be2d937f781a2c6ff015cb103286dbb72834167bd0c34ebcf9718a6c = $this->env->getExtension("native_profiler");
        $__internal_5cc6f168be2d937f781a2c6ff015cb103286dbb72834167bd0c34ebcf9718a6c->enter($__internal_5cc6f168be2d937f781a2c6ff015cb103286dbb72834167bd0c34ebcf9718a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5cc6f168be2d937f781a2c6ff015cb103286dbb72834167bd0c34ebcf9718a6c->leave($__internal_5cc6f168be2d937f781a2c6ff015cb103286dbb72834167bd0c34ebcf9718a6c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
