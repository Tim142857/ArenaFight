<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5b9f4451f6213c8df3e54b21a52acb6748bacc4da8893f31f081dd27b415d6bf extends Twig_Template
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
        $__internal_791bc5b9f3b66c7633bbee25083b68bcdc34a1baf882604607e331a4ea05f07b = $this->env->getExtension("native_profiler");
        $__internal_791bc5b9f3b66c7633bbee25083b68bcdc34a1baf882604607e331a4ea05f07b->enter($__internal_791bc5b9f3b66c7633bbee25083b68bcdc34a1baf882604607e331a4ea05f07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_791bc5b9f3b66c7633bbee25083b68bcdc34a1baf882604607e331a4ea05f07b->leave($__internal_791bc5b9f3b66c7633bbee25083b68bcdc34a1baf882604607e331a4ea05f07b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
