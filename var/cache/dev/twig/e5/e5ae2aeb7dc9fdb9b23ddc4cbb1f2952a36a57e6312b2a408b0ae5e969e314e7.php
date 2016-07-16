<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_9057fe2e06b5e3fa0cdccf89a3d51fba78c3479a69611e71db6d947a25faa1c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_dc15bd012a57e2804f745a09f524c81c6215be842dfc136f07d9c02c16c1663b = $this->env->getExtension("native_profiler");
        $__internal_dc15bd012a57e2804f745a09f524c81c6215be842dfc136f07d9c02c16c1663b->enter($__internal_dc15bd012a57e2804f745a09f524c81c6215be842dfc136f07d9c02c16c1663b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc15bd012a57e2804f745a09f524c81c6215be842dfc136f07d9c02c16c1663b->leave($__internal_dc15bd012a57e2804f745a09f524c81c6215be842dfc136f07d9c02c16c1663b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b4c32ee60c0a6119dfd9eef7319cf4215ca1a8963dd18808bd4cc7ef5110417 = $this->env->getExtension("native_profiler");
        $__internal_2b4c32ee60c0a6119dfd9eef7319cf4215ca1a8963dd18808bd4cc7ef5110417->enter($__internal_2b4c32ee60c0a6119dfd9eef7319cf4215ca1a8963dd18808bd4cc7ef5110417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2b4c32ee60c0a6119dfd9eef7319cf4215ca1a8963dd18808bd4cc7ef5110417->leave($__internal_2b4c32ee60c0a6119dfd9eef7319cf4215ca1a8963dd18808bd4cc7ef5110417_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
