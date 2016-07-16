<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ca68e1fe234b2dd1503e98785f8671596efc7081b9e4754af7d0b72d3bf7d6e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_0b31181fd995cc46db092b753a66ab4d702754e42ba334f28c288028c012467c = $this->env->getExtension("native_profiler");
        $__internal_0b31181fd995cc46db092b753a66ab4d702754e42ba334f28c288028c012467c->enter($__internal_0b31181fd995cc46db092b753a66ab4d702754e42ba334f28c288028c012467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b31181fd995cc46db092b753a66ab4d702754e42ba334f28c288028c012467c->leave($__internal_0b31181fd995cc46db092b753a66ab4d702754e42ba334f28c288028c012467c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e4c379c50f83e77abf67112bd5b268ad1566b107ffa4b5bbfacd5909cd75a17 = $this->env->getExtension("native_profiler");
        $__internal_2e4c379c50f83e77abf67112bd5b268ad1566b107ffa4b5bbfacd5909cd75a17->enter($__internal_2e4c379c50f83e77abf67112bd5b268ad1566b107ffa4b5bbfacd5909cd75a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2e4c379c50f83e77abf67112bd5b268ad1566b107ffa4b5bbfacd5909cd75a17->leave($__internal_2e4c379c50f83e77abf67112bd5b268ad1566b107ffa4b5bbfacd5909cd75a17_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
