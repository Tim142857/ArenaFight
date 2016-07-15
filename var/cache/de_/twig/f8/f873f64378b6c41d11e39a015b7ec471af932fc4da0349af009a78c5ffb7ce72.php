<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_1979080c03ef0d482fbe131065cd55f5291edafec93fd14e433e623b48c7dd16 extends Twig_Template
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
        $__internal_d578556bf8832e0767ac6df8fec934172595c5491c9057da038a1d712f046a2d = $this->env->getExtension("native_profiler");
        $__internal_d578556bf8832e0767ac6df8fec934172595c5491c9057da038a1d712f046a2d->enter($__internal_d578556bf8832e0767ac6df8fec934172595c5491c9057da038a1d712f046a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d578556bf8832e0767ac6df8fec934172595c5491c9057da038a1d712f046a2d->leave($__internal_d578556bf8832e0767ac6df8fec934172595c5491c9057da038a1d712f046a2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
