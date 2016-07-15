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
        $__internal_bd176745e0a144f55026e0297cbe6f4a486477cdaa9bd3dc6384640faa20ee5a = $this->env->getExtension("native_profiler");
        $__internal_bd176745e0a144f55026e0297cbe6f4a486477cdaa9bd3dc6384640faa20ee5a->enter($__internal_bd176745e0a144f55026e0297cbe6f4a486477cdaa9bd3dc6384640faa20ee5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bd176745e0a144f55026e0297cbe6f4a486477cdaa9bd3dc6384640faa20ee5a->leave($__internal_bd176745e0a144f55026e0297cbe6f4a486477cdaa9bd3dc6384640faa20ee5a_prof);

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
