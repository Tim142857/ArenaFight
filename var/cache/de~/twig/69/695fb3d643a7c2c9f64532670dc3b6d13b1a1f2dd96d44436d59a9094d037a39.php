<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e719fc629ce0d39a47333c7554fb87c426e32b0a9967a7f9bfb89553fce7b695 extends Twig_Template
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
        $__internal_5ff452eb5ba83b019170d74c252b7571d41f8cedd0ca97a0a933a63fba0a6c54 = $this->env->getExtension("native_profiler");
        $__internal_5ff452eb5ba83b019170d74c252b7571d41f8cedd0ca97a0a933a63fba0a6c54->enter($__internal_5ff452eb5ba83b019170d74c252b7571d41f8cedd0ca97a0a933a63fba0a6c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5ff452eb5ba83b019170d74c252b7571d41f8cedd0ca97a0a933a63fba0a6c54->leave($__internal_5ff452eb5ba83b019170d74c252b7571d41f8cedd0ca97a0a933a63fba0a6c54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
