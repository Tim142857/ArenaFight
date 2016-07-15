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
        $__internal_3e6b87dd4c38824b0bf3ccb7a7cac5e9547f817e162b5876febdbcda25774288 = $this->env->getExtension("native_profiler");
        $__internal_3e6b87dd4c38824b0bf3ccb7a7cac5e9547f817e162b5876febdbcda25774288->enter($__internal_3e6b87dd4c38824b0bf3ccb7a7cac5e9547f817e162b5876febdbcda25774288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e6b87dd4c38824b0bf3ccb7a7cac5e9547f817e162b5876febdbcda25774288->leave($__internal_3e6b87dd4c38824b0bf3ccb7a7cac5e9547f817e162b5876febdbcda25774288_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ba48289220b14a38a08f09fdea67eddab8fb5150291cf7c925e9d13bad53b21 = $this->env->getExtension("native_profiler");
        $__internal_0ba48289220b14a38a08f09fdea67eddab8fb5150291cf7c925e9d13bad53b21->enter($__internal_0ba48289220b14a38a08f09fdea67eddab8fb5150291cf7c925e9d13bad53b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0ba48289220b14a38a08f09fdea67eddab8fb5150291cf7c925e9d13bad53b21->leave($__internal_0ba48289220b14a38a08f09fdea67eddab8fb5150291cf7c925e9d13bad53b21_prof);

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
