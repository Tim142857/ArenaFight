<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_29fa2b837cbb37ed328b7058f2b7ebdfb2a5ddf360272c0241e9b9e4a29f2589 extends Twig_Template
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
        $__internal_9d5b7f3d185a2bca155d16ba7d70cd0d184b9fadc44288c719f8014a0f5f3115 = $this->env->getExtension("native_profiler");
        $__internal_9d5b7f3d185a2bca155d16ba7d70cd0d184b9fadc44288c719f8014a0f5f3115->enter($__internal_9d5b7f3d185a2bca155d16ba7d70cd0d184b9fadc44288c719f8014a0f5f3115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9d5b7f3d185a2bca155d16ba7d70cd0d184b9fadc44288c719f8014a0f5f3115->leave($__internal_9d5b7f3d185a2bca155d16ba7d70cd0d184b9fadc44288c719f8014a0f5f3115_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
