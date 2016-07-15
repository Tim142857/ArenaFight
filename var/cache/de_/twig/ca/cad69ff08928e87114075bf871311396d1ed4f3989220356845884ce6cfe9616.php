<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4e4a4ad32d7047e918b698f6d9d8736ecb2a73b3ec20d2a9f19ffcbef9e377dd extends Twig_Template
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
        $__internal_3499f807a5cfc258b5e0536ee54f64febedcd87a8b5dc1d9d4bcfcf805bdb7de = $this->env->getExtension("native_profiler");
        $__internal_3499f807a5cfc258b5e0536ee54f64febedcd87a8b5dc1d9d4bcfcf805bdb7de->enter($__internal_3499f807a5cfc258b5e0536ee54f64febedcd87a8b5dc1d9d4bcfcf805bdb7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3499f807a5cfc258b5e0536ee54f64febedcd87a8b5dc1d9d4bcfcf805bdb7de->leave($__internal_3499f807a5cfc258b5e0536ee54f64febedcd87a8b5dc1d9d4bcfcf805bdb7de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
