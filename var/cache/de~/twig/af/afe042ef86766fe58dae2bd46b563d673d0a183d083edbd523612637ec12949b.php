<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2f04b90f18714fe0769191da8494f3b5e371505c851effea4bd294c6db914379 extends Twig_Template
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
        $__internal_263ebdc5f96e647483f563417b2141ad334f4f6cfd7320d3dec79be45c93d5be = $this->env->getExtension("native_profiler");
        $__internal_263ebdc5f96e647483f563417b2141ad334f4f6cfd7320d3dec79be45c93d5be->enter($__internal_263ebdc5f96e647483f563417b2141ad334f4f6cfd7320d3dec79be45c93d5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_263ebdc5f96e647483f563417b2141ad334f4f6cfd7320d3dec79be45c93d5be->leave($__internal_263ebdc5f96e647483f563417b2141ad334f4f6cfd7320d3dec79be45c93d5be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
