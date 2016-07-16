<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_6755ff7bc5976b46b6afa58024ec463fbb89f201015061745b64b57105293ec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_934671b0898779f1cc572daa77197adbd1547c747933009869ebb1202ff1f604 = $this->env->getExtension("native_profiler");
        $__internal_934671b0898779f1cc572daa77197adbd1547c747933009869ebb1202ff1f604->enter($__internal_934671b0898779f1cc572daa77197adbd1547c747933009869ebb1202ff1f604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934671b0898779f1cc572daa77197adbd1547c747933009869ebb1202ff1f604->leave($__internal_934671b0898779f1cc572daa77197adbd1547c747933009869ebb1202ff1f604_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc806a1a33d1ba092744c593dedb448b8149b5c61319fe04588dc475bd519422 = $this->env->getExtension("native_profiler");
        $__internal_bc806a1a33d1ba092744c593dedb448b8149b5c61319fe04588dc475bd519422->enter($__internal_bc806a1a33d1ba092744c593dedb448b8149b5c61319fe04588dc475bd519422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_bc806a1a33d1ba092744c593dedb448b8149b5c61319fe04588dc475bd519422->leave($__internal_bc806a1a33d1ba092744c593dedb448b8149b5c61319fe04588dc475bd519422_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
