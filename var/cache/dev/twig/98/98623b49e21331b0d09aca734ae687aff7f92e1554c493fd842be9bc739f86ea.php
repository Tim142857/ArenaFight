<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_bc979671e49c6ee598da8ee4baa0571b63dac175206ee23a4264ed3258ebe7c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_9e2aadda54a8845718ad05334fc6ed0ff35af57ea5e78571e2b4566968d5d531 = $this->env->getExtension("native_profiler");
        $__internal_9e2aadda54a8845718ad05334fc6ed0ff35af57ea5e78571e2b4566968d5d531->enter($__internal_9e2aadda54a8845718ad05334fc6ed0ff35af57ea5e78571e2b4566968d5d531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e2aadda54a8845718ad05334fc6ed0ff35af57ea5e78571e2b4566968d5d531->leave($__internal_9e2aadda54a8845718ad05334fc6ed0ff35af57ea5e78571e2b4566968d5d531_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ef2029f09975188c71c6890067f5e685e8e3376687f51f8e89b1714e44d25ad = $this->env->getExtension("native_profiler");
        $__internal_9ef2029f09975188c71c6890067f5e685e8e3376687f51f8e89b1714e44d25ad->enter($__internal_9ef2029f09975188c71c6890067f5e685e8e3376687f51f8e89b1714e44d25ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9ef2029f09975188c71c6890067f5e685e8e3376687f51f8e89b1714e44d25ad->leave($__internal_9ef2029f09975188c71c6890067f5e685e8e3376687f51f8e89b1714e44d25ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
