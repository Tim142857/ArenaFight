<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_94dc2f841851b0cec0fffbb93cc00f9899dfea9ebd0c72032b7652df398f0454 extends Twig_Template
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
        $__internal_6d00c15ac0c5a6cb87d758e52f35eecdcf7013c425310d910f2ce1e4bc071bbf = $this->env->getExtension("native_profiler");
        $__internal_6d00c15ac0c5a6cb87d758e52f35eecdcf7013c425310d910f2ce1e4bc071bbf->enter($__internal_6d00c15ac0c5a6cb87d758e52f35eecdcf7013c425310d910f2ce1e4bc071bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6d00c15ac0c5a6cb87d758e52f35eecdcf7013c425310d910f2ce1e4bc071bbf->leave($__internal_6d00c15ac0c5a6cb87d758e52f35eecdcf7013c425310d910f2ce1e4bc071bbf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
