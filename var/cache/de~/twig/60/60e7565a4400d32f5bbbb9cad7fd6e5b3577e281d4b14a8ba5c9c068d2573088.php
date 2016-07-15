<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_1305e08872b4bdf6b8bcd451d4ba29595f6c2914db4b6b28024eecdfe4060e4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_6c92bc37d0d9e56d15d920dd001e9c5206192851e0bee97d72d198d8e12ace6f = $this->env->getExtension("native_profiler");
        $__internal_6c92bc37d0d9e56d15d920dd001e9c5206192851e0bee97d72d198d8e12ace6f->enter($__internal_6c92bc37d0d9e56d15d920dd001e9c5206192851e0bee97d72d198d8e12ace6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c92bc37d0d9e56d15d920dd001e9c5206192851e0bee97d72d198d8e12ace6f->leave($__internal_6c92bc37d0d9e56d15d920dd001e9c5206192851e0bee97d72d198d8e12ace6f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a2ecdbf022dfcdb5e705677e4ba11c8134e1f7861e3612fb8a8ce9a4ca26353 = $this->env->getExtension("native_profiler");
        $__internal_7a2ecdbf022dfcdb5e705677e4ba11c8134e1f7861e3612fb8a8ce9a4ca26353->enter($__internal_7a2ecdbf022dfcdb5e705677e4ba11c8134e1f7861e3612fb8a8ce9a4ca26353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7a2ecdbf022dfcdb5e705677e4ba11c8134e1f7861e3612fb8a8ce9a4ca26353->leave($__internal_7a2ecdbf022dfcdb5e705677e4ba11c8134e1f7861e3612fb8a8ce9a4ca26353_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
