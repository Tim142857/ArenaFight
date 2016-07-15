<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a060a0f9337f7397d8b0bcacbe2e0cb1246c552256d64767f84cfdea5eb76de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_efa554f5c0af1d25e557f54a70b93af560c7a58517a6fc7526fddcf1bb3e91bb = $this->env->getExtension("native_profiler");
        $__internal_efa554f5c0af1d25e557f54a70b93af560c7a58517a6fc7526fddcf1bb3e91bb->enter($__internal_efa554f5c0af1d25e557f54a70b93af560c7a58517a6fc7526fddcf1bb3e91bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa554f5c0af1d25e557f54a70b93af560c7a58517a6fc7526fddcf1bb3e91bb->leave($__internal_efa554f5c0af1d25e557f54a70b93af560c7a58517a6fc7526fddcf1bb3e91bb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecfbed058c965802ddf53b6dc22d7c4b335040d6235ac2675ebe68f9a0b08d2c = $this->env->getExtension("native_profiler");
        $__internal_ecfbed058c965802ddf53b6dc22d7c4b335040d6235ac2675ebe68f9a0b08d2c->enter($__internal_ecfbed058c965802ddf53b6dc22d7c4b335040d6235ac2675ebe68f9a0b08d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ecfbed058c965802ddf53b6dc22d7c4b335040d6235ac2675ebe68f9a0b08d2c->leave($__internal_ecfbed058c965802ddf53b6dc22d7c4b335040d6235ac2675ebe68f9a0b08d2c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
