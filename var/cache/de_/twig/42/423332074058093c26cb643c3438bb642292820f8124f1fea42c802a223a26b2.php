<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e0474d6e97e6d187251df066fa8feefb83154bee88cbf0a07ba17e754312b38e extends Twig_Template
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
        $__internal_a78342db7f824d014e6fe7c0295c73c7c66032533dc7b1b1bb97396ba7054fc2 = $this->env->getExtension("native_profiler");
        $__internal_a78342db7f824d014e6fe7c0295c73c7c66032533dc7b1b1bb97396ba7054fc2->enter($__internal_a78342db7f824d014e6fe7c0295c73c7c66032533dc7b1b1bb97396ba7054fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a78342db7f824d014e6fe7c0295c73c7c66032533dc7b1b1bb97396ba7054fc2->leave($__internal_a78342db7f824d014e6fe7c0295c73c7c66032533dc7b1b1bb97396ba7054fc2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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