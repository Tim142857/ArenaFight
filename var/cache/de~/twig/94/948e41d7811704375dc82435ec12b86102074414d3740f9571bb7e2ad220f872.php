<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4a2a6bee9297ccbb2c68a33a458a5a243ed5cc20a6c260ac1ea9f672757df2c5 extends Twig_Template
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
        $__internal_5256185f6fe0055260e2dd7287e6f22937666d5c0a63beeb6a30b925a3589e42 = $this->env->getExtension("native_profiler");
        $__internal_5256185f6fe0055260e2dd7287e6f22937666d5c0a63beeb6a30b925a3589e42->enter($__internal_5256185f6fe0055260e2dd7287e6f22937666d5c0a63beeb6a30b925a3589e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5256185f6fe0055260e2dd7287e6f22937666d5c0a63beeb6a30b925a3589e42->leave($__internal_5256185f6fe0055260e2dd7287e6f22937666d5c0a63beeb6a30b925a3589e42_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */