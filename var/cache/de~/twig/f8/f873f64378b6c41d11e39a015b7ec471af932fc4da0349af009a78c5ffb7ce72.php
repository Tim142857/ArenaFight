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
        $__internal_07d70113e3200e27fc4e9ec0909ec329e07ce8e00984082c455d04b354028f4f = $this->env->getExtension("native_profiler");
        $__internal_07d70113e3200e27fc4e9ec0909ec329e07ce8e00984082c455d04b354028f4f->enter($__internal_07d70113e3200e27fc4e9ec0909ec329e07ce8e00984082c455d04b354028f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_07d70113e3200e27fc4e9ec0909ec329e07ce8e00984082c455d04b354028f4f->leave($__internal_07d70113e3200e27fc4e9ec0909ec329e07ce8e00984082c455d04b354028f4f_prof);

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
