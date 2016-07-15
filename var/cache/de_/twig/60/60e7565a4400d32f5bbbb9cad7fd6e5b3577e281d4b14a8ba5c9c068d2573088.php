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
        $__internal_57c4940f0da94f49c9e3a943fb4597b3b120a5dbe2ca74dcb72bb6efd5813881 = $this->env->getExtension("native_profiler");
        $__internal_57c4940f0da94f49c9e3a943fb4597b3b120a5dbe2ca74dcb72bb6efd5813881->enter($__internal_57c4940f0da94f49c9e3a943fb4597b3b120a5dbe2ca74dcb72bb6efd5813881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57c4940f0da94f49c9e3a943fb4597b3b120a5dbe2ca74dcb72bb6efd5813881->leave($__internal_57c4940f0da94f49c9e3a943fb4597b3b120a5dbe2ca74dcb72bb6efd5813881_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc8790a987813255465cb25c97133796e6219590b0b80b09945b9c633554b138 = $this->env->getExtension("native_profiler");
        $__internal_cc8790a987813255465cb25c97133796e6219590b0b80b09945b9c633554b138->enter($__internal_cc8790a987813255465cb25c97133796e6219590b0b80b09945b9c633554b138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cc8790a987813255465cb25c97133796e6219590b0b80b09945b9c633554b138->leave($__internal_cc8790a987813255465cb25c97133796e6219590b0b80b09945b9c633554b138_prof);

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
