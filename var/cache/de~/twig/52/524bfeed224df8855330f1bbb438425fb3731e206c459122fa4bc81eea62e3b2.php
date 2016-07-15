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
        $__internal_d78890a9386ea28fd7f0bd918b82ec16273cc12b5f69ac57bf13be0633c4a105 = $this->env->getExtension("native_profiler");
        $__internal_d78890a9386ea28fd7f0bd918b82ec16273cc12b5f69ac57bf13be0633c4a105->enter($__internal_d78890a9386ea28fd7f0bd918b82ec16273cc12b5f69ac57bf13be0633c4a105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d78890a9386ea28fd7f0bd918b82ec16273cc12b5f69ac57bf13be0633c4a105->leave($__internal_d78890a9386ea28fd7f0bd918b82ec16273cc12b5f69ac57bf13be0633c4a105_prof);

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
