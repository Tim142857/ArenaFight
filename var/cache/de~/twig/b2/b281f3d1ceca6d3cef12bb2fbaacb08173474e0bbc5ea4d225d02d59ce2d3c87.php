<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_43431748a65b5830db19cba9c130d7e5e7176ff497aa5e33d8a2e6cf9a97f1b9 extends Twig_Template
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
        $__internal_d37ef96d44a12510846ca5a3b638d191d1c7e43c5969e95d5389ea42815d2abb = $this->env->getExtension("native_profiler");
        $__internal_d37ef96d44a12510846ca5a3b638d191d1c7e43c5969e95d5389ea42815d2abb->enter($__internal_d37ef96d44a12510846ca5a3b638d191d1c7e43c5969e95d5389ea42815d2abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d37ef96d44a12510846ca5a3b638d191d1c7e43c5969e95d5389ea42815d2abb->leave($__internal_d37ef96d44a12510846ca5a3b638d191d1c7e43c5969e95d5389ea42815d2abb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
