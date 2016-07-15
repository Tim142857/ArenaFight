<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_99c72d132414f23691407a0ee92b0275a977b702e3e809a894a5fe12fdfa0ef3 extends Twig_Template
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
        $__internal_7e3ce59dc2a3249d5f38aef9a138d618f351883d405062876d3f0cddc53ee4dd = $this->env->getExtension("native_profiler");
        $__internal_7e3ce59dc2a3249d5f38aef9a138d618f351883d405062876d3f0cddc53ee4dd->enter($__internal_7e3ce59dc2a3249d5f38aef9a138d618f351883d405062876d3f0cddc53ee4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7e3ce59dc2a3249d5f38aef9a138d618f351883d405062876d3f0cddc53ee4dd->leave($__internal_7e3ce59dc2a3249d5f38aef9a138d618f351883d405062876d3f0cddc53ee4dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
