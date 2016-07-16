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
        $__internal_697d2d0b647400e3ee4bfca177bcda95b2fd8cf713511c5a43cda6525939e499 = $this->env->getExtension("native_profiler");
        $__internal_697d2d0b647400e3ee4bfca177bcda95b2fd8cf713511c5a43cda6525939e499->enter($__internal_697d2d0b647400e3ee4bfca177bcda95b2fd8cf713511c5a43cda6525939e499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_697d2d0b647400e3ee4bfca177bcda95b2fd8cf713511c5a43cda6525939e499->leave($__internal_697d2d0b647400e3ee4bfca177bcda95b2fd8cf713511c5a43cda6525939e499_prof);

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
