<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_90d56621f3830d4ca9edabc6294b26afd13187436f0bfa8ad20988ba6659e96c extends Twig_Template
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
        $__internal_a8eb607cd3fd72c4ec79bf0dff5aa7a532c9ad974709d446e82a09495d1067ed = $this->env->getExtension("native_profiler");
        $__internal_a8eb607cd3fd72c4ec79bf0dff5aa7a532c9ad974709d446e82a09495d1067ed->enter($__internal_a8eb607cd3fd72c4ec79bf0dff5aa7a532c9ad974709d446e82a09495d1067ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a8eb607cd3fd72c4ec79bf0dff5aa7a532c9ad974709d446e82a09495d1067ed->leave($__internal_a8eb607cd3fd72c4ec79bf0dff5aa7a532c9ad974709d446e82a09495d1067ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
