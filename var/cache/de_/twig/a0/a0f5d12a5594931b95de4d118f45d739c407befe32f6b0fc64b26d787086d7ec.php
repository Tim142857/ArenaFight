<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_26257a73b3cbb5df5ecf8e2b950d30276dd515eede6c81e60df3f15b27982363 extends Twig_Template
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
        $__internal_2aa283934861456ebc282c85e51b296d21ab7b60f44c189118763f98d59db974 = $this->env->getExtension("native_profiler");
        $__internal_2aa283934861456ebc282c85e51b296d21ab7b60f44c189118763f98d59db974->enter($__internal_2aa283934861456ebc282c85e51b296d21ab7b60f44c189118763f98d59db974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa283934861456ebc282c85e51b296d21ab7b60f44c189118763f98d59db974->leave($__internal_2aa283934861456ebc282c85e51b296d21ab7b60f44c189118763f98d59db974_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c537d94e985b2cb583554aec23f94dd187928ffb15923cb8f2fa9ae938edf0f = $this->env->getExtension("native_profiler");
        $__internal_6c537d94e985b2cb583554aec23f94dd187928ffb15923cb8f2fa9ae938edf0f->enter($__internal_6c537d94e985b2cb583554aec23f94dd187928ffb15923cb8f2fa9ae938edf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6c537d94e985b2cb583554aec23f94dd187928ffb15923cb8f2fa9ae938edf0f->leave($__internal_6c537d94e985b2cb583554aec23f94dd187928ffb15923cb8f2fa9ae938edf0f_prof);

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
