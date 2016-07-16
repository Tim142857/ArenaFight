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
        $__internal_a323fa49d7a24f238b2cdd55f05348ca2ae58b825d100de6ec32e207d6f40f71 = $this->env->getExtension("native_profiler");
        $__internal_a323fa49d7a24f238b2cdd55f05348ca2ae58b825d100de6ec32e207d6f40f71->enter($__internal_a323fa49d7a24f238b2cdd55f05348ca2ae58b825d100de6ec32e207d6f40f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a323fa49d7a24f238b2cdd55f05348ca2ae58b825d100de6ec32e207d6f40f71->leave($__internal_a323fa49d7a24f238b2cdd55f05348ca2ae58b825d100de6ec32e207d6f40f71_prof);

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
