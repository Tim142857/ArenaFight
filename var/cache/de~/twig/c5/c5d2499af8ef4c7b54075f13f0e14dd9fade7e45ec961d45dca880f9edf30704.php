<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_757560ac77da7b4d83330bc8e47d1a833ca787a84fb6f20edca4bcedaac940fe extends Twig_Template
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
        $__internal_0489f852694fdcb6985161c1e79620de1095b4a142c7d86d610ed1018f688347 = $this->env->getExtension("native_profiler");
        $__internal_0489f852694fdcb6985161c1e79620de1095b4a142c7d86d610ed1018f688347->enter($__internal_0489f852694fdcb6985161c1e79620de1095b4a142c7d86d610ed1018f688347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0489f852694fdcb6985161c1e79620de1095b4a142c7d86d610ed1018f688347->leave($__internal_0489f852694fdcb6985161c1e79620de1095b4a142c7d86d610ed1018f688347_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
