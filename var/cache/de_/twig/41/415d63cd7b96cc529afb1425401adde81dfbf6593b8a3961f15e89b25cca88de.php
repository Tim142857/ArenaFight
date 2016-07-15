<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_470f1f18794016aafab559d2289fc6d5d8da1c963f71b76eb47ca90ff6ea3fdf extends Twig_Template
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
        $__internal_f076f0258058df4485eb536a3a0bdba5fafa81aafcb841d2c82bb5d2ddbf3d9e = $this->env->getExtension("native_profiler");
        $__internal_f076f0258058df4485eb536a3a0bdba5fafa81aafcb841d2c82bb5d2ddbf3d9e->enter($__internal_f076f0258058df4485eb536a3a0bdba5fafa81aafcb841d2c82bb5d2ddbf3d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f076f0258058df4485eb536a3a0bdba5fafa81aafcb841d2c82bb5d2ddbf3d9e->leave($__internal_f076f0258058df4485eb536a3a0bdba5fafa81aafcb841d2c82bb5d2ddbf3d9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
