<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_89dd6e71b170ee81e6f56031d2d105111c00ec4e2f364a27f8578a23e51e92b3 extends Twig_Template
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
        $__internal_4c5145bb7203053cb4b143e93ab5e5de3369eaddf01ccbbc1229ffa2b4522603 = $this->env->getExtension("native_profiler");
        $__internal_4c5145bb7203053cb4b143e93ab5e5de3369eaddf01ccbbc1229ffa2b4522603->enter($__internal_4c5145bb7203053cb4b143e93ab5e5de3369eaddf01ccbbc1229ffa2b4522603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_4c5145bb7203053cb4b143e93ab5e5de3369eaddf01ccbbc1229ffa2b4522603->leave($__internal_4c5145bb7203053cb4b143e93ab5e5de3369eaddf01ccbbc1229ffa2b4522603_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
